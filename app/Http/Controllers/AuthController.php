<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getLogin(){
        return view('admin.auth.login');
    }

    public function adminlogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        $credentials['is_admin'] = "admin";

        if (auth()->attempt($credentials, $request->remember)) {
            return redirect()->route('admindashboard')->with('success', 'Login Successful');
        } else {
            return redirect()->back()->withErrors([
                'msg' => 'The provided credentials do not match our records.',
            ]);
        }
    }
    



    public function postLogin(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        $validated=auth()->attempt([
            'email'=>$request->email,
            'password'=>$request->password,
           
        ],$request->password);

        if($validated){
            if (auth()->user()->is_admin == 'admin')
            {
                return redirect()->route('admindashboard');
            } else {
                return redirect()->route('dashboard')->with('success','Login Successfull');
            }
        }else{
            return redirect()->back()->with('error','Invalid credentials');
        }
    }

  








}


