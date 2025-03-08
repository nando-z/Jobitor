<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class=" mx-auto md:max-w-7xl container  p-4">
    <x-navbar>
        <a href="#">Jobs</a>
        <a href="#">Career</a>
        <a href="#">Salaries</a>
        <a href="#">Companies</a>
        @auth

        <a href="/jobs/create" class="btn btn-accent rounded-4xl">
            Post a Job
        </a>

        @endauth

        @guest
        <a href="{{ route('register') }}">Sign Up</a>
        <a href="{{ route('login') }}">Login</a>
        @endguest
    </x-navbar>

    <main>
        {{ $slot }}
    </main>
    {{-- <x-footer/> --}}
</body>
</html>
