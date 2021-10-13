<div>
    <x-authentication-card>
        <x-slot name="logo">
            {{ $titulo }}
        </x-slot>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-blue-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="username" value="{{ $usuario }}"/>
                <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus/>
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ $credencial }}"/>
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password"/>
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember"/>
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                       href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</div>
