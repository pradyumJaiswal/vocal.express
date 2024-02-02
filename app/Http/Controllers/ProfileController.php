<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
            $condition = true;
            $path = $avatar->store('avatars/'.$user->id,'public');
            $user->update(['avatar_path' => $path]);
            // dd($path);
            return back()->with('condition',$condition);
        }

        
    }


}
