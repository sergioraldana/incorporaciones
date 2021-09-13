<div class="bg-gray-50 pb-20">

    <div class="max-w-2xl mx-auto px-4">
        <div class="relative">
            <div class="absolute inset-0 flex items-center" aria-hidden="true">
                <div class="w-full border-t border-gray-300"></div>
            </div>
            <div class="relative flex justify-center">
                      <span class="px-3 bg-gray-50 text-lg font-medium text-gray-900">
                         {{ $logo }}
                      </span>
            </div>
        </div>
    </div>

    <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0">

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>

</div>



