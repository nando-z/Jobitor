@props(['uri'])

@php
    // Check if the current route matches the provided route
    $isCurrentRoute = request()->routeIs($uri);
    // Set the button class based on whether the route is active
    $buttonClass = $isCurrentRoute ? 'btn btn-accent ' : 'btn btn-ghost ';
@endphp

<a href="{{ route($uri) }}" class="{{ $buttonClass }}">
    {{ $slot }}

</a>

