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
        follower::create([
            'user_id' => $user->id,
            'follower_id' => Auth::id()
        ]);

        return back()->with('sucess','You followed user '.$user->name);
    }
}
