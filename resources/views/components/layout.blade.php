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
        <!-- Left Navigation Items -->
        <div class="flex flex-wrap items-center justify-center gap-4 md:gap-8 md:flex-1 md:justify-start">
            <a href="#" class="hover:text-gray-600 transition-colors duration-200 font-medium py-1">Jobs</a>
            <a href="#" class="hover:text-gray-600 transition-colors duration-200 font-medium py-1">Career</a>
            <a href="#" class="hover:text-gray-600 transition-colors duration-200 font-medium py-1">Salaries</a>
            <a href="#" class="hover:text-gray-600 transition-colors duration-200 font-medium py-1">Companies</a>
        </div>

        <!-- Right Navigation Items -->
        <div class="flex items-center gap-4 md:gap-6 md:ml-auto">
            @auth
            <a href="/jobs/create" class="btn text-white rounded-lg hover:bg-white/15 transition-colors duration-200 text-sm font-semibold shadow-sm">
                Post a Job
            </a>

            <form method="POST" action="{{ route('logout') }}" class="inline">
                @csrf
                <button type="submit" class="btn text-white rounded-lg hover:bg-white/15 transition-colors duration-200 text-sm font-semibold shadow-sm">
                    Logout
                </button>
            </form>
            @else
            <a href="{{ route('register') }}" class="text-gray-300 transition-colors duration-200 font-medium">
                Sign Up
            </a>
            <a href="{{ route('login') }}" class="px-4 py-2 bg-white/10 text-gray-300 rounded-lg hover:bg-white/10 transition-colors duration-200 text-sm font-medium">
                Login
            </a>
            @endauth
        </div>
    </x-navbar>

    <main>
        {{ $slot }}
    </main>
    {{-- <x-footer/> --}}
</body>
</html>
