<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>{{ $title ?? config('app.name') }}</title>

<meta name="description" content="Recibe envíos al instante desde sitios estáticos y creadores de páginas (Wix, Webflow, Squarespace). <strong>Prueba gratis 30 días.</strong> Después, <strong>79 MXN/año</strong> por formularios y envíos ilimitados.">

<meta property="og:site_name" content="{{ config('app.name') }}">
<meta property="og:title" content="{{ config('app.name') }}">
<meta property="og:description" content="Recibe envíos al instante desde sitios estáticos y creadores de páginas (Wix, Webflow, Squarespace). <strong>Prueba gratis 30 días.</strong> Después, <strong>79 MXN/año</strong> por formularios y envíos ilimitados.">
<meta property="og:image" content="{{ url('/form-opengraph.png') }}">
<meta property="og:url" content="{{ url('/') }}">
<meta property="og:type" content="website">

<meta name="twitter:title" content="{{ config('app.name') }}">
<meta name="twitter:description" content="Recibe envíos al instante desde sitios estáticos y creadores de páginas (Wix, Webflow, Squarespace). <strong>Prueba gratis 30 días.</strong> Después, <strong>79 MXN/año</strong> por formularios y envíos ilimitados.">
<meta name="twitter:image" content="{{ url('/form-opengraph.png') }}">
<meta name="twitter:image:alt" content="{{ config('app.name') }}">
<meta name="twitter:card" content="summary_large_image">

<link rel="icon" href="/favicon.png">

<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />

@vite(['resources/css/app.css', 'resources/js/app.js'])
