<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="antialiased">
    <head>
        @include('partials.form-head', ['title' => 'Terrific Form - Recibe respuestas a tus formularios sin necesidad de backend. Solo copia y pega tu endpoint y comienza a recibir leads.'])
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
            <flux:brand href="/form" name="Terrific Form">
                <x-slot name="logo">
                    <x-app-logo-icon class="size-4" />
                </x-slot>
            </flux:brand>

            <div class="flux justify-end">
                <flux:button href="https://form.terrific.com.mx/login" variant="subtle" size="sm" wire:navigate>Iniciar sesión</flux:button>
                <flux:button href="https://form.terrific.com.mx/register" variant="primary" color="amber" size="sm" wire:navigate>Comenzar ahora</flux:button>
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
                Recibe respuestas de tus formularios web sin programar un backend
            </h1>

            <p class="max-w-lg mx-auto mt-6" data-lead>
                Convierte cualquier formulario en tu sitio en una fuente de clientes, sin complicaciones técnicas.
            </p>

            <p class="mt-48">
                ¿Cansado de perder oportunidades porque tu sitio no puede recibir formularios?
                Olvídate de la programación y empieza a recibir respuestas hoy mismo.
                Solo copia el endpoint, conecta tu formulario HTML y listo: cada envío llega seguro a tu panel y a tu correo.
            </p>

            <p class="mt-6">
                Perfecto para creadores de sitios estáticos, usuarios de plataformas como Wix, Squarespace o Webflow, pequeños negocios, emprendedores, freelancers, desarrolladores y cualquier persona que necesite una solución rápida y económica para gestionar formularios en su página web.
            </p>

            <h2 class="mt-20">¿Por qué elegir Terrific Form?</h2>

            <p class="mt-6">
                Olvídate del código y el estrés: recibe y gestiona envíos de formularios sin tocar el backend.
            </p>

            <p class="mt-6">
                Terrific Form funciona en cualquier sitio web, solo necesitas el atributo <code>action</code> en tu formulario HTML para empezar.
            </p>

            <p class="mt-6">
                Todas tus respuestas se almacenan en un panel centralizado, donde puedes consultarlas fácilmente y nunca perder ningún dato.
            </p>

            <p class="mt-6">
                Recibe notificaciones instantáneas por correo electrónico cada vez que alguien envía un formulario, para que siempre estés informado y puedas responder rápido.
            </p>

            <p class="mt-6">
                Por solo $79 MXN al año, crea y recibe formularios ilimitados, sin cargos ocultos ni sorpresas.
            </p>

            <p class="mt-6">
                Además, puedes comenzar con una prueba gratuita de 30 días, sin riesgo y comprobando lo fácil que es transformar la gestión de tus formularios.
            </p>

            <h2 class="mt-20">¿Te preocupa la seguridad, la privacidad o la confiabilidad?</h2>

            <p class="mt-6">
                Tus datos siempre se almacenan en servidores seguros, y tú eres el único dueño de tus respuestas. Puedes exportarlas cuando lo necesites, sin restricciones.
            </p>

            <p class="mt-6">
                El servicio funciona incluso si nunca has programado un backend, aunque tu plataforma no lo soporte. Así puedes recibir formularios sin complicaciones técnicas.
            </p>

            <p class="mt-6">
                Si tienes dudas sobre privacidad, soporte o integraciones, solo escríbenos. Respondemos rápido por correo y teléfono para que nunca te quedes sin ayuda.
            </p>

            <flux:card class="max-w-lg mx-auto mt-20">
                <h2 class="text-2xl max-sm:text-xl font-medium tracking-tight text-zinc-950 text-center mt-2">
                    Precios claros y sin sorpresas
                </h2>
                <p class="text-center mt-4 max-w-sm mx-auto">
                    Elige la forma más sencilla y económica de recibir formularios web.
                </p>
                <ul class="mt-10 gap-3 grid md:grid-cols-2 md:gap-x-6 md:gap-y-3 text-sm">
                    <li class="flex gap-2">
                        <flux:icon.check-circle variant="mini" class="text-green-500" />
                        <div>
                            <h3 class="font-medium text-zinc-950">Prueba gratuita de 30 días</h3>
                            <p class="mt-0.5">Comienza sin riesgo y prueba todas las funciones.</p>
                        </div>
                    </li>
                    <li class="flex gap-2">
                        <flux:icon.check-circle variant="mini" class="text-green-500" />
                        <div>
                            <h3 class="font-medium text-zinc-950">Tarifa anual fija</h3>
                            <p class="mt-0.5">Solo $79 MXN al año, sin cargos ocultos ni comisiones.</p>
                        </div>
                    </li>
                    <li class="flex gap-2">
                        <flux:icon.check-circle variant="mini" class="text-green-500" />
                        <div>
                            <h3 class="font-medium text-zinc-950">Formularios ilimitados</h3>
                            <p class="mt-0.5">Crea todos los formularios que necesites.</p>
                        </div>
                    </li>

                    <li class="flex gap-2">
                        <flux:icon.check-circle variant="mini" class="text-green-500" />
                        <div>
                            <h3 class="font-medium text-zinc-950">Envíos ilimitados</h3>
                            <p class="mt-0.5">Recibe tantas respuestas como quieras, sin límites.</p>
                        </div>
                    </li>
                </ul>

                <flux:button href="https://form.terrific.com.mx/register" variant="primary" color="amber" class="mt-10 w-full text-base!">
                    Probar gratis 30 días
                </flux:button>

                <p class="mt-4 font-medium text-zinc-950 text-center text-sm">Empieza ahora y crea tu primer formulario en minutos.</p>
            </flux:card>

            <div class="mt-64 flex items-center justify-between text-zinc-400">
                <p class="text-sm flex items-center gap-2.5">
                    <x-app-logo-icon class="size-4 text-zinc-300" />
                    <span><strong class="font-medium">form.terrific</strong>.com.mx</span>
                </p>
                <p class="text-sm">por <flux:link href="https://world.hey.com/oliver.servin" variant="subtle">Oliver Servín</flux:link></p>
            </div>
        </main>
    </body>
</html>
