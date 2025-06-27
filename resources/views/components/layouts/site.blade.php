<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')

        <meta name="description" content="Centralize all your customer feedback in one place. No more digging through threads or spreadsheets. You'll always know what your users need—and what to build next.">

        <meta name="twitter:title" content="Build What Matters—With Your Users">
        <meta name="twitter:creator" content="@oliverservinx">
        <meta name="twitter:site" content="{{ url('/') }}">
        <meta name="twitter:description" content="Centralize all your customer feedback in one place. No more digging through threads or spreadsheets. You'll always know what your users need—and what to build next.">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:image:src" content="{{ url('/og-main.png') }}">
        <meta name="twitter:image" content="{{ url('/og-main.png') }}">
        <meta name="twitter:image:alt" content="Build What Matters—With Your Users">

        <meta property="og:title" content="Build What Matters—With Your Users">
        <meta property="og:description" content="Centralize all your customer feedback in one place. No more digging through threads or spreadsheets. You'll always know what your users need—and what to build next.">
        <meta property="og:image" content="{{ url('/og-main.png') }}">
        <meta property="og:image:secure_url" content="{{ url('/og-main.png') }}">
        <meta property="og:image:alt" content="Build What Matters—With Your Users">

    </head>
    <body class="text-gray-950 bg-zinc-50 dark:bg-zinc-900 antialiased">
        {{ $slot }}

        @fluxScripts
    </body>
</html>
