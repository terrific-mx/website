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
                Recibe respuestas a tus formularios sin necesidad de backend
            </h1>
            <p class="max-w-lg mx-auto mt-6" data-lead>
                Solo copia y pega tu endpoint y comienza a recibir <strong>leads</strong>.
            </p>

            <p class="mt-48">
                Recibe envíos al instante desde sitios estáticos y creadores de páginas (Wix, Webflow, Squarespace). <strong>Prueba gratis 30 días.</strong> Después, <strong>79 MXN/año</strong> por formularios y envíos ilimitados.
            </p>

            <p class="mt-6">
                Ideal para <strong>desarrolladores, diseñadores y pequeñas agencias</strong> que crean landing pages — y para propietarios de sitios sin conocimientos técnicos que usan Wix, Webflow o Squarespace y quieren <strong>capturar leads sin backend</strong>.
            </p>

            <h2 class="mt-20">Formularios sin un servidor</h2>

            <p class="mt-6">
                <strong>Sin servidor. Sin despliegues. Sin complicaciones.</strong> Solo apunta tu formulario a una URL y empieza a recibir envíos en minutos.
            </p>

            <p class="mt-6">
                Crea un formulario en segundos, copia el endpoint generado y pégalo en el atributo <code class="font-medium bg-yellow-200 text-zinc-950 px-1">action</code> de tu formulario — los envíos llegan a tu cuenta y despachan <strong>notificaciones por correo</strong>. Mantén tu HTML y diseño tal cual; Terrific Form solo captura los datos que le envías.
            </p>

            <p class="mt-6">
                Olvídate de configurar SMTP, asegurar servidores u hospedar formularios. <strong>Formularios y envíos ilimitados</strong> por una tarifa anual baja hacen que capturar leads sea <strong>predecible y económico</strong>. Consulta el <strong>historial de entradas</strong>, busca entradas recibidas y recibe <strong>notificaciones</strong> en el momento en que llega un lead — ideal para landing pages, portafolios y sitios corporativos donde <strong>cada mensaje importa</strong>.
            </p>

            <h2 class="mt-20">Endpoints rápidos y precios previsibles</h2>

            <p class="mt-6">
                <strong>Lanza más rápido</strong>. Endpoints instantáneos: crea un formulario y obtén una URL de <code class="font-medium bg-yellow-200 text-zinc-950 px-1">action</code> al instante.
            </p>

            <p class="mt-6"><strong>Costos previsibles</strong>. Formularios y envíos ilimitados: tarifa plana anual — sin cargos sorpresa.</p>

            <p class="mt-6"><strong>Contacto más veloz con clientes potenciales.</strong> Alertas por correo: recibe notificaciones de nuevos envíos para responder rápido.</p>

            <p class="mt-6"><strong>Gestiona tus entradas sin herramientas adicionales</strong>. Historial de entradas: explora, busca y exporta entradas anteriores.</p>

            <p class="mt-6"><strong>Mayor seguridad</strong>. HTTPS por defecto: todos los endpoints cifran los datos en tránsito.</p>

            <h2 class="mt-20">Privacidad, seguridad e integraciones</h2>

            <p class="mt-6">
                <strong>¿Privacidad?</strong> Los envíos se almacenan de forma segura y solo los usuarios autorizados de la cuenta tienen acceso. Si necesitas exportar todo, nuestro soporte puede ofrecerte archivos CSV o JSON.
            </p>

            <p class="mt-6">
                <strong>¿Seguridad?</strong> Todos los endpoints usan <strong>HTTPS</strong> y protección estándar — tus datos viajan siempre <strong>cifrados</strong>.
            </p>

            <p class="mt-6">
                <strong>¿Integraciones o webhooks?</strong> Por ahora puedes <strong>exportar datos manualmente</strong>; los <strong>webhooks</strong> están en fase de planeación.
            </p>

            <p class="mt-6">
                <strong>¿Prefieres migrar?</strong> Este servicio es hospedado en la nuebe para tu mayor comodidad — si decides migrar, nuestro servicio de soporte te ayuda con una exportación de tus datos.
            </p>

            <flux:card class="max-w-lg mx-auto mt-20">
                <h2 class="text-2xl max-sm:text-xl font-medium tracking-tight text-zinc-950 text-center mt-2">
                    Prueba gratuita de 30 días
                </h2>
                <p class="text-center mt-4">Prueba todas las funcionalidades antes de pagar.</p>
                <ul class="mt-10 gap-3 grid md:grid-cols-2 md:gap-x-6 md:gap-y-3 text-sm">
                    <li class="flex gap-2">
                        <flux:icon.check-circle variant="mini" class="text-green-500" />
                        <span><strong class="font-medium text-zinc-950">79 MXN/año</strong> — formularios y envíos ilimitados.</span>
                    </li>
                    <li class="flex gap-2">
                        <flux:icon.check-circle variant="mini" class="text-green-500" />
                        <span><strong class="text-zinc-950 font-medium">Configuración rápida</strong>: obtén un endpoint funcional en menos de 60 segundos.</span>
                    </li>
                    <li class="flex gap-2">
                        <flux:icon.check-circle variant="mini" class="text-green-500" />
                        Exportaciones disponibles en CSV y JSON bajo solicitud.
                    </li>
                    <li class="flex gap-2">
                        <flux:icon.check-circle variant="mini" class="text-green-500" />
                        HTTPS activo en todas las cuentas.
                    </li>
                </ul>

                <flux:button href="https://form.terrific.com.mx/register" variant="primary" color="amber" class="mt-10 w-full text-base!">
                    Empieza tu prueba gratis de 30 días
                </flux:button>

                <p class="text-center mt-4 text-sm font-medium text-zinc-950">Crea tu primer endpoint ahora.</p>
            </flux:card>

            <p class="mt-20">
                <strong>Captura leads hoy sin servidores</strong> — <strong>sin riesgo durante 30 días</strong> y a bajo costo después.
            </p>

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
