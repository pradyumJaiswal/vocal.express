<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\RegValidation;
use App\Http\Requests\logValidation;
class AuthController extends Controller
{
    public function loadRegister()
    {
        if(Auth::user()){
            $route = $this->redirect();
            return redirect($route);
        }
        return view('User.signup');
    }

    public function register(RegValidation $request)
    {
        if($request){
            $request->validated();

            $user = new User;
            $user->name = $request->name;
            $user->user_name = $request->user_name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->role = $request->role;
            $user->password = Hash::make($request->password);
            $user->save();
            return back()->with('success','Your Registration has been successfull.');
        }
        else{
            return redirect()->back()->withInput();
        }
        
    }

    public function loadLogin()
    {
        if(Auth::user()){
            $route = $this->redirect();
            return redirect($route);
        }
        return view('User.login');
    }

    public function AdminloadLogin()
    {
        if(Auth::user()){
            $route = $this->redirect();
            return redirect($route);
        }
        return view('Admin.index');
    }

    public function login(logValidation $request)
    {

        try{
            if($request){
                $request->validated();
                $userCredential = $request->only('email','password');
                if(Auth::attempt($userCredential)){
                    $data = $request->input('email');
                    $luckybhai = $request->session()->put($data);
                    $route = $this->redirect();
                    return redirect($route)->with('Sethai',$luckybhai);
                }
                else{
                    return back()->with('error','Username & Password is incorrect');
                }
            }
            else{
                return redirect()->back()->withInput();
            }
        }
        catch(\Exception $e){
            return back()->with('errors','Something Went wrong, Try again later',$e->getMessage());
        }
    }

    public function redirect()
    {
        $redirect = '';

        if(Auth::user() && Auth::user()->role == 'CEO'){
            $redirect = '/Admin/dashboard';
        }
        else if(Auth::user() && Auth::user()->role == 'Teacher'){
            $redirect = 'User/vocal.express';
        }
        else{
            $redirect = 'User/vocal.express';
        }
        return $redirect;
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('/');
    }

    public function Adminlogout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('/vocal.express');
    }
}

