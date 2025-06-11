@props([
    'language' => 'en'
])

<header>
    <div class="absolute top-2 right-0 left-0 z-40 pt-14">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:max-w-none">
                <div class="flex items-center justify-between">
                    <a aria-label="Home" href="/" class="group/logo">
                        <x-logo mobile class="sm:hidden" />
                        <x-logo class="hidden sm:block" />
                    </a>
                    <div class="flex items-center gap-x-8">
                        <a
                            class="inline-flex rounded-full px-4 py-1.5 text-sm font-semibold transition bg-neutral-950 text-white hover:bg-neutral-800"
                            href="{{ $language === 'en' ? '/' : '/en' }}"
                        >
                            <span>{{ $language === 'en' ? 'Español' : 'English' }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
