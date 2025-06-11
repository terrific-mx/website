@props([
    'mobile' => false,
])

@if($mobile)
    {{-- Mobile logo (small icon) --}}
    <svg
        viewBox="0 0 34 48"
        aria-hidden="true"
        {{ $attributes->class('text-zinc-950 h-8') }}
    >
        <path d="M9.45659 17.2143L24.3027 8.64286L15.395 3.5L0.549161 12.0713L0.548828 29.2139L9.45652 34.3568L9.45659 17.2143Z" fill="currentColor"/>
        <path d="M33.4453 17.7854L33.4453 34.9283L18.5991 43.4994L9.69141 38.3565L24.5376 29.7851L24.5376 12.6426L33.4453 17.7854Z" fill="currentColor"/>
    </svg>
@else
    {{-- Desktop logo (full width with text) --}}
    <div class="flex items-center gap-4 text-zinc-950">
        <svg
            viewBox="0 0 34 48"
            aria-hidden="true"
            {{ $attributes->class('h-8') }}
        >
            <path d="M9.45659 17.2143L24.3027 8.64286L15.395 3.5L0.549161 12.0713L0.548828 29.2139L9.45652 34.3568L9.45659 17.2143Z" fill="currentColor"/>
            <path d="M33.4453 17.7854L33.4453 34.9283L18.5991 43.4994L9.69141 38.3565L24.5376 29.7851L24.5376 12.6426L33.4453 17.7854Z" fill="currentColor"/>
        </svg>
        <span class="font-semibold text-xl tracking-tight">
            The Terrific Software Studio.
        </span>
    </div>
@endif
