@extends('layouts.app')
@section('title', 'Register')

@section('content')
   <h1 class="bg-black text-2xl">Register</h1>

    <form action="{{ route('register.store') }}" method="POST">
        @csrf

        <div>
            <label for="username">Username</label>
            <input type="text" id="username" name="username">
            @error('username') <span style="color: red;">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
            @error('email') <span style="color: red;">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            @error('password') <span style="color: red;">{{ $message }}</span> @enderror
        </div>

        <button class="bg-red-500">Buat Akun</button>
        <i><a href="{{ route('login') }}" class="bg-blue-500">Sudah punya akun ? Login</a></i>
    </form>
@endsection