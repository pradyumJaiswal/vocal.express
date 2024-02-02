<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
    public function store(StorePostRequest $request){

       $data = $request->validated();  
    // dd($data);
       Post::create($data);
       return back();

    }

    public function update(Request $request,Post $post){
        
    }
    
}
