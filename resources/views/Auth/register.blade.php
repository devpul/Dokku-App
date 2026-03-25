@extends('layouts.app')
@section('title', 'Register')

@section('content')
    <div class="flex flex-col justify-center items-center min-h-screen bg-gray-100">
        <div class="flex justify-center gap-x-2.5 items-center mb-5">
            <svg class="bg-blue-500 text-white p-2 rounded-xl size-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
            </svg>

            <h1 class="text-xl font-medium">DOKKU</h1>
        </div>


        <form action="{{ route('register.store') }}" method="POST"
        class="rounded-xl shadow shadow-gray-300 p-6 w-[90%] md:w-[600px] bg-white">
            @csrf

            <h1 class="text-2xl font-medium mb-2">Get Organized Today</h1>
            <p class="text-sm text-gray-400 mb-6">Create an account to start organizing your files.</p>

            <div class="space-y-5">
                <div>
                    <label class="text-sm" for="username">Username</label><br>
                    <input type="text" id="username" name="username" placeholder="example"
                    class="w-full shadow rounded-md bg-gray-100 outline-none pl-2 py-1 focus:bg-blue-50 focus:border border-blue-500">
                    @error('username') <span style="color: red;">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label class="text-sm" for="email">Email Address</label><br>
                    <input type="email" id="email" name="email" placeholder="example@gmail.com"
                    class="w-full shadow rounded-md bg-gray-100 outline-none pl-2 py-1 focus:bg-blue-50 focus:border border-blue-500">
                    @error('email') <span style="color: red;">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label class="text-sm" for="password">Password</label><br>
                    <input type="password" id="password" name="password" placeholder="******"
                    class="w-full shadow rounded-md bg-gray-100 outline-none pl-2 py-1 focus:bg-blue-50 focus:border border-blue-500">
                    @error('password') <span style="color: red;">{{ $message }}</span> @enderror
                </div>

                <div class="text-center">
                    <button class="bg-blue-500 w-full py-2 px-3 rounded text-white cursor-pointer mb-2">Sign Up</button>
                    <p class="text-sm text-gray-500">
                        Already have an account?
                        <a href="{{ route('login') }}" class="cursor-pointer hover:text-blue-600 hover:underline">Sign In</a>
                    </p>
                </div>
            </div>
        </form>

        <p class="text-sm text-gray-400 mt-5">All your course work, organized.</p>
    </div>
@endsection
