<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\postAttachment;
use App\Models\post_reaction;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Http\Enums\PostReactionEnum;
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

    public function postReaction(Request $request,Post $post)
    {
       $user = $request->user();

    //    dd($post->id);

    $data = $request->validate([
        'reaction' => [Rule::enum(PostReactionEnum::class)]
    ]);
    // dd($data['reaction']);
     $reaction = post_reaction::create([
                    'post_id' => $post->id,
                    'user_id' => Auth::id(),
                    'type' => $data['reaction']

                ]);

         return response([
            'success'=> true,
            'reactions' => '1.3K'
         ]);



    }

}
