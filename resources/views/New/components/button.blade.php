<div class = "sign_btn_wrap">
<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 sign_btn']) }}>
    {{ $slot }}
</button>
</div>
