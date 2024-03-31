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

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Styles -->

    <!-- datatables-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">

    <link href="{{ url('/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ url('/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <link href="{{ url('/assets/css/argon-dashboard-tailwind.css?v=1.0.1') }}" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>

</head>

<body
    class="m-0 min-h-screen font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-blue-50 text-slate-500">
    <div class="absolute w-full bg-[#0B0960] dark:hidden min-h-75"></div>
    <!-- sidenav  -->
    <aside
        class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0"
        aria-expanded="false">
        <div class="h-19">
            <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times dark:text-white text-slate-400 xl:hidden"
                sidenav-close></i>
            <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap dark:text-white text-slate-700"
                href="https://demos.creative-tim.com/argon-dashboard-tailwind/pages/dashboard.html" target="_blank">
                <img src="{{ url('/img/logo.webp') }}"
                    class="inline h-full max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-8"
                    alt="main_logo" />
                <img src="{{ url('/img/logo.webp') }}"
                    class="hidden h-full max-w-full transition-all duration-200 dark:inline ease-nav-brand max-h-8"
                    alt="main_logo" />
                <span
                    class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">{{ config('app.name', 'Laravel') }}</span>
            </a>
        </div>

        <hr
            class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />

        <div class="items-center block w-auto max-h-screen overflow-auto grow basis-full">
            <!-- Admin -->
            <ul class="flex flex-col pl-0 mb-0">
                @auth('admin')
                    <li class="mt-0.5 w-full">
                        <a class="py-2.7  {{ request()->is('admin') ? 'bg-[#0B0960]/10' : '' }} dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors"
                            href="{{ route('admin.index') }}">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2"></i>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Dashboard</span>
                        </a>
                    </li>
                    <li class="mt-0.5 w-full">
                        <a class="py-2.7  {{ request()->is('admin/participantData') ? 'bg-[#0B0960]/10' : '' }} dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors"
                            href="{{ route('admin.participantData.index') }}">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-single-02"></i>

                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Peserta Pameran</span>
                        </a>
                    </li>
                    <li class="mt-0.5 w-full">
                        <a class="py-2.7  {{ request()->is('admin/participantData') ? 'bg-[#0B0960]/10' : '' }} dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors"
                            href="{{ route('admin.openTalkParticipant.index') }}">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-single-02"></i>

                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Peserta Open Talk</span>
                        </a>
                    </li>
                    <li class="mt-0.5 w-full">
                        <a class="py-2.7  {{ request()->is('admin/admin') ? 'bg-[#0B0960]/10' : '' }} dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors"
                            href="{{ route('admin.admin.index') }}">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-single-02"></i>

                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Pengunjung</span>
                        </a>
                    </li>
                    <li class="mt-0.5 w-full">
                        <a class="py-2.7  {{ request()->is('admin/masterPoint') ? 'bg-[#0B0960]/10' : '' }} dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors"
                            href="{{ route('admin.masterPoint.index') }}">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-settings-gear-65"></i>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Pengatur Point</span>
                        </a>
                    </li>
                    <li class="mt-0.5 w-full">
                        <a class="py-2.7  {{ request()->is('admin/masterReward') ? 'bg-[#0B0960]/10' : '' }} dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors"
                            href="{{ route('admin.masterReward.index') }}">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-settings-gear-65"></i>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Pengatur Reward</span>
                        </a>
                    </li>
                    <li class="mt-0.5 w-full">
                        <a class="py-2.7  {{ request()->is('admin/point') ? 'bg-[#0B0960]/10' : '' }} dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors"
                            href="{{ route('admin.point.index') }}">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-archive-2"></i>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Database Point</span>
                        </a>
                    </li>
                    <li class="mt-0.5 w-full">
                        <a class="py-2.7  {{ request()->is('admin/vote') ? 'bg-[#0B0960]/10' : '' }} dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors"
                            href="{{ route('admin.vote.index') }}">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-archive-2"></i>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Database Voting</span>
                        </a>
                    </li>
                    <li class="mt-0.5 w-full">
                        <a class="py-2.7  {{ request()->is('admin/reward') ? 'bg-[#0B0960]/10' : '' }} dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors"
                            href="{{ route('admin.reward.index') }}">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-box-2"></i>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Penukaran Hadiah</span>
                        </a>
                    </li>
                    @endif
                    <!-- Participant -->
                    @auth('participant')
                        <li class="mt-0.5 w-full">
                            <a class="py-2.7  {{ request()->is('participant') ? 'bg-[#0B0960]/10' : '' }} dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors"
                                href="{{ route('participant.index') }}">
                                <div
                                    class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                    <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2"></i>

                                </div>
                                <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Home</span>
                            </a>
                        </li>
                        <li class="mt-0.5 w-full">
                            <a class="py-2.7  {{ request()->is('participant/detailTeam') ? 'bg-[#0B0960]/10' : '' }} dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors"
                                href="{{ route('participant.detailTeam.index') }}">
                                <div
                                    class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                    <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-single-02"></i>

                                </div>
                                <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Data Lengkap</span>
                            </a>
                        </li>
                        <li class="mt-0.5 w-full">
                            <a class="py-2.7  {{ request()->is('participant/detailProject') ? 'bg-[#0B0960]/10' : '' }} dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors"
                                href="{{ route('participant.detailProject.index') }}">
                                <div
                                    class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                    <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-folder-17"></i>

                                </div>
                                <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Data Projek</span>
                            </a>
                        </li>
                        <li class="mt-0.5 w-full">
                            <a class="py-2.7  {{ request()->is('participant/detailPayment') ? 'bg-[#0B0960]/10' : '' }} dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors"
                                href="{{ route('participant.detailPayment.index') }}">
                                <div
                                    class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                    <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-money-coins"></i>
                                </div>
                                <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Verifikasi
                                    Pembayaran</span>
                            </a>
                        </li>
                        @endif
                        <!-- Participant -->
                        @auth('web')
                            <li class="mt-0.5 w-full">
                                <a class="py-2.7  {{ request()->is('participant') ? 'bg-[#0B0960]/10' : '' }} dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors"
                                    href="{{ route('participant.index') }}">
                                    <div
                                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                        <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2"></i>

                                    </div>
                                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Home</span>
                                </a>
                            </li>
                            <li class="mt-0.5 w-full">
                                <a class="py-2.7  {{ request()->is('participant/detailTeam') ? 'bg-[#0B0960]/10' : '' }} dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors"
                                    href="{{ route('participant.detailTeam.index') }}">
                                    <div
                                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                        <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-single-02"></i>

                                    </div>
                                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Open Talks</span>
                                </a>
                            </li>
                            <li class="mt-0.5 w-full">
                                <a class="py-2.7  {{ request()->is('participant/detailTeam') ? 'bg-[#0B0960]/10' : '' }} dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors"
                                    href="{{ route('participant.detailTeam.index') }}">
                                    <div
                                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                        <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-single-02"></i>

                                    </div>
                                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Histori Vote</span>
                                </a>
                            </li>
                            <li class="mt-0.5 w-full">
                                <a class="py-2.7  {{ request()->is('participant/detailTeam') ? 'bg-[#0B0960]/10' : '' }} dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors"
                                    href="{{ route('participant.detailTeam.index') }}">
                                    <div
                                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                        <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-single-02"></i>

                                    </div>
                                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Histori Point</span>
                                </a>
                            </li>
                            @endif

                        </ul>
                    </div>
                </aside>

                <!-- end sidenav -->

                <main class="relative h-full  transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
                    <!-- Navbar -->
                    <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start"
                        navbar-main navbar-scroll="false">
                        <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">

                            <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
                                <div class="flex items-center md:ml-auto md:pr-4">
                                </div>
                                <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
                                    <!-- online builder btn  -->
                                    <!-- <li class="flex items-center">
                            <a class="inline-block px-8 py-2 mb-0 mr-4 text-xs font-bold text-center text-blue-500 uppercase align-middle transition-all ease-in bg-transparent border border-blue-500 border-solid rounded-lg shadow-none cursor-pointer leading-pro hover:-translate-y-px active:shadow-xs hover:border-blue-500 active:bg-[#0B0960] active:hover:text-blue-500 hover:text-blue-500 tracking-tight-rem hover:bg-transparent hover:opacity-75 hover:shadow-none active:text-white active:hover:bg-transparent" target="_blank" href="https://www.creative-tim.com/builder/soft-ui?ref=navbar-dashboard&amp;_ga=2.76518741.1192788655.1647724933-1242940210.1644448053">Online Builder</a>
                          </li> -->
                                    <li class="flex items-center">
                                        <button id="theme-toggle" type="button"
                                            class="block py-2 pr-4 pl-3 text-base font-medium text-gray-500 hover:text-gray-900dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                                            <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5 text-white"
                                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M17.293 10.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                                            </svg>
                                            <svg id="theme-toggle-light-icon" class="hidden w-5 h-5 text-white"
                                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                                    fill-rule="evenodd" clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </li>
                                    <li class="flex items-center">
                                        <a class="block py-2 pr-4 pl-3 text-base font-bold text-white hover:text-gray-900dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5"
                                            onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        @auth('participant')
                                            <form id="logout-form" action="{{ route('participant.logout') }}" method="POST"
                                                style="display: none;">
                                            @endauth
                                            @auth('admin')
                                                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                                                    style="display: none;">
                                                @endauth
                                                @auth
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                        style="display: none;">
                                                    @endauth

                                                    @csrf
                                                </form>

                                    </li>
                                    <li class="flex items-center pl-4 xl:hidden">
                                        <a href="javascript:;" class="block p-0 text-sm text-white transition-all ease-nav-brand"
                                            sidenav-trigger>
                                            <div class="w-4.5 overflow-hidden">
                                                <i
                                                    class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                                                <i
                                                    class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                                                <i class="ease relative block h-0.5 rounded-sm bg-white transition-all"></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>

                    <!-- end Navbar -->

                    <!-- cards -->
                    <div class="w-full px-6 py-6 mx-auto">
                        <!-- row 1 -->
                        <div class="flex flex-wrap -mx-3">
                            <!-- card1 -->
                            <div class="w-full max-w-full px-3 mb-6 ">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                                    <div class="flex-auto p-4">
                                        @yield('content')
                                    </div>
                                </div>
                            </div>

                        </div>


                        <footer class="pt-4">
                            <div class="w-full px-6 mx-auto">
                                <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
                                    <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
                                        <div class="text-sm leading-normal text-center text-slate-500 lg:text-left">
                                            ©
                                            <script>
                                                document.write(new Date().getFullYear() + ",");
                                            </script>
                                            made with <i class="fa fa-heart"></i> by
                                            <a href="https://hmtiudinus.org/" class="font-semibold text-slate-700 dark:text-white"
                                                target="_blank">{{ config('app.name', 'Laravel') }} Team </a>
                                            for a better web.
                                        </div>
                                    </div>
                                    <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">

                                    </div>
                                </div>
                            </div>
                        </footer>
                    </div>
                    <!-- end cards -->
                </main>


                @stack('modals')

            </body>

            <script src="https://cdn.datatables.net/buttons/1.2.1/js/buttons.print.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
            <script>
                var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
                var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

                // Change the icons inside the button based on previous settings
                if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                        '(prefers-color-scheme: dark)').matches)) {
                    themeToggleLightIcon.classList.remove('hidden');
                } else {
                    themeToggleDarkIcon.classList.remove('hidden');
                }

                var themeToggleBtn = document.getElementById('theme-toggle');

                themeToggleBtn.addEventListener('click', function() {

                    // toggle icons inside button
                    themeToggleDarkIcon.classList.toggle('hidden');
                    themeToggleLightIcon.classList.toggle('hidden');

                    // if set via local storage previously
                    if (localStorage.getItem('color-theme')) {
                        if (localStorage.getItem('color-theme') === 'light') {
                            document.documentElement.classList.add('dark');
                            localStorage.setItem('color-theme', 'dark');
                        } else {
                            document.documentElement.classList.remove('dark');
                            localStorage.setItem('color-theme', 'light');
                        }

                        // if NOT set via local storage previously
                    } else {
                        if (document.documentElement.classList.contains('dark')) {
                            document.documentElement.classList.remove('dark');
                            localStorage.setItem('color-theme', 'light');
                        } else {
                            document.documentElement.classList.add('dark');
                            localStorage.setItem('color-theme', 'dark');
                        }
                    }

                });
            </script>
            <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
            <!-- plugin for charts  -->
            <script src="{{ url('/assets/js/plugins/chartjs.min.js') }}" async></script>
            <!-- plugin for scrollbar  -->
            <script src="{{ url('/assets/js/plugins/perfect-scrollbar.min.js') }}" async></script>
            <!-- main script file  -->
            <script src="{{ url('/assets/js/argon-dashboard-tailwind.js?v=1.0.1') }}" async></script>
            <script src="https://code.jquery.com/jquery-3.6.3.min.js"
                integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
            <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
            @stack('scripts')

            </html>
