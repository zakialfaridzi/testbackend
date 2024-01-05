<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

// class LoginController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function index()
//     {
// 		return view('auth.login', ['title' => 'Login']);
//     }

// /**
//  * Handle the login request.
//  *
//  * @param  \Illuminate\Http\Request  $request
//  * @return \Illuminate\Http\Response
//  */
// public function authenticate(Request $request)
// {
// 	$credentials = $request->only('email', 'password');

// 	if (Auth::attempt($credentials)) {
// 		// Authentication successful
// 		return redirect()->intended('/dashboard');
// 	} else {
// 		// Authentication failed
// 		return redirect()->back()->with(['loginError' => 'Invalid credentials']);
// 	}
// }

// }


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('/pegawai');
        } else {
            return view('auth.login');
        }
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect('/pegawai');
        } else {
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
