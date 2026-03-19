<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | {{ config('app.name') }}</title>

    @vite('resources/css/app.css')
</head>
<body>
    @if (session('success'))
        <p class="text-center bg-green-500">{{ session('success') }}</p>
    @elseif (session('error'))
        <p class="text-center bg-red-500">{{ session('error') }}</p>
    @endif

    <div class="min-h-screen flex flex-col justify-center items-center">
        <div class="shadow p-5">
            <h1 class="text-3xl mb-5 text-center">Login</h1>

            <form action="{{ route('login.store') }}" method="POST"
                class="space-y-2">
                @csrf

                <div>
                    <label for="email">Email</label><br>
                    <input type="email" id="email" name="email" class="pl-1">
                    @error('email') <span style="color: red;">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for="password">Password</label><br>
                    <input type="password" id="password" name="password" class="pl-1">
                    @error('password') <span style="color: red;">{{ $message }}</span> @enderror
                </div>

                <button class="bg-blue-500 w-full text-white rounded-sm py-1">Login</button><br>
                <a href="{{ route('register.index') }}" class="text-sm italic text-blue-400">Belum punya akun ? Register</a>
            </form>
        </div>
    </div>
</body>
</html>