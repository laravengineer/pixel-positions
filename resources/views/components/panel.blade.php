<div {{ $attributes->merge(['class' => 'flex p-4 transition-colors duration-200 border border-transparent bg-white/5 rounded-xl hover:border-blue-800 group']) }} class="flex gap-6 ">
    {{ $slot }}
</div>