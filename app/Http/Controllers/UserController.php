<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function showlogin()
    {
        return view('login');
    }

    public function showregister()
    {
        return view('register');
    }

    public function userregister(Request $request)
    {
        $incomingFields = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::create($incomingFields);
        auth()->login($user);

        return redirect('/dashboard');
    }

    public function userlogin(Request $request)
    {

        $request -> validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect()->intended('/dashboard');
        }

        return redirect('/login')->with("error","Erong password or email");
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
