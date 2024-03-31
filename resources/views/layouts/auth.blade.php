<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <!-- Styles -->
        <link href="{{ url('/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
        <link href="{{ url('/assets/css/nucleo-svg.css') }}" rel="stylesheet" />


    </head>
    <body class="m-0 font-sans antialiased font-normal bg-white text-start text-base leading-default text-slate-500">
        <div class="container sticky top-0 z-sticky">
            <div class="flex flex-wrap -mx-3">
                <div class="w-full max-w-full px-3 flex-0">
                    <!-- Navbar -->
                    <nav class="absolute top-0 left-0 right-0 z-30 flex flex-wrap items-center px-4 py-2 m-6 mb-0 shadow-sm rounded-xl bg-white/80 lg:flex-nowrap lg:justify-start">
                        <div class="flex items-center justify-between w-full p-0 px-6 mx-auto flex-wrap-inherit">
                            <a class="py-2 text-sm mr-4 ml-4 whitespace-nowrap font-bold text-slate-700 lg:ml-0" href="https://demos.creative-tim.com/argon-dashboard-tailwind/pages/dashboard.html" target="_blank">{{ config('app.name', 'Laravel') }}</a>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <main class="mt-0 transition-all duration-200 ease-in-out">
            <section>
                @yield('content')
            </section>
        </main>
        <footer class="py-12">
            <div class="container">
                <div class="flex flex-wrap -mx-3">

                </div>
                <div class="flex flex-wrap -mx-3">
                <div class="w-8/12 max-w-full px-3 mx-auto mt-1 text-center flex-0">
                    <p class="mb-0 text-slate-400">
                    Copyright ©
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    {{ config('app.name', 'Laravel') }} by HMTI Udinus.
                    </p>
                </div>
                </div>
            </div>
        </footer>

    @stack('modals')

    </body>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- plugin for charts  -->
    <script src="{{ url('/assets/js/plugins/chartjs.min.js') }}" async></script>
    <!-- plugin for scrollbar  -->
    <script src="{{ url('/assets/js/plugins/perfect-scrollbar.min.js') }}" async></script>
    <!-- main script file  -->
    <script src="{{ url('/assets/js/argon-dashboard-tailwind.js?v=1.0.1') }}" async></script>
</html>
