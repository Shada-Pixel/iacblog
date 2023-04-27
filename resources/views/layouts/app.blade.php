<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @if (isset($pagemeta))
            {{ $pagemeta }}
        @endif


        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Custom Css-->
        <link rel="stylesheet" href="{{asset('asset/custom.css')}}">

        <!-- Data table css -->
        <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-hindsili text-slade">
        <div class="min-h-screen bg-gray-100 flex">
            <div class="w-2/5 hidden min-h-full bg-sidebg sm:flex items-center justify-end bg-no-repeat bg-cover" id="sideforest">
            </div>
            <div class="flex-grow">
                @include('layouts.navigation')
                @if (isset($submenu))
                    {{ $submenu }}
                @endif

                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>
            </div>

        </div>

        <!-- jQuerry -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

        <!-- Iconify -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/iconify/2.0.0/iconify.min.js" integrity="sha512-lYMiwcB608+RcqJmP93CMe7b4i9G9QK1RbixsNu4PzMRJMsqr/bUrkXUuFzCNsRUo3IXNUr5hz98lINURv5CNA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Data table js-->
        <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <!-- Page Script -->
        @if (isset($script))
            {{ $script }}
        @endif
    </body>
</html>
