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
        <x-nav-link uri="jobs">
            Jobs
        </x-nav-link>
        <x-nav-link uri="careers">
            Career
        </x-nav-link>

        <x-nav-link uri="salaries">
            Salaries
        </x-nav-link>
        <x-nav-link uri="companies">
            Companies
        </x-nav-link>
        @auth

        <slot:btn>
            <x-forms.button>
                <a href="/jobs/creat">New Post</a>
            </x-forms.button>

        </slot:btn>

        @endauth

        @guest

        @endguest
    </x-navbar>

    <main>
        {{ $slot }}
    </main>
    {{-- <x-footer/> --}}
</body>
</html>
