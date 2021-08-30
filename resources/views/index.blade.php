<x-guest-layout>

    <x-sidebar />
    <x-toolbar />
    <x-header />

    <main class="flex-1 relative overflow-y-auto focus:outline-none">
        <div class="py-6">
            <div class="max-w-full mx-auto px-4 sm:px-6 md:px-8">
                <!-- Replace with your content -->
                @livewire('solicitudes-recibidas')
                <!-- /End replace -->
            </div>
        </div>
    </main>




</x-guest-layout>


{{--<body class="antialiased">
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Iniciar sesión</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Registrarse</a>
                @endif
            @endauth
        </div>
    @endif
</div>
</body>--}}






