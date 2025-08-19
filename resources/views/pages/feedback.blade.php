<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="antialiased">
    <head>
        @include('partials.poll-head', ['title' => 'Terrific Poll - Agrega encuestas interactivas a cualquier newsletter, sin complicaciones técnicas'])
    </head>
    <body>
        <header class="px-4 mt-4">
            <div class="mx-auto max-w-xl flex flex-wrap justify-between items-center gap-4">
                <flux:brand href="/feedback">
                    <x-slot name="logo">
                        <x-app-logo-icon class="size-4 text-zinc-400" />
                    </x-slot>
                </flux:brand>

                <div class="flex flex-wrap items-center justify-end gap-4">
                    <div class="text-sm">
                        <flux:link href="/contact" variant="subtle">contacto</flux:link>
                    </div>
                    <div class="flex gap-2">
                        <flux:button href="https://feedback.terrific.com.mx/login" size="sm" wire:navigate>iniciar sesión</flux:button>
                        <flux:button href="https://feedback.terrific.com.mx/register" variant="primary" color="blue" size="sm" wire:navigate>regístrate</flux:button>
                    </div>
                </div>
            </div>
        </header>

        <main class="px-4 mt-24">
            <div class="mx-auto max-w-xl">
                <h1 class="font-serif text-2xl">
                    Haz que tus usuarios te guíen
                </h1>

                <h2 class="font-serif text-xl mt-8">
                    Convierte opiniones en decisiones inteligentes
                </h2>

                <p class="mt-4">
                    ¿Te cuesta saber qué quieren realmente tus clientes?
                    ¿Recibes sugerencias por correo, WhatsApp o Excel y nunca sabes cuál priorizar?
                    Deja de adivinar y empieza a escuchar de verdad.
                </p>

                <p class="mt-2">
                    Perfecto para empresas de software, startups, equipos de desarrollo y product managers que buscan priorizar funcionalidades y corregir errores según la demanda real de sus usuarios.
                </p>

                <flux:button href="https://feedback.terrific.com.mx/register" variant="primary" color="blue" icon:trailing="arrow-long-right" icon:variant="micro" class="mt-6 text-base!">
                    Probar gratis 30 días
                </flux:button>

                <h3 class="mt-16 font-serif text-lg">
                    Descubre Terrific Feedback
                </h3>

                <p class="mt-4">
                    Imagina un tablero donde tus usuarios pueden:
                </p>

                <ul class="mt-4 space-y-2">
                    <li class="flex gap-1">
                        <flux:icon.chevron-right variant="micro" class="text-zinc-400 mt-1" />
                        <p>Enviar comentarios y sugerencias en segundos.</p>
                    </li>
                    <li class="flex gap-1">
                        <flux:icon.chevron-right variant="micro" class="text-zinc-400 mt-1" />
                        <p>Votar por las ideas que más les interesan.</p>
                    </li>
                    <li class="flex gap-1">
                        <flux:icon.chevron-right variant="micro" class="text-zinc-400 mt-1" />
                        <p>Reportar errores y discutir propuestas.</p>
                    </li>
                </ul>

                <h3 class="mt-8 font-serif text-lg">
                    ¿Por qué elegir Terrific Feedback?
                </h3>

                <ul class="mt-4 space-y-4">
                    <li class="flex gap-1">
                        <flux:icon.chevron-right variant="micro" class="text-zinc-400 mt-1" />
                        <div class="space-y-1">
                            <h4 class="font-medium">Centraliza todo el feedback</h4>
                            <p>Olvídate de perder ideas entre emails y chats.</p>
                        </div>
                    </li>
                    <li class="flex gap-1">
                        <flux:icon.chevron-right variant="micro" class="text-zinc-400 mt-1" />
                        <div class="space-y-1">
                            <h4 class="font-medium">Prioriza con votos reales</h4>
                            <p>Identifica las mejoras más urgentes según la voz de tus clientes.</p>
                        </div>
                    </li>
                    <li class="flex gap-1">
                        <flux:icon.chevron-right variant="micro" class="text-zinc-400 mt-1" />
                        <div class="space-y-1">
                            <h4 class="font-medium">Toma decisiones con datos, no suposiciones</h4>
                            <p>Deja que los números te guíen.</p>
                        </div>
                    </li>
                    <li class="flex gap-1">
                        <flux:icon.chevron-right variant="micro" class="text-zinc-400 mt-1" />
                        <div class="space-y-1">
                            <h4 class="font-medium">Fácil y rápido</h4>
                            <p>Tus usuarios publican su primer comentario en menos de 1 minuto.</p>
                        </div>
                    </li>
                    <li class="flex gap-1">
                        <flux:icon.chevron-right variant="micro" class="text-zinc-400 mt-1" />
                        <div class="space-y-1">
                            <h4 class="font-medium">Comunicación activa</h4>
                            <p>Responde, aclara y discute cada sugerencia en el mismo lugar.</p>
                        </div>
                    </li>
                    <li class="flex gap-1">
                        <flux:icon.chevron-right variant="micro" class="text-zinc-400 mt-1" />
                        <div class="space-y-1">
                            <h4 class="font-medium">Satisfacción garantizada</h4>
                            <p>Haz que tus clientes se sientan escuchados y valorados.</p>
                        </div>
                    </li>
                </ul>

                <h3 class="mt-8 font-serif text-lg">
                    Resuelve tus dudas
                </h3>

                <ul class="mt-6 space-y-4">
                    <li class="flex gap-1">
                        <flux:icon.chevron-right variant="micro" class="text-zinc-400 mt-1" />
                        <div class="space-y-1">
                            <h3 class="font-medium">¿Preocupado por la privacidad?</h3>
                            <p>Tus datos están protegidos con protocolos avanzados.</p>
                        </div>
                    </li>
                    <li class="flex gap-1">
                        <flux:icon.chevron-right variant="micro" class="text-zinc-400 mt-1" />
                        <div class="space-y-1">
                            <h3 class="font-medium">¿Temes que sea complicado?</h3>
                            <p>Empieza gratis y publica tu primer comentario en menos de 60 segundos, incluso si nunca has usado una plataforma similar.</p>
                        </div>
                    </li>
                    <li class="flex gap-1">
                        <flux:icon.chevron-right variant="micro" class="text-zinc-400 mt-1" />
                        <div class="space-y-1">
                            <h3 class="font-medium">¿Recibes demasiadas sugerencias?</h3>
                            <p>Filtra y prioriza automáticamente lo más votado, incluso si tu comunidad crece rápido.</p>
                        </div>
                    </li>
                    <li class="flex gap-1">
                        <flux:icon.chevron-right variant="micro" class="text-zinc-400 mt-1" />
                        <div class="space-y-1">
                            <h3 class="font-medium">¿No sabes si vale la pena?</h3>
                            <p>Prueba gratis 30 días. Solo pagas $79 MXN al año si te convence.</p>
                        </div>
                    </li>
                </ul>

                <h3 class="mt-8 font-serif text-lg">
                    Empieza hoy
                </h3>

                <p class="mt-4">
                    Activa tu tablero gratis y descubre lo que tus usuarios realmente quieren.
                </p>

                <flux:button href="https://feedback.terrific.com.mx/register" variant="primary" color="blue" icon:trailing="arrow-long-right" icon:variant="micro" class="mt-6 text-base!">
                    Probar gratis 30 días
                </flux:button>
            </div>
        </main>

        <footer class="mt-24 p-4">
            <div class="flex flex-wrap items-center justify-between text-zinc-400 text-sm max-w-xl mx-auto gap-2">
                <p class="text-sm flex items-center gap-2.5">
                    <x-app-logo-icon class="size-4 text-zinc-300" />
                    <span>
                        <flux:link href="/feedback" variant="subtle">feedback.terrific</flux:link>.com.mx
                    </span>
                </p>
                <p class="text-sm">creado por <flux:link href="https://world.hey.com/oliver.servin" variant="subtle">Oliver Servín</flux:link></p>
            </div>
        </footer>
    </body>
</html>
