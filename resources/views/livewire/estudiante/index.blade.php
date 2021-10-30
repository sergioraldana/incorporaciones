<div>
        <div class="grid grid-cols-1 gap-4 lg:col-span-2">
            <!-- Welcome panel -->
            <section aria-labelledby="profile-overview-title">
                <div class="rounded-lg bg-white overflow-hidden shadow">
                    <h2 class="sr-only" id="profile-overview-title">Profile Overview</h2>
                    <div class="bg-white p-8">
                        <div class="sm:flex sm:items-center sm:justify-between">
                            <div class="sm:flex sm:space-x-5">
                                <div class="flex-shrink-0">
                                    <img class="mx-auto h-20 w-20 rounded-full"  src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                                </div>
                                <div class="mt-4 text-center sm:mt-0 sm:pt-1 sm:text-left">
                                    <p class="text-sm font-medium text-gray-600">Bienvenido,</p>
                                    <p class="text-xl font-bold text-gray-900 sm:text-2xl">{{Auth::user()->name}}</p>
                                    <p class="text-sm font-medium text-gray-600">{{Auth::user()->username}}</p>
                                </div>
                            </div>
                            <div class="mt-5 flex justify-center sm:mt-0">
                                <button wire:click="$toggle('estadisticas')" type="button"
                                        class="inline-flex items-center px-6 py-3 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-yellow-600 hover:bg-yellow-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                                    @if($estadisticas)
                                    <svg class="-ml-1 mr-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                    Realizar Solicitud
                                        @else
                                    Regresar
                                        @endif
                                </button>
                            </div>
                        </div>
                    </div>
                    {{--<div
                        class="border-t border-gray-200 bg-gray-50 grid grid-cols-1 divide-y divide-gray-200 sm:grid-cols-3 sm:divide-y-0 sm:divide-x">

                        <div class="px-6 py-5 text-sm font-medium text-center">
                            <span class="text-gray-900">12</span>
                            <!-- space -->
                            <span class="text-gray-600">Vacation days left</span>
                        </div>

                        <div class="px-6 py-5 text-sm font-medium text-center">
                            <span class="text-gray-900">4</span>
                            <!-- space -->
                            <span class="text-gray-600">Sick days left</span>
                        </div>

                        <div class="px-6 py-5 text-sm font-medium text-center">
                            <span class="text-gray-900">2</span>
                            <!-- space -->
                            <span class="text-gray-600">Personal days left</span>
                        </div>

                    </div>--}}
                </div>
            </section>

        </div>
    <div class="">
            @if($estadisticas)
                @livewire('estudiante.panel-estadisticas')
            @else
                @livewire('estudiante.panel-opciones')
            @endif

        </div>
</div>
