<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\post;
use App\Models\follower;
use App\Http\Resources\PostResource;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Auth;

use App\Repos\Interfaces\ProfileInterface;

class ProfileController extends Controller
{
    public function updateCover(Request $request){
        // $data = $request->cover_path;
        // $data = $request->validate([
        //       'cover_path' => ['nullable','image'],
        //       'avatar_path' => ['nullable','image']
        // ]);
           $user = $request->user();
        // $avatar = $data['avatar_path'] ?? null;
           $cover = $request->cover_path;
        // dd($cover);
           if($cover){
                // $foldername = 'user-'.auth()->user()->id;
                // $path = $cover->store($foldername,null,'public');
                $path = $cover->store('covers/'.$user->id,'public');
                $user->update(['cover_path' => $path]);
                // dd($path);
                return back()->with('message','Updated Successfully');
            }
    }

    public function updateAvatar(Request $request){
            $user = $request->user();
            $avatar = $request->avatar_path;
            // dd($avatar);
            if($avatar){
                $path = $avatar->store('avatars/'.$user->id,'public');
                $user->update(['avatar_path' => $path]);
                return back()->with('message','Updated Successfully');
            }
    }


    public function viewProfile(Request $request,User $user)
    {
        $isCurrentUserFollower = false;
        if(!Auth::guest()){
            $isCurrentUserFollower = follower::where('user_id',$user->id)->where('follower_id',Auth::id())->exists();
        }

        $followerCount = follower::where('user_id',$user->id)->count();
        $followingCount =follower::where('follower_id',$user->id)->count();
        $currentUserPosts = post::where('user_id',$user->id)->count();

        $UserDetails = post::withCount('reactions')
        ->withCount('comments')->where('user_id',$user->id)
        // ->with([
        //     'latest5Comments' => function($query){
        //         $query->latest()->take(5);
        //     }
        //     ])
        ->latest()->paginate(10);
        // return view('index')->with('UserDetails',$UserDetails);
        // dd($UserDetails);
        $postDetails =PostResource::collection($UserDetails);


        $user = User::find($user)->first();
        return view('User.profile2', compact('user','isCurrentUserFollower','followerCount','followingCount','currentUserPosts','postDetails'));

    }

}
