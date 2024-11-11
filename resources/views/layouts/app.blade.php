<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />

        <!-- CSS -->        
        <link href="{{url('/css/nucleo-icons.css')}}" rel="stylesheet" />
        <link href="{{url('/css/nucleo-svg.css')}}" rel="stylesheet" />

        <link id="pagestyle" href="{{url('/css/material-dashboard.css?v=3.2.0')}}" rel="stylesheet" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Material Icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="g-sidenav-show  bg-gray-100 ">
            <x-menu/>
            {{-- <x-navigation/> --}}

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-2 px-4 sm:px-6 lg:px-8">
                        <x-navigation/>
                    </div>
                </header>
            @endif
                
            <!-- Page Content -->
            <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">   
                @yield('content')
            </main>
            </main>
        </div>

        <!--   Core JS Files   -->
        <script src="{{url('/js/core/popper.min.js')}}"></script>
        <script src="{{url('/js/core/bootstrap.min.js')}}"></script>
        <script src="{{url('/js/plugins/perfect-scrollbar.min.js')}}"></script>
        <script src="{{url('/js/plugins/smooth-scrollbar.min.js')}}"></script>
        <script src="{{url("/js/plugins/chartjs.min.js")}}"></script>


        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="{{url('/js/material-dashboard.min.js?v=3.2.0')}}"></script>
    </body>
</html>
