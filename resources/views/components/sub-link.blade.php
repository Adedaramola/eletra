@props(['active'])

@php
$classes = ($active ?? false)
            ? 'px-3 py-2 text-sm font-medium rounded-md bg-blue-100 text-blue-700'
            : 'px-3 py-2 text-sm font-medium rounded-md text-gray-500 hover:text-gray-700';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
