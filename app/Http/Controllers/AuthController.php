<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        $title = 'Login';
        if(Auth::check()){
            // return redirect()->route('home');
            dd('Login berhasil!');
        }
        else{
            return view('login.index', compact('title'));
        }
    }

    public function authenticate(Request $request){
        // dd($request);
        // $credentials = $request->validate([
        //     'username' => 'required',
        //     'password' => 'required'
        // ]);

        $credentials = request()->validate([
            'username' => 'required',
            'password' => 'required'
        ], [
            'username.required' => 'Username harus diisi!',
            'password.required' => 'Password harus diisi!'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            // dd($request);
            return redirect()->route('admin')->with('success', 'Login berhasil!');
        }

        // return back();

        return back()->withErrors([
            'username' => 'Username atau Password salah!',
        ]);
    }
}
