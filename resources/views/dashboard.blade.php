<x-app-layout>

    <x-slot name="settingdd">
        @if (Route::has('login'))
            <div class="hidden absolute top-0 right-0 px-6 py-4 sm:block">
                <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <x-dropdown align="right" width="48">

                        <x-slot name="trigger">
                            <button
                                class="py-2 flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">

                                <div class="text-2xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="1.5">
                                            <path
                                                d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10s10-4.477 10-10S17.523 2 12 2Z" />
                                            <path
                                                d="M4.271 18.346S6.5 15.5 12 15.5s7.73 2.846 7.73 2.846M12 12a3 3 0 1 0 0-6a3 3 0 0 0 0 6Z" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            @auth
                                @if (Route::has('dashboard'))
                                    <x-dropdown-link :href="route('dashboard')">
                                        {{ __('Dashboard') }}
                                    </x-dropdown-link>
                                @endif
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                                    this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            @else
                                <x-dropdown-link :href="route('login')">
                                    {{ __('Log in') }}
                                </x-dropdown-link>

                                @if (Route::has('register'))
                                    <x-dropdown-link :href="route('register')">
                                        {{ __('Register') }}
                                    </x-dropdown-link>
                                @endif
                            @endauth

                        </x-slot>
                    </x-dropdown>
                </div>
            </div>
        @endif
    </x-slot>
    <x-slot name="submenu">
        <x-dash-navi></x-dash-navi>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-2 grid grid-cols-2 sm:grid-cols-4 gap-2 sm:gap-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">
                Genre
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">
                Categories
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">
                Categories
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">
                Categories
            </div>
        </div>
    </div>
</x-app-layout>
