@props(['src', 'alt' => ''])
<img {{ $attributes->class(['img-fluid d-flex mx-auto rounded']) }} src="{{ $src }}" alt="{{ $alt }}" />
