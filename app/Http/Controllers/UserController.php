<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Http\Requests\StorePostRequest;
use App\Http\Resources\PostResource;
class UserController extends Controller
{
    public function dashboard()
    {
        $UserDetails = post::withCount('reactions')
        ->withCount('comments')
        // ->with([
        //     'latest5Comments' => function($query){
        //         $query->latest()->take(5);
        //     }
        //     ])
        ->latest()->paginate(10);
        // return view('index')->with('UserDetails',$UserDetails);
        // dd($UserDetails);
        $postDetailsResources =PostResource::collection($UserDetails);
        // dd($postDetailsResources);
        return view('index',['postDetails' => $postDetailsResources]);
        // return PostResource::collection($UserDetails);
    }

    public function page404()
    {
        return view('errors.404');
    }

    public function searchresult()
    {
        return view('User.search-result');
    }

    public function notifications()
    {
        return view('User.notifications');
    }

    public function help()
    {
        return view('User.help-faq');
    }

    public function addnewcourse()
    {
        return view('User.add-new-course');
    }

    public function userlogin()
    {
        return view('User.login');
    }

    public function usersignup()
    {
        return view('User.signup');
    }

    public function livestream()
    {
        return view('User.live-stream');
    }

    public function uservideo()
    {
        return view('User.videos');
    }

    public function Usercources()
    {
        return view('User.cources');
    }

    public function books()
    {
        return view('User.books');
    }

    public function blog()
    {
        return view('User.blog');
    }
    public function groups()
    {
        return view('User.groups');
    }
    public function settings()
    {
        return view('User.settings');
    }
    public function productcart()
    {
        return view('product-cart');
    }
    public function userProfile()
    {
        return view('User.profile');
    }
    public function userProfile2()
    {
        return view('User.profile2');
    }
    public function payout()
    {
        return view('User.pay-out');
    }
    public function priceplan()
    {
        return view('User.price-plan');
    }
    public function privacypolicy()
    {
        return view('User.privacy-n-policy');
    }

    public function message()
    {
        return view('User.message');
    }



}
