<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function register(RegisterRequest $request)
    {
        $validated = $request->validated();
        
        User::create([
            'username'  =>  $validated['username'],
            'email'     =>  $validated['email'],
            'password'  =>  Hash::make($validated['password']),
        ]);

        return redirect()->back();
    }
}
