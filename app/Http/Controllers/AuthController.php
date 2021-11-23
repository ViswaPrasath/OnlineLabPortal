<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function doLogin(Request $request)
    {
        $request->validate([
            'username'  => 'required',
            'password'  => 'required'
        ]);

        $credentials = [
            'username'  => $request->input('username'),
            'password'  => $request->input('password')
        ];


        if(Auth::attempt($credentials)) {
            return redirect('/dashboard');
        } else {
            $response = [
                'message' => 'Invalid credentials !',
                'error'   =>  1
            ];
            return redirect('/login')->with($response);
        }
    }    
}
