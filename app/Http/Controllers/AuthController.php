<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Auths;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }

    public function registerPost(Request $request){
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();
        return redirect()->route('login')->with('success', 'Register Succesfully');
    }

    public function login(){
        return view('login');
    }

    public function loginPost(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($credentials)){
            return redirect('/home')->with('success', 'Login berhasil');
        }

        return back()->with('error', 'Email or Password salah');
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('login');
    }
}
