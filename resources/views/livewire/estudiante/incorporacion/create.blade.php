<div>
        <div class="bg-white rounded-lg">
            <div class="max-w-7xl mx-auto pt-8 pb-12 px-4 sm:px-6 lg:px-8">

                <nav aria-label="Progress">
                    <ol class="border border-gray-300 rounded-lg divide-y divide-gray-300 md:flex md:divide-y-0">

                        <li class="relative md:flex-1 md:flex">

                            <a href="#" class="group flex items-center w-full" x-description="Completed Step">
                                  <span class="px-6 py-4 flex items-center text-sm font-medium">
                                    <span class="flex-shrink-0 w-10 h-10 flex items-center justify-center bg-blue-600 rounded-full group-hover:bg-blue-800">
                                      <svg class="w-6 h-6 text-white" x-description="Heroicon name: solid/check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                     <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                                <span class="ml-4 text-sm font-medium text-gray-900">Datos Generales</span>
                              </span>
                            </a>

                            <!-- Arrow separator for lg screens and up -->
                            <div class="hidden md:block absolute top-0 right-0 h-full w-5" aria-hidden="true">
                                <svg class="h-full w-full text-gray-300" viewBox="0 0 22 80" fill="none" preserveAspectRatio="none">
                                    <path d="M0 -2L20 40L0 82" vector-effect="non-scaling-stroke" stroke="currentcolor" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                        </li>

                        <li class="relative md:flex-1 md:flex">

                            <a href="#" class="px-6 py-4 flex items-center text-sm font-medium" aria-current="step" x-description="Current Step">
              <span class="flex-shrink-0 w-10 h-10 flex items-center justify-center border-2 border-blue-600 rounded-full">
                <span class="text-blue-600">02</span>
              </span>
                                <span class="ml-4 text-sm font-medium text-blue-600">Estudios realizados en el extranjero</span>
                            </a>

                            <!-- Arrow separator for lg screens and up -->
                            <div class="hidden md:block absolute top-0 right-0 h-full w-5" aria-hidden="true">
                                <svg class="h-full w-full text-gray-300" viewBox="0 0 22 80" fill="none" preserveAspectRatio="none">
                                    <path d="M0 -2L20 40L0 82" vector-effect="non-scaling-stroke" stroke="currentcolor" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                        </li>

                        <li class="relative md:flex-1 md:flex">

                            <a href="#" class="group flex items-center" x-description="Upcoming Step">
              <span class="px-6 py-4 flex items-center text-sm font-medium">
                <span class="flex-shrink-0 w-10 h-10 flex items-center justify-center border-2 border-gray-300 rounded-full group-hover:border-gray-400">
                  <span class="text-gray-500 group-hover:text-gray-900">03</span>
                </span>
                <span class="ml-4 text-sm font-medium text-gray-500 group-hover:text-gray-900">Documentos de soporte</span>
              </span>
                            </a>
                        </li>

                    </ol>
                </nav>

                <form class="space-y-8 divide-y divide-gray-200">
                    <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">

                        <div class="pt-8 space-y-6 sm:pt-10 sm:space-y-5">
                            <div>
                                <h3 class="text-lg leading-6 font-medium text-gray-900">
                                    Datos Generales
                                </h3>
                                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos doloribus fugit libero maxime molestiae nam omnis.
                                </p>
                            </div>
                            <div class="space-y-6 sm:space-y-5">
                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="first_name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                        Nombres
                                    </label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="max-w-lg block w-full shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>

                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="last_name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                        Apellidos
                                    </label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="max-w-lg block w-full shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>

                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="email" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                        Correo electrónico
                                    </label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input id="email" name="email" type="email" autocomplete="email" class="block max-w-lg w-full shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm border-gray-300 rounded-md">
                                        <p class="mt-2 text-sm text-gray-500">Para recibir notificaciones</p>
                                    </div>
                                </div>


                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="telefono" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                        Teléfono
                                    </label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input id="telefono" name="telefono" type="text" autocomplete="tel" class="max-w-lg block w-full shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>

                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="telefono" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                        Celular
                                    </label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input id="celular" name="celular" type="text" autocomplete="tel" class="max-w-lg block w-full shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>


                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="departamento" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                        Departamento
                                    </label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <select id="departamento" name="departamento" autocomplete="departamento" class="max-w-lg block focus:ring-blue-500 focus:border-blue-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md">

                                           @foreach($departamentos as $departamento)
                                                <option>{{ $departamento->nombre }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>

                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="departamento" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                        Municipio
                                    </label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <select id="departamento" name="departamento" autocomplete="departamento" class="max-w-lg block focus:ring-blue-500 focus:border-blue-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="street_address" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                        Dirección
                                    </label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input type="text" name="street_address" id="street_address" autocomplete="street-address" class="block max-w-lg w-full shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>


                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="city" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                        Lugar de nacimiento
                                    </label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input type="text" name="city" id="city" class="max-w-lg block w-full shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>


                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="state" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                        Fecha de nacimiento
                                    </label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input type="text" name="state" id="state" class="max-w-lg block w-full shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>

                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="nacionalidad" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                        Nacionalidad
                                    </label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <select id="country" name="country" autocomplete="country" class="max-w-lg block focus:ring-blue-500 focus:border-blue-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                            @foreach($paises as $pais)
                                                <option>{{ $pais->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="cover_photo" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                        Fotografía reciente
                                    </label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <div class="max-w-lg flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                            <div class="space-y-1 text-center">
                                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                <div class="flex text-sm text-gray-600">
                                                    <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-blue-600 hover:text-blue-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-blue-500">
                                                        <span>Upload a file</span>
                                                        <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                                    </label>
                                                    <p class="pl-1">or drag and drop</p>
                                                </div>
                                                <p class="text-xs text-gray-500">
                                                    PNG, JPG, GIF up to 10MB
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </label>







                            <div class="divide-y divide-gray-200 pt-8 space-y-6 sm:pt-10 sm:space-y-5">
                                <div>
                                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                                        Estudios realizados en el extranjero
                                    </h3>
                                    <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos doloribus fugit libero maxime molestiae nam omnis.
                                    </p>
                                </div>

                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="pais" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                        País
                                    </label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <select id="country" name="country" autocomplete="country" class="max-w-lg block focus:ring-blue-500 focus:border-blue-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                            <option>Guatemala</option>
                                            <option>Canada</option>
                                            <option>Mexico</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="street_address" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                        Institución en dónde se graduó
                                    </label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input type="text" name="street_address" id="street_address" autocomplete="street-address" class="block max-w-lg w-full shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>

                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="street_address" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                        Título Profesional obtenido
                                    </label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input type="text" name="street_address" id="street_address" autocomplete="street-address" class="block max-w-lg w-full shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>



                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="pais" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                        Años de duración de los estudios
                                    </label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <select id="country" name="country" autocomplete="country" class="max-w-lg block focus:ring-blue-500 focus:border-blue-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="pais" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                        Número de cursos aprobados
                                    </label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <select id="country" name="country" autocomplete="country" class="max-w-lg block focus:ring-blue-500 focus:border-blue-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="space-y-6 sm:space-y-5 divide-y divide-gray-200">
                                    <div class="pt-6 sm:pt-5">
                                        <div role="group" aria-labelledby="label-notifications">
                                            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-baseline">
                                                <div>
                                                    <div class="text-base font-medium text-gray-900 sm:text-sm sm:text-gray-700" id="label-notifications">
                                                        Indique la opción de incorporación que desea elegir
                                                    </div>
                                                </div>
                                                <div class="sm:col-span-2">
                                                    <div class="max-w-lg">
                                                        {{--                                                <p class="text-sm text-gray-500">These are delivered via SMS to your mobile phone.</p>--}}
                                                        <div class="mt-4 space-y-4">
                                                            <div class="flex items-center">
                                                                <input id="examen" name="examen" type="radio" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                                                <label for="examen" class="ml-3 block text-sm font-medium text-gray-700">
                                                                    Examen de incorporación
                                                                </label>
                                                            </div>
                                                            <div class="flex items-center">
                                                                <input id="servicio" name="servicio" type="radio" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                                                <label for="servicio" class="ml-3 block text-sm font-medium text-gray-700">
                                                                    Efectuar un año de servicio social o el equivalente a 1,600 horas de servicio
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>





                            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="about" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                    Observaciones
                                </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <textarea id="about" name="about" rows="3" class="max-w-lg shadow-sm block w-full focus:ring-blue-500 focus:border-blue-500 sm:text-sm border-gray-300 rounded-md"></textarea>
                                    <p class="mt-2 text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam asperiores at culpa cum, doloribus eos esse est expedita laborum, magni molestiae, necessitatibus quia quibusdam quos rem repudiandae sed sit voluptates.</p>
                                </div>
                            </div>


                            <div class="pt-5">
                                <div class="flex justify-end">
                                    <a href="{{ route('estudiante') }}"  class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                        Cancelar
                                    </a>
                                    <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                        Solicitar
                                    </button>
                                </div>
                            </div>
                </form>

            </div>
        </div>

</div>
