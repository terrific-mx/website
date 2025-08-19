<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="antialiased">
    <head>
        @include('partials.poll-head', ['title' => 'Terrific Poll - Agrega encuestas interactivas a cualquier newsletter, sin complicaciones técnicas'])
    </head>
    <body class="bg-zinc-50">
        <div class="p-4 pb-0 max-w-lg mx-auto">
            <flux:callout icon="phone" icon:variant="solid">
                <flux:callout.heading class="justify-center">
                    <span class="max-sm:hidden">¡Estamos disponibles!</span> Llámanos al
                    <flux:callout.link href="tel:+52 33 4474 7654">+52 33 4474 7654</flux:callout.link>
                </flux:callout.heading>
            </flux:callout>
        </div>

        <header class="sticky flex flex-wrap justify-between max-sm:justify-center items-center p-6 gap-4">
            <flux:brand href="/feedback" name="Terrific Feedback">
                <x-slot name="logo">
                    <x-app-logo-icon class="size-4" />
                </x-slot>
            </flux:brand>

            <div class="flux justify-end">
                <flux:button href="https://feedback.terrific.com.mx/login" variant="subtle" size="sm" wire:navigate>Iniciar sesión</flux:button>
                <flux:button href="https://feedback.terrific.com.mx/register" variant="primary" color="amber" size="sm" wire:navigate>Comenzar ahora</flux:button>
            </div>
        </header>

        <main class="
            mx-auto mb-8 max-w-3xl px-4 mt-20
            text-zinc-700
            [&>h1]:text-center [&>h1]:font-medium [&>h1]:text-5xl [&>h1]:tracking-tight [&>h1]:text-zinc-950 max-sm:[&>h1]:text-4xl
            [&>h2]:font-medium [&>h2]:tracking-tight [&>h2]:text-2xl [&>h2]:text-zinc-950 max-sm:[&>h2]:text-xl
            [&>[data-lead]]:text-center [&>[data-lead]]:text-xl [&>[data-lead]]:text-zinc-900 max-sm:[&>[data-lead]]:text-lg
            [&>p]:text-lg max-sm:[&>p]:text-base
            [&>ul]:text-lg max-sm:[&>ul]:text-base
            [&>p>strong]:text-zinc-950 [&>p>strong]:font-medium
            [&>ul>li>p>strong]:text-zinc-950 [&>ul>li>p>strong]:font-medium
        ">
            <h1>
                Haz que tus usuarios te guíen
            </h1>
            <p class="max-w-lg mx-auto mt-6" data-lead>
                Convierte opiniones en decisiones inteligentes
            </p>

            <p class="mt-48">
                ¿Te cuesta saber qué quieren realmente tus clientes? ¿Recibes sugerencias por correo, WhatsApp o Excel y nunca sabes cuál priorizar? Deja de adivinar y empieza a escuchar de verdad.
            </p>

            <p class="mt-6">
                Perfecto para empresas de software, startups, equipos de desarrollo y product managers que buscan priorizar funcionalidades y corregir errores según la demanda real de sus usuarios.
            </p>

            <h2 class="mt-20">Descubre Terrific Feedback</h2>

            <p class="mt-6">
                Imagina un tablero donde tus usuarios pueden:
            </p>

            <ul class="mt-6 space-y-2">
                <li class="flex gap-2 items-center">
                    <flux:icon.check-circle variant="mini" class="text-green-500" />
                    <h3 class="font-medium text-zinc-950">Enviar comentarios y sugerencias en segundos.</h3>
                </li>
                <li class="flex gap-2 items-center">
                    <flux:icon.check-circle variant="mini" class="text-green-500" />
                    <h3 class="font-medium text-zinc-950">Votar por las ideas que más les interesan.</h3>
                </li>
                <li class="flex gap-2 items-center">
                    <flux:icon.check-circle variant="mini" class="text-green-500" />
                    <h3 class="font-medium text-zinc-950">Reportar errores y discutir propuestas.</h3>
                </li>
            </ul>

            <h2 class="mt-20">¿Por qué elegir Terrific Feedback?</h2>

            <ul class="mt-6 space-y-4">
                <li>
                    <h3 class="font-medium text-zinc-950">Centraliza todo el feedback</h3>
                    <p>Olvídate de perder ideas entre emails y chats.</p>
                </li>
                <li>
                    <h3 class="font-medium text-zinc-950">Prioriza con votos reales</h3>
                    <p>Identifica las mejoras más urgentes según la voz de tus clientes.</p>
                </li>
                <li>
                    <h3 class="font-medium text-zinc-950">Toma decisiones con datos, no suposiciones</h3>
                    <p>Deja que los números te guíen.</p>
                </li>
                <li>
                    <h3 class="font-medium text-zinc-950">Fácil y rápido</h3>
                    <p>Tus usuarios publican su primer comentario en menos de 1 minuto.</p>
                </li>
                <li>
                    <h3 class="font-medium text-zinc-950">Comunicación activa</h3>
                    <p>Responde, aclara y discute cada sugerencia en el mismo lugar.</p>
                </li>
                <li>
                    <h3 class="font-medium text-zinc-950">Satisfacción garantizada</h3>
                    <p>Haz que tus clientes se sientan escuchados y valorados.</p>
                </li>
            </ul>

            <h2 class="mt-20">Resuelve tus dudas</h2>

            <ul class="mt-6 space-y-4">
                <li>
                    <h3 class="font-medium text-zinc-950">¿Preocupado por la privacidad?</h3>
                    <p>Tus datos están protegidos con protocolos avanzados.</p>
                </li>
                <li>
                    <h3 class="font-medium text-zinc-950">¿Temes que sea complicado?</h3>
                    <p>Empieza gratis y publica tu primer comentario en menos de 60 segundos, incluso si nunca has usado una plataforma similar.</p>
                </li>
                <li>
                    <h3 class="font-medium text-zinc-950">¿Recibes demasiadas sugerencias?</h3>
                    <p>Filtra y prioriza automáticamente lo más votado, incluso si tu comunidad crece rápido.</p>
                </li>
                <li>
                    <h3 class="font-medium text-zinc-950">¿No sabes si vale la pena?</h3>
                    <p>Prueba gratis 30 días. Solo pagas $79 MXN al año si te convence.</p>
                </li>
            </ul>

            <flux:card class="max-w-lg mx-auto mt-20">
                <h2 class="text-2xl max-sm:text-xl font-medium tracking-tight text-zinc-950 text-center mt-2">
                    Activa tu tablero gratis
                </h2>
                <p class="text-center mt-4">
                    Descubre lo que tus usuarios realmente quieren.
                </p>
                <flux:button href="https://feedback.terrific.com.mx/register" variant="primary" color="amber" class="mt-10 w-full text-base!">
                    Probar gratis 30 días →
                </flux:button>
                <p class="text-center mt-4 text-sm">
                    <strong class="font-medium text-zinc-950">¿Listo para dejar de adivinar y empezar a decidir con datos reales?</strong> Haz clic y prueba Terrific Feedback ahora.
                </p>
            </flux:card>

            <div class="mt-64 flex items-center justify-between text-zinc-400">
                <p class="text-sm flex items-center gap-2.5">
                    <x-app-logo-icon class="size-4 text-zinc-300" />
                    <span><strong class="font-medium">feedback.terrific</strong>.com.mx</span>
                </p>
                <p class="text-sm">por <flux:link href="https://world.hey.com/oliver.servin" variant="subtle">Oliver Servín</flux:link></p>
            </div>
        </main>
    </body>
</html>
