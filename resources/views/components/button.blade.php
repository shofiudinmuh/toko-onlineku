<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-primary border border-primary hover:bg-transparent
    text-white hover:text-primary font-semibold px-4 py-2 rounded-full
    inline-block']) }}>
    {{ $slot }}
</button>