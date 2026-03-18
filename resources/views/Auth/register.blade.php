<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register | {{ config('app.name') }}</title>

    @vite('resources/css/app.css')
</head>
<body>
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

        <button>Buat Akun</button>
    </form>
</body>
</html>