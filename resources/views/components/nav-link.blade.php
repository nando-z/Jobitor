@props(['uri'=>'', 'tooltip' => ''])

@php
// Check if the current route matches the provided route
$isCurrentRoute = request()->routeIs($uri);
// Set the button class based on whether the route is active
$buttonClass = $isCurrentRoute ? 'btn btn-accent rounded-4xl' : 'btn btn-ghost';
@endphp

<a href="{{ route($uri) }}" class="{{ $buttonClass }} flex items-center space-x-2" title="{{ $tooltip }}">
    @if($isCurrentRoute)
    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
    </svg>
    @endif
    <span>{{ $slot }}</span>
</a>
