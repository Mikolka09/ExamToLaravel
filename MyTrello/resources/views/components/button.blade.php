<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-primary fw-bold']) }}>
    {{ $slot }}
</button>
