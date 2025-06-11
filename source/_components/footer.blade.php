@props([
    'companyName' => 'The Terrific Software Studio',
    'year' => null
])

@php
    $year = $year ?? date('Y');
@endphp

<footer class="mx-auto max-w-7xl px-6 lg:px-8 mt-24 w-full sm:mt-32 lg:mt-40">
    <div class="mx-auto max-w-2xl lg:max-w-none">
        <div class="grid grid-cols-1 gap-x-8 gap-y-16 lg:grid-cols-2">
            <x-navigation />
        </div>
        <div class="mt-24 mb-20 flex flex-wrap items-end justify-between gap-x-6 gap-y-4 border-t border-neutral-950/10 pt-12">
            <a aria-label="Home" href="/" class="group/logo">
                <x-logo />
            </a>
            <p class="text-sm text-neutral-700">
                © {{ $companyName }} {{ $year }}
            </p>
        </div>
    </div>
</footer>
