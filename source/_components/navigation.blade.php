@props([
    'sections' => [
        [
            'title' => 'Research',
            'links' => [
                ['title' => 'feedback', 'href' => 'https://github.com/terrific-mx/feedback'],
                ['title' => 'headshot', 'href' => 'https://github.com/terrific-mx/headshot'],
                ['title' => 'forms', 'href' => 'https://github.com/terrific-mx/forms'],
            ]
        ],
        [
            'title' => 'Product',
            'links' => [
                ['title' => 'Foto Profesional', 'href' => '/foto-profesional'],
            ]
        ]
    ]
])

<nav>
    <ul role="list" class="grid grid-cols-2 gap-8 sm:grid-cols-3">
        @foreach($sections as $section)
            <li>
                <div class="text-sm font-semibold tracking-wider text-neutral-950">
                    {{ $section['title'] }}
                </div>
                <ul role="list" class="mt-4 text-sm text-neutral-700">
                    @foreach($section['links'] as $link)
                        <li class="mt-4">
                            <a
                                class="transition hover:text-neutral-950"
                                href="{{ $link['href'] }}"
                            >
                                {{ $link['title'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</nav>
