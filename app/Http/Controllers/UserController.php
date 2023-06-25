<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function show() {
        return view('login');
    }

    public function userlogin(Request $request)
    {

        $incomingFields = [
            'loginemail' => $request->email,
            'loginpassword' => $request->password,
        ];
        if (auth()->attempt(['email' => $incomingFields['loginemail'], 'password' => $incomingFields['loginpassword']])) {
            $request->session()->regenerate();
        }

        return redirect('/');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
