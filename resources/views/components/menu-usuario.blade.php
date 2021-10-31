<div class="hidden sm:flex sm:items-center sm:ml-6">
    <!-- Teams Dropdown -->
    @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
        <div class="ml-3 relative">
            <x-jet-dropdown align="right" width="60">
                <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                        {{ Auth::user()->currentTeam->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                </x-slot>

                <x-slot name="content">
                    <div class="w-60">
                        <!-- Team Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Team') }}
                        </div>

                        <!-- Team Settings -->
                        <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                            {{ __('Team Settings') }}
                        </x-jet-dropdown-link>

                        @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                            <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                {{ __('Create New Team') }}
                            </x-jet-dropdown-link>
                        @endcan

                        <div class="border-t border-gray-100"></div>

                        <!-- Team Switcher -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Switch Teams') }}
                        </div>

                        @foreach (Auth::user()->allTeams() as $team)
                            <x-jet-switchable-team :team="$team" />
                        @endforeach
                    </div>
                </x-slot>
            </x-jet-dropdown>
        </div>
@endif

<!-- Settings Dropdown -->
    <div class="ml-3 relative">
        <x-jet-dropdown align="right" width="48">
            <x-slot name="trigger">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                        <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </button>
                @else
                    <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                @endif
            </x-slot>

            <x-slot name="content">
                <!-- Account Management -->
                <div class="block px-4 py-2 text-xs text-gray-400">
                    {{ __('Manage Account') }}
                </div>

                <x-jet-dropdown-link href="{{ route('profile.show') }}">
                    {{ __('Profile') }}
                </x-jet-dropdown-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                        {{ __('API Tokens') }}
                    </x-jet-dropdown-link>
                @endif

                <div class="border-t border-gray-100"></div>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-jet-dropdown-link>
                </form>
            </x-slot>
        </x-jet-dropdown>
    </div>
</div>

<!-- Profile dropdown -->
{{--<div x-data="Components.menu({ open: false })" x-init="init()"
     @keydown.escape.stop="open = false; focusButton()" @click.away="onClickAway($event)"
     class="ml-4 relative flex-shrink-0">
    <div>
        <button type="button"
                class="bg-white rounded-full flex text-sm ring-2 ring-white ring-opacity-20 focus:outline-none focus:ring-opacity-100"
                id="user-menu-button" x-ref="button" @click="onButtonClick()"
                @keyup.space.prevent="onButtonEnter()" @keydown.enter.prevent="onButtonEnter()"
                aria-expanded="false" aria-haspopup="true"
                x-bind:aria-expanded="open.toString()" @keydown.arrow-up.prevent="onArrowUp()"
                @keydown.arrow-down.prevent="onArrowDown()">
            <span class="sr-only">Open user menu</span>
            <img class="h-8 w-8 rounded-full"
                 src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixqx=7qwKjEp7Xv&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                 alt="">
        </button>
    </div>

    <div x-show="open" x-transition:leave="transition ease-in duration-75"
         x-transition:leave-start="transform opacity-100 scale-100"
         x-transition:leave-end="transform opacity-0 scale-95"
         class="origin-top-right z-40 absolute -right-2 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
         x-ref="menu-items" x-description="Dropdown menu, show/hide based on menu state."
         x-bind:aria-activedescendant="activeDescendant" role="menu" aria-orientation="vertical"
         aria-labelledby="user-menu-button" tabindex="-1"
         @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()"
         @keydown.tab="open = false" @keydown.enter.prevent="open = false; focusButton()"
         @keyup.space.prevent="open = false; focusButton()">

        <a href="#" class="block px-4 py-2 text-sm text-gray-700" x-state:on="Active"
           x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }"
           role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0"
           @mouseleave="activeIndex = -1" @click="open = false; focusButton()">Your Profile</a>

        <a href="#" class="block px-4 py-2 text-sm text-gray-700"
           :class="{ 'bg-gray-100': activeIndex === 1 }" role="menuitem" tabindex="-1"
           id="user-menu-item-1" @mouseenter="activeIndex = 1" @mouseleave="activeIndex = -1"
           @click="open = false; focusButton()">Settings</a>

        <a href="#" class="block px-4 py-2 text-sm text-gray-700"
           :class="{ 'bg-gray-100': activeIndex === 2 }" role="menuitem" tabindex="-1"
           id="user-menu-item-2" @mouseenter="activeIndex = 2" @mouseleave="activeIndex = -1"
           @click="open = false; focusButton()">Sign out</a>

    </div>

</div>--}}
