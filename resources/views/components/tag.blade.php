@props(['tag', 'size' => 'base'])

@php
    $classes = "py-1 font-bold transition-colors duration-300 bg-white/10 rounded-xl hover:bg-white/25 mx-1";

    if ($size === 'base') {
        $classes .= " px-5 text-sm";
    }

    if ($size === 'small') {
        $classes .= " px-3 text-2xs";
    }

@endphp
<a
    href="#"
    class="{{ $classes }}"
>
    {{ $tag->name }}
</a>
