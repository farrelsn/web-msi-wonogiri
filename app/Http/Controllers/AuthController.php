<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        $title = 'Login';
        if(Auth::check()){
            return redirect()->route('admin')->with('success', 'Login berhasil!');
            // dd('Login berhasil!');
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
        
        // dd($request);

        if(Auth::attempt(['username'=>$request->username,'password'=>$request->password])){
            $request->session()->regenerate();
            // dd($request);
            return redirect()->route('admin')->with('success', 'Login berhasil!');
        }
        else{
            return back()->withErrors([
                'username' => 'Username atau Password salah!',
            ]);

        }
        // return back();

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}
