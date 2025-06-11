@props(['page', 'language' => 'en'])

<!DOCTYPE html>
<html lang="{{ $language }}" class="h-full bg-neutral-950 text-base antialiased">
    <head>
        @include('_partials.head')
    </head>
    <body class="flex min-h-full flex-col">
        {{ $slot }}
    </body>
</html>
