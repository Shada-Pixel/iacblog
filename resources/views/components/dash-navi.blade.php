<!-- Dashboard Navigation Links -->
<div class="max-w-7xl mx-auto sm:px-2 p-3 space-x-4 bg-white">
    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="uppercase">
        {{ __('Dashboard') }}
    </x-nav-link>
    <x-nav-link :href="route('users.index')" :active="request()->routeIs('users.*')" class="uppercase">
        {{ __('User') }}
    </x-nav-link>
    <x-nav-link :href="route('categories.index')" :active="request()->routeIs('categories.*')" class="uppercase">
        {{ __('Category') }}
    </x-nav-link>
    <x-nav-link :href="route('posts.index')" :active="request()->routeIs('posts.*')" class="uppercase">
        {{ __('Posts') }}
    </x-nav-link>
</div>
