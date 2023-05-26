<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){

		return view ('login');

	}

	public function LoginProses(){
		if (auth()->guard('admin')->attempt(['username' => request('username'), 'password' => request('password')])){
            return redirect('admin')->with('success', 'Login Berhasil');
        }

		

		return redirect('login');
	}

	public function logout(Request $request){
		auth()->logout();		
		return redirect('/');
	}
}
