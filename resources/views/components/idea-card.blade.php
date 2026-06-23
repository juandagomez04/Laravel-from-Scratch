<a {{ $attributes->merge(['href' => '#']) }}>
    <div class="card bg-neutral">
        <div class="card-body">
            <p>{{ $slot }}</p>
        </div>
    </div>
</a>