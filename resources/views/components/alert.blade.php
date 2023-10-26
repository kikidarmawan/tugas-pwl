{{-- <div> --}}
<!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->

@php
    if ($type == 'success') {
        $color = 'green';
    } elseif ($type == 'error') {
        $color = 'red';
    } elseif ($type == 'warning') {
        $color = 'orange';
    } else {
        $color = 'blue';
    }
@endphp

<div {{ $attributes->merge(['class' => 'bg-' . $color . '-800 text-sm text-white rounded-md p-4 dark:bg-white dark:text-gray-800']) }}
    class="bg-gray-800 text-sm text-white rounded-md p-4 dark:bg-white dark:text-gray-800" role="alert">
    {{ $message }}
</div>
{{-- <div class="bg-green-500 text-sm text-white rounded-md p-4" role="alert">
    <span class="font-bold">Success</span> alert! You should check in on some of those fields below.
</div> --}}
{{-- </div> --}}
