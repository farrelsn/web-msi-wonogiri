<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $users)
    {
        $title = 'Pengaturan Profil';
        $user = Auth::user();
        return view('admin.user.edit', compact('title', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $users)
    {
        //
    }

    public function updatePassword(Request $request, User $users)
    {
        // dd($request->all());
        $request->validate([
            'password-lama' => 'required|string',
            'password-baru' => 'required|string',
        ],[
            'password-lama.required' => 'Password lama tidak boleh kosong',
            'password-baru.required' => 'Password baru tidak boleh kosong',
            
        ]);

        if (password_verify($request->input('password-lama'), Auth::user()->password)){
            User::where('id', Auth::user()->id)->update([
                'password' => bcrypt($request->input('password-baru'))
            ]);
            return redirect()->back()->with('success', 'Password berhasil diubah');
        } 
        else {
            return redirect()->back()->with('error', 'Password lama salah');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $users)
    {
        //
    }
}
