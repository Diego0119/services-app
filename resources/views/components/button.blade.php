<!-- resources/views/components/button.blade.php -->

@props([
    'type' => 'button',
    'size' => 'md', // Tamaño del botón: sm, md, lg
    'variant' => 'primary', // Variantes: primary, secondary, danger, etc.
])

@php
    $baseClass =
        'inline-flex items-center font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 transition ease-in-out duration-150';

    // Tamaños
    $sizes = [
        'sm' => 'px-2.5 py-1.5 text-xs',
        'md' => 'px-4 py-2 text-sm',
        'lg' => 'px-6 py-3 text-base',
    ];

    $variants = [
        'primary' => 'bg-primary text-white hover:bg-blue-700 focus:ring-blue-500',
        'secondary' => 'bg-secondary ext-white hover:bg-gray-700 focus:ring-gray-500',
        'danger' => 'bg-red-600 text-white hover:bg-red-700 focus:ring-red-500',
        'warning' => 'bg-yellow-500 text-white hover:bg-yellow-600 focus:ring-yellow-400',
        'success' => 'bg-green-600 text-white hover:bg-green-700 focus:ring-green-500',
    ];

    $buttonClass = $sizes[$size] . ' ' . $variants[$variant] . ' ' . $baseClass;
@endphp

<button type="{{ $type }}" {{ $attributes->merge(['class' => $buttonClass]) }}>
    {{ $slot }}
</button>
