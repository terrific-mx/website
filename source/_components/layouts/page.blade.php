@props(['page'])

<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}" class="h-full bg-neutral-950 text-base antialiased">
    <head>
        @include('_partials.head')
    </head>
    <body class="flex min-h-full flex-col">
        {{ $slot }}
    </body>
</html>
