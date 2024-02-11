<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\postAttachment;
use App\Models\post_reaction;
use App\Models\comment;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Http\Enums\PostReactionEnum;
use App\Http\Resources\CommentResource;

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

        $userId = Auth::id();

        $reaction = post_reaction::where('user_id',$userId)->where('post_id',$post->id)->first();

        if($reaction){

            $reaction->delete();

        }else{

            post_reaction::create([
                'post_id' => $post->id,
                'user_id' => Auth::id(),
                'type' => $data['reaction']
            ]);
        }
        // dd($data['reaction']);
        $reactions = post_reaction::where('post_id',$post->id)->count();
            //  return response([
            //     'success'=> true,
            //     'reactions' => '1.3K'
            //  ]);
        return back();


    }

    public function createComment(Request $request,Post $post)
    {
        $data = $request->validate([
            'comment' => ['required']
        ]);

        $comment = comment::create([
            'post_id' => $post->id,
            'comment' => $data['comment'],
            'user_id' => Auth::id()
        ]);

        // return response(new CommentResource($comment), status: 201);
        return back();
    }

}
