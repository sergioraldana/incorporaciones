<div>
    <div class="relative bg-gray-50 pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
        <div class="relative max-w-7xl mx-auto">
            <div class="text-center">
                <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">
                    Seleccione una opción
                </h2>
                <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 sm:mt-4">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa libero labore natus atque, ducimus
                    sed.
                </p>
            </div>

            <x-validation-errors class="mb-4"/>

            {{--Opciones--}}
            <div x-data="{ estudiante: false, administrativo: false, verificador: false }"
                 class="mt-12 max-w-lg mx-auto grid gap-12 lg:grid-cols-3 lg:max-w-none">
                {{--Layout--}}
                <div href="#formEstudiante"
                     wire:click="$set('mostrar', 'formEstudiante')"
                     x-on:click="estudiante = ! estudiante, administrativo = false, verificador = false"
                     :class="estudiante ? 'cursor-pointer flex flex-col rounded-lg shadow-lg overflow-hidden text-gray-500 hover:text-blue-800 hover:shadow-xl transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 0 bg-white ring'
                            : 'cursor-pointer flex flex-col rounded-lg shadow-lg overflow-hidden text-gray-500 hover:text-blue-800 hover:shadow-xl transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 0 bg-white'">
                    <div>
                        <div class="flex justify-center flex-shrink-0">
                            <svg class="flex-shrink-0 h-40 w-auto " x-description="Heroicon name: outline/document-text"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor"
                                 aria-hidden="true">
                                <path d="M12 14l9-5-9-5-9 5 9 5z"/>
                                <path
                                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/>
                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={1}
                                      d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"/>
                            </svg>
                        </div>
                        <div class="flex-1 p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <div href="#" class="block mt-2">
                                    <p class="text-xl font-semibold flex justify-center">
                                        Estudiante
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--Administrativo--}}
                <div
                    wire:click="$set('mostrar', 'formAdministrativo')"
                    x-on:click="administrativo = ! administrativo, estudiante = false, verificador = false"
                    :class="administrativo ? 'cursor-pointer flex flex-col rounded-lg shadow-lg overflow-hidden text-gray-500 hover:text-blue-800 hover:shadow-xl transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 0 bg-white ring'
                            : 'cursor-pointer flex flex-col rounded-lg shadow-lg overflow-hidden text-gray-500 hover:text-blue-800 hover:shadow-xl transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 0 bg-white'">
                    <div class="flex-shrink-0">
                        <div class="flex justify-center flex-shrink-0 bg-white">
                            <svg class="flex-shrink-0 h-40 w-auto" x-description="Heroicon name: outline/document-text"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor"
                                 aria-hidden="true">
                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                                      d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <div href="#" class="block mt-2">
                                <p class="text-xl font-semibold flex justify-center">
                                    Personal administrativo
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                {{--Verificar--}}
                <div
                    wire:click="$set('mostrar', 'formVerificar')"
                    x-on:click="verificador = ! verificador, estudiante = false, administrativo = false"
                    :class="verificador ? 'cursor-pointer flex flex-col rounded-lg shadow-lg overflow-hidden text-gray-500 hover:text-blue-800 hover:shadow-xl transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 0 bg-white ring'
                            : 'cursor-pointer flex flex-col rounded-lg shadow-lg overflow-hidden text-gray-500 hover:text-blue-800 hover:shadow-xl transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 0 bg-white'">
                    <div class="flex-shrink-0">
                        <div class="flex justify-center flex-shrink-0 bg-white">
                            <svg class="flex-shrink-0 h-40 w-auto" x-description="Heroicon name: outline/document-text"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor"
                                 aria-hidden="true">
                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={1}
                                      d="M10 21h7a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v11m0 5l4.879-4.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <div class="block mt-2">
                                <p class="text-xl font-semibold flex justify-center">
                                    Verificar un trámite
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>

        @if($mostrar == 'formEstudiante')
            @livewire('login',
            ['titulo' => 'Login estudiante desde componente',
            'usuario' => 'Registro Academico',
            'credencial' => 'PIN',
            'botonRecuperar' => 'Recuperar PIN'])
        @elseif($mostrar == 'formAdministrativo')
            @livewire('login',
            ['titulo' => 'Login Administrativo desde componente',
            'usuario' => 'Registro de Personal',
            'credencial' => 'Contraseña',
            'botonRecuperar' => 'Recuperar contraseña'])
        @endif

    </div>

</div>
