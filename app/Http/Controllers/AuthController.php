<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

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
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email harus diisi!',
            'password.required' => 'Password harus diisi!'
        ]);
        
        // dd($request);

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            $request->session()->regenerate();
            // dd($request);
            return redirect()->route('admin')->with('success', 'Login berhasil!');
        }
        else{
            return back()->withErrors([
                'email' => 'Email atau Password salah!',
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

    public function lupaPassword(){
        $title = "Lupa Password";
        return view('login.lupa_password', compact('title'));
    }

    public function sendLupaPassword(Request $request){
        $request->validate([
            'email' => 'required|email'
        ],
        [
            'email.required' => 'Email harus diisi!',
            'email.email' => 'Email tidak valid!'
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
                    ? back()->with('success', __($status))
                    : back()->withErrors(['email' => __($status)]);
    }
}
