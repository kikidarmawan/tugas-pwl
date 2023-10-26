@props(['active', 'href'])

@if ($active)
    @php
        $class = 'font-medium text-blue-500';
    @endphp
@else
    @php
        $class = 'font-medium text-gray-600 hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-500';
    @endphp
@endif
<a href="{{ $href }}" {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</a>
