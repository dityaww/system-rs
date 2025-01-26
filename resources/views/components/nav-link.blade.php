@props(['active' => false])

<a {{ $attributes }} class="font-normal flex gap-3 items-center">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 {{ $active ? 'text-lime-500' : 'text-neutral-400'}}">
        {{ $slot }}
    </svg>
    <div class="{{ $active ? 'text-white' : 'text-neutral-400' }}">
        {{ $slot }}                          
    </div>
</a>