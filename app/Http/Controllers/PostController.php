<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\postAttachment;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function store(StorePostRequest $request){
       $data = $request->validated();
       $user = $request->user();
       $allFilePaths = [];
       
      DB::beginTransaction();
      try{

      
       $post = Post::create($data);

       /**
        *  @var \Illuminate\Http\UploadedFile[] $files
       */
       $files = $data['attachments'] ?? [];
       foreach($files as $file){
        $path = $file->store('attachments/'.$post->id,'public');
        $allFilePaths = $path;
        $attachment = PostAttachment::create([
                    'post_id' => $post->id,
                    'name' => $file->getClientOriginalName(),
                    'path' => $path,
                    'mine' => $file->getMimeType(),
                    'size' => $file->getSize(),
                    'created_by' => $user->id,
        ]);
       }
       DB::commit();
      }
      catch(\Exception $e){
         
         foreach($allFilePaths as $path){
            Storage::disk('public')->delete($path);
         }
          DB::rollback();
          throw $e;
      }
      
       return back();
    }

    public function update(Request $request,Post $post){
        
    }
    
}
