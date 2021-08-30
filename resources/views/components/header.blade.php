<div class="bg-gray-100">
    <div class="px-4 py-6 max-w-full mx-auto sm:px-6 lg:px-8">

        <div class="relative pb-5 border-b border-gray-200 sm:pb-0">
            <div class="md:flex md:items-center md:justify-between">
                <h2 class="text-2xl leading-6 font-medium text-gray-900">
                    Solicitudes
                </h2>
{{--                <div class="mt-3 flex md:mt-0 md:absolute md:top-3 md:right-0">
                    <button type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Share
                    </button>
                    <button type="button" class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Create
                    </button>
                </div>--}}
            </div>
            <div class="mt-4">
                <div class="sm:hidden" x-description="Dropdown menu on small screens">
                    <label for="current-tab" class="sr-only">Select a tab</label>
                    <select id="current-tab" name="current-tab" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">

                        <option selected="">Recibidas</option>

                        <option>Aprobadas</option>

                        <option >Rechazadas</option>

                    </select>
                </div>
                <div class="hidden sm:block" x-description="Tabs at small breakpoint and up">
                    <nav class="-mb-px flex space-x-8">

                        <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap pb-4 px-1 border-b-2 font-medium text-sm" x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;border-blue-500 text-indigo-600&quot;, Default: &quot;border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300&quot;">
                            Recibidas
                        </a>

                        <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap pb-4 px-1 border-b-2 font-medium text-sm" x-state-description="undefined: &quot;border-blue-500 text-indigo-600&quot;, undefined: &quot;border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300&quot;">
                            Aprobadas
                        </a>

                        <a href="#" class="border-indigo-500 text-indigo-600 whitespace-nowrap pb-4 px-1 border-b-2 font-medium text-sm" aria-current="page" x-state-description="undefined: &quot;border-indigo-500 text-blue-600&quot;, undefined: &quot;border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300&quot;">
                            Rechazadas
                        </a>

                    </nav>
                </div>
            </div>
        </div>

    </div>
</div>
