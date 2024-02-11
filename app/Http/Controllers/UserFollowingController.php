<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\follower;


class UserFollowingController extends Controller
{
    public function follow(User $user)
    {
        $isCurrentUserFollower = false;
        if(!Auth::guest()){
            $isCurrentUserFollower = follower::where('user_id',$user->id)->where('follower_id',Auth::id())->exists();
        }

        // dd($isCurrentUserFollower);
        if($isCurrentUserFollower == 'true'){
            follower::query()->where('user_id',$user->id)->where('follower_id',Auth::id())->delete();
            $message = 'You followed user '.$user->name;
        }
        else{
            follower::create([
                'user_id' => $user->id,
                'follower_id' => Auth::id()
            ]);
            $message = 'You Unfollowed user '.$user->name;
        }



        return back()->with('sucess',$message);
    }
}
