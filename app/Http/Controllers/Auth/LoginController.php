<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('Auth.login');
    }

    public function login(LoginRequest $request)
    {
        $validated = $request->validated();

        if (!Auth::attempt($validated)) {
            return redirect()->back()
                ->with('error', 'Email Atau Password Salah Silahkan Coba Lagi.')
                ->withInput();
        } 
        
        $request->session()->regenerate();
        
        return redirect()->back()->with('success','Berhasil Login.');
    }
}
