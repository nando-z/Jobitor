@props(['tag'])

@php
$classes="btn btn-dash rounded-4xl" ;
@endphp

<a href="/tags/{{ strtolower($tag->name ) }}" class="{{ $classes }}">
    {{ $tag->name }}
</a>
