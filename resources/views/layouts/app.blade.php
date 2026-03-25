<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Selamat Datang') | {{ config('app.name') }}</title>

    @vite('resources/css/app.css')
</head>
<body>
    @if (session('success'))
        <p class="text-center bg-green-400 text-white">{{ session('success') }}</p>
    @elseif (session('error'))
        <p class="text-center bg-red-500 text-white">{{ session('error') }}</p>
    @endif

    @yield('content')
</body>
</html>
