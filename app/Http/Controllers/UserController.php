<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('index');
    }
    // public function Course()
    // {
    //     return view('User.UserPages.Course');
    // }
    // public function Teacher()
    // {
    //     return view('User..UserPages.Teacher');
    // }
    // public function Moments()
    // {
    //     return view('User..UserPages.Moment');
    // }
    // public function Connect()
    // {
    //     return view('User..UserPages.Connect');
    // }
    // public function Library()
    // {
    //     return view('User..UserPages.Library');
    // }
    // public function Profile()
    // {
    //     return view('User..UserPages.Profile');
    // }

//..............................new tamplate route....................//


    public function page404()
    {
        return view('errors.404');
    }

    // public function dashboard()
    // {
    //     return view('index');
    // }

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
