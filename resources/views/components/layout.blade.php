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
<body class=" mx-auto md:max-w-7xl container  p-2">
     <x-navbar >
        <x-nav-link uri="home">
            Jobs
        </x-nav-link>
        <x-nav-link uri="home">
            Career
        </x-nav-link>

        <x-nav-link uri="home">
            Salaries
        </x-nav-link>
        <x-nav-link uri="home">
            Companies
        </x-nav-link>
    </x-navbar> 
    <main>
        {{ $slot }}
    </main>
    {{-- <x-footer/> --}}
</body>
</html>
