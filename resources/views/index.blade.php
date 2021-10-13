{{--Pantalla inicial del sistema muestra inicio de sesión--}}
<x-guest-layout>

    <nav class="bg-blue-800">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex-shrink-0 flex items-center">
                        <span class="text-white text-lg font-bold">Incorporaciones</span>
                    </div>
                </div>
            </div>
        </div>
    </nav>

@livewire('index')

    <x-footer></x-footer>

</x-guest-layout>
