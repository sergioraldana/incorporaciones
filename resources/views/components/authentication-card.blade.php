<div class="bg-gray-50 pb-20">

{{--    <div class="max-w-2xl mx-auto px-4">--}}
{{--        <div class="relative flex justify-center">--}}
{{--            <span class="px-3 bg-gray-50 text-lg font-medium text-gray-900">--}}
{{--                {{ $logo }}--}}
{{--            </span>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
                    <span class="px-3 bg-gray-50 text-lg font-medium text-gray-900">
                {{ $logo }}
            </span>
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>

</div>



