<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'string|required|min:2',
            'email' => 'string|email|required|unique:users',
            'password' =>'string|required|min:6'
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->user_name = $request->u_name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('success','Your Registration has been successfull.');
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

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'string|required|email',
            'password' => 'string|required'
        ]);

        $userCredential = $request->only('email','password');
        if(Auth::attempt($userCredential)){
$data = $request->input('email');
$luckybhai = $request->session()->put("$data");
            $route = $this->redirect();
            return redirect($route)->with('Sethai',$luckybhai);
        }
        else{
            return back()->with('error','Username & Password is incorrect');
        }
    }

    public function redirect()
    {
        $redirect = '';

        if(Auth::user() && Auth::user()->role == 1){
            $redirect = '/Admin/dashboard';
        }
        else if(Auth::user() && Auth::user()->role == 2){
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

//------------------------------------------------------------------------Backup

// public function customRegistration(Request $request)
// {  
//     $request->validate([
//         'name' => 'required',
//         'email' => 'required|email|unique:users',
//         'password' => 'required|min:6',
//     ]);
       
//     $data = $request->all();
//     $check = $this->create($data);
     
//     return redirect("dashboard")->withSuccess('have signed-in');
// }


// public function create(array $data)
// {
//   return User::create([
//     'name' => $data['name'],
//     'email' => $data['email'],
//     'password' => Hash::make($data['password'])
//   ]);
// }    