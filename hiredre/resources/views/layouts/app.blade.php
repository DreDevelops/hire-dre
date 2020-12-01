<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/css/uikit.min.css" />


        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/js/uikit-icons.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.js" defer></script>
        <script src="https://kit.fontawesome.com/8935cb773c.js" crossorigin="anonymous"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
                <nav class="uk-navbar-container" uk-navbar="dropbar: true;" uk-navbar>
                <div class="uk-navbar-center">

                    <div class="uk-navbar-center-left"><div>
                        <ul class="uk-navbar-nav">
                            <li class="uk-active"><a href="#">ABOUT</a></li>
                            <li><a href="#">CONTACT</a></li>
                        </ul>
                    </div></div>
                    <a class="uk-navbar-item uk-logo" href="#">HIRE DRE</a>
                    <div class="uk-navbar-center-right"><div>
                        <ul class="uk-navbar-nav">
                            <li><a href="#">PROJECTS</a></li>
                            <li><a href="#">SKILLS</a></li>
                        </ul>
                    </div></div>

                </div>
                </nav>
            </div>
            <!-- Page Content -->
            <div>
                @yield('content')
            </div>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
