<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/webp" href="{{ url('img/logo2024.webp') }}">
    {{-- @vite('resources/css/app.css') --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>

<body class="bg-gradient-to-t bg-fixed bg-cover dark:from-[#0B0960] dark:to-[#64AEE5]  from-[#64AEE5] to-[#FFFFFF] ">

    <header>
        <nav class="bg-white/60  border-gray-200 drop-shadow-xl px-4 lg:px-6 py-2.5 dark:bg-[#0B0960]/20 text-center">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="{{ url('/') }}" class="flex items-center">
                    <img src="{{ url('/img/logo2024.webp') }}" class=" h-4 sm:h-9"
                        alt="{{ config('app.name', 'Laravel') }}" />
                    <span
                        class="self-center text-xl text-blue-800 font-semibold whitespace-nowrap dark:text-white">{{ config('app.name', 'Laravel') }}</span>
                </a>
                <div class="flex items-center lg:order-2">
                    @if (Route::has('login'))
                        @auth('participant')
                            <a href="{{ url('/participant') }}"
                                class="text-white bg-gradient-to-t bg-fixed bg-cover from-[#64AEE5] to-[#0B0960] hover:bg-gradient-to-t bg-fixed bg-cover from-[#64AEE5] to-[#0B0960] focus:ring-4 focus:ring-[#0B0960] font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-gradient-to-t bg-fixed bg-cover from-[#64AEE5] to-[#0B0960] dark:hover:bg-gradient-to-t bg-fixed bg-cover from-[#64AEE5] to-[#0B0960] focus:outline-none dark:focus:ring-[#0B0960]">Dashboard</a>
                        @endauth
                        @auth('admin')
                            <a href="{{ url('/admin') }}"
                                class="text-white bg-gradient-to-t bg-fixed bg-cover from-[#64AEE5] to-[#0B0960] hover:bg-gradient-to-t bg-fixed bg-cover from-[#64AEE5] to-[#0B0960] focus:ring-4 focus:ring-[#0B0960] font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-gradient-to-t bg-fixed bg-cover from-[#64AEE5] to-[#0B0960] dark:hover:bg-gradient-to-t bg-fixed bg-cover from-[#64AEE5] to-[#0B0960] focus:outline-none dark:focus:ring-[#0B0960]">Dashboard</a>
                        @endauth
                        @auth('web')
                            <a href="{{ url('/home') }}"
                                class="text-white bg-gradient-to-t bg-fixed bg-cover from-[#64AEE5] to-[#0B0960] hover:bg-gradient-to-t bg-fixed bg-cover from-[#64AEE5] to-[#0B0960] focus:ring-4 focus:ring-[#0B0960] font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-gradient-to-t bg-fixed bg-cover from-[#64AEE5] to-[#0B0960] dark:hover:bg-gradient-to-t bg-fixed bg-cover from-[#64AEE5] to-[#0B0960] focus:outline-none dark:focus:ring-[#0B0960]">Dashboard</a>
                        @endauth
                    @endif
                    <button id="theme-toggle" type="button"
                        class="block py-2 pr-4 pl-3 text-base font-medium text-gray-500 hover:text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                fill-rule="evenodd" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <a href="#eventTitle"
                                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-[#0B0960] lg:p-0 dark:text-white lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Events</a>
                        </li>
                        <li>
                            <a href="#JJGuide"
                                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-[#0B0960] lg:p-0 dark:text-white lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Pedoman
                                Acara</a>
                        </li>
                        <li>
                            <a href="#cp"
                                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-[#0B0960] lg:p-0 dark:text-white lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Kontak</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <aside class="z-20 overflow-hidden bg-center bg-no-repeat bg-cover">
            <div class="p-8 md:p-12 lg:px-16 lg:py-24 ">
                <div class=" text-center sm:text-center">
                    <h2
                        class="lg:text-9xl text-5xl font-extrabold text-gray-800 dark:text-white sm:text-7xl md:text-8xl mb-2">
                        {{ config('app.name', 'Laravel') }}
                    </h2>

                    <div class="mt-4 sm:mt-8 text-center">
                        <div class="flex items-center justify-center px-5 py-5" x-data="beer()"
                            x-init="start()">
                            <div class="text-6xl text-center flex w-full items-center justify-center">
                                <div
                                    class="w-24 mx-1 p-2 bg-white/20 dark:bg-black/20 text-gray-800 dark:text-white rounded-lg">
                                    <div class="font-mono leading-none" x-text="days">00</div>
                                    <div class="font-mono uppercase text-sm leading-none">Days</div>
                                </div>
                                <div
                                    class="w-24 mx-1 p-2 bg-white/20 dark:bg-black/20 text-gray-800 dark:text-white rounded-lg">
                                    <div class="font-mono leading-none" x-text="hours">00</div>
                                    <div class="font-mono uppercase text-sm leading-none">Hours</div>
                                </div>
                                <div
                                    class="w-24 mx-1 p-2 bg-white/20 dark:bg-black/20 text-gray-800 dark:text-white rounded-lg">
                                    <div class="font-mono leading-none" x-text="minutes">00</div>
                                    <div class="font-mono uppercase text-sm leading-none">Minutes</div>
                                </div>
                                <div
                                    class="w-24 mx-1 p-2 bg-white/20 dark:bg-black/20 text-gray-800 dark:text-white rounded-lg">
                                    <div class="font-mono leading-none" x-text="seconds">00</div>
                                    <div class="font-mono uppercase text-sm leading-none">Seconds</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </aside>
    </header>
    <!-- Events -->
    <div class="antialiased w-full h-full text-white font-inter p-10" id="eventTitle">
        <div class="container px-4 mx-auto">
            <div>
                <div id="title" class="text-center my-10">
                    <img src="{{ url('img/event.png') }}" class="mx-auto h-[200px]">
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 justify-evenly gap-10 pt-10">
                    <div id="plan"
                        class="rounded-lg text-center overflow-hidden w-full transform hover:shadow-2xl hover:scale-105 transition duration-200 ease-in">
                        <div id="title" class="w-full py-5">
                            <h2 class="font-bold text-4xl text-gray-800 dark:text-white">Software Fair</h2>
                        </div>
                        <div id="content" class="">
                            <div id="icon" class="my-5">
                                <img src="{{ url('img/software.png') }}" class="mx-auto w-72">
                            </div>
                            <div id="contain"
                                class="leading-8 mb-10 text-lg font-light text-gray-800 dark:text-gray-200">
                                <p>Pameran software dimana para developer memamerkan project mereka. Project yang
                                    dipamerkan dapat berupa aplikasi, website, dan game yang unik.</p>
                                <div id="choose" class="w-full mt-10 px-6">
                                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 justify-evenly gap-3 ">
                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdiNAHbYZ8CjjRa9Gu-Svo5vHL9IJkAQMoxXQ5Pxf_2I4sxEw/viewform"
                                            class="w-full block bg-gradient-to-t bg-fixed bg-cover from-[#64AEE5] to-[#0B0960] font-medium text-md py-4 rounded-xl hover:shadow-lg transition duration-200 ease-in-out hover:bg-[#64AEE5] text-white">Register</a>
                                        <a href="#JJGuide"
                                            class="w-full block bg-gradient-to-t bg-fixed bg-cover from-[#64AEE5] to-[#0B0960] font-medium text-md py-4 rounded-xl hover:shadow-lg transition duration-200 ease-in-out hover:bg-[#64AEE5] text-white">Guideline</a>
                                        <a href="https://docs.google.com/document/d/1oFFStykpQm1atJVTIoPgWV2lW0CD9tD6/edit?usp=share_link&ouid=107520472537277404433&rtpof=true&sd=true"
                                            class="w-full block bg-gradient-to-t bg-fixed bg-cover from-[#64AEE5] to-[#0B0960] font-medium text-md py-4 rounded-xl hover:shadow-lg transition duration-200 ease-in-out hover:bg-[#64AEE5] text-white">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="plan" class="rounded-lg text-center overflow-hidden w-full transform hover:shadow-2xl hover:scale-105 transition duration-200 ease-in">
                        <div id="title" class="w-full py-5">
                            <h2 class="font-bold text-4xl text-gray-800 dark:text-white">Hardware Fair</h2>
                        </div>
                        <div id="content" class="">
                            <div id="icon" class="my-5">
                                <img src="{{ url('img/hardware.png') }}" class="mx-auto w-72">
                            </div>
                            <div id="contain"
                                class="leading-8 mb-10 text-lg font-light text-gray-800 dark:text-gray-200">
                                <p>Pameran hardware jadi pertunjukan dimana developer membuat perangkat keras yang
                                    memiliki fungsi tersendiri tergantung pembuatnya.</p>
                                <div id="choose" class="w-full mt-10 px-6">
                                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 justify-evenly gap-3 ">
                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdiNAHbYZ8CjjRa9Gu-Svo5vHL9IJkAQMoxXQ5Pxf_2I4sxEw/viewform"
                                            class="w-full block bg-gradient-to-t bg-fixed bg-cover from-[#64AEE5] to-[#0B0960] font-medium text-md py-4 rounded-xl hover:shadow-lg transition duration-200 ease-in-out hover:bg-[#64AEE5] text-white">Register</a>
                                        <a href="#JJGuide"
                                            class="w-full block bg-gradient-to-t bg-fixed bg-cover from-[#64AEE5] to-[#0B0960] font-medium text-md py-4 rounded-xl hover:shadow-lg transition duration-200 ease-in-out hover:bg-[#64AEE5] text-white">Guideline</a>
                                        <a href="https://docs.google.com/document/d/1oFFStykpQm1atJVTIoPgWV2lW0CD9tD6/edit?usp=share_link&ouid=107520472537277404433&rtpof=true&sd=true"
                                            class="w-full block bg-gradient-to-t bg-fixed bg-cover from-[#64AEE5] to-[#0B0960] font-medium text-md py-4 rounded-xl hover:shadow-lg transition duration-200 ease-in-out hover:bg-[#64AEE5] text-white">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="plan"
                        class="rounded-lg text-center overflow-hidden w-full transform hover:shadow-2xl hover:scale-105 transition duration-200 ease-in">
                        <div id="title" class="w-full py-5">
                            <h2 class="font-bold text-4xl text-gray-800 dark:text-white">Open Talk</h2>
                        </div>
                        <div id="content" class="">
                            <div id="icon" class="my-5">
                                <img src="{{ url('img/open talk.png') }}" class="mx-auto w-72">
                            </div>
                            <div id="contain"
                                class="leading-8 mb-10 text-lg font-light text-gray-800 dark:text-gray-200">
                                <p>Pada webinar Open Talk akan ada pembicara yang mahir dalam software di perusahan
                                    ternama Indonesia. Jangan sampai ketinggalan ya, daftar sekarang juga.</p>
                                <div id="choose" class="w-full mt-10 px-6">
                                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 justify-evenly gap-3 ">
                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSd-GsDvBt2c4IwbFC0-9GDupZPrqpx1CB2oEZeckXC87iJe5A/viewform"
                                            class="w-full block bg-gradient-to-t bg-fixed bg-cover from-[#64AEE5] to-[#0B0960] font-medium text-md py-4 rounded-xl hover:shadow-lg transition duration-200 ease-in-out hover:bg-[#64AEE5] text-white">Register</a>
                                        <a href="#JJGuide"
                                            class="w-full block bg-gradient-to-t bg-fixed bg-cover from-[#64AEE5] to-[#0B0960] font-medium text-md py-4 rounded-xl hover:shadow-lg transition duration-200 ease-in-out hover:bg-[#64AEE5] text-white">Guideline</a>
                                        <a href="https://docs.google.com/document/d/1Oohy6Ubysns7jKv70LYbzi-Km1p89VhI/edit?usp=share_link&ouid=107520472537277404433&rtpof=true&sd=true"
                                            class="w-full block bg-gradient-to-t bg-fixed bg-cover from-[#64AEE5] to-[#0B0960] font-medium text-md py-4 rounded-xl hover:shadow-lg transition duration-200 ease-in-out hover:bg-[#64AEE5] text-white">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div id="plan"
                        class="rounded-lg text-center overflow-hidden w-full transform hover:shadow-2xl hover:scale-105 transition duration-200 ease-in">
                        <div id="title" class="w-full py-5">
                            <h2 class="font-bold text-4xl text-gray-800 dark:text-white">Registrasi Pengunjung Pameran
                            </h2>
                        </div>
                        <div id="content" class="">
                            <div id="icon" class="my-5">
                                <img src="{{ url('img/Group 1576.webp') }}" class="mx-auto w-72">
                            </div>
                            <div id="contain"
                                class="leading-8 mb-10 text-lg font-light text-gray-800 dark:text-gray-200">
                                <p>Pameran software dimana para developer memamerkan project mereka. Project yang
                                    dipamerkan berupa aplikasi, website, dan game.</p>
                                <div id="choose" class="w-full mt-10 px-6">
                                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 justify-evenly gap-3 ">
                                        <a href="{{ url('register/participant') }}"
                                            class="w-full block bg-gradient-to-t bg-fixed bg-cover from-[#64AEE5] to-[#0B0960] font-medium text-md py-4 rounded-xl hover:shadow-lg transition duration-200 ease-in-out hover:bg-[#64AEE5] text-white">Register</a>
                                        <a href="{{ url('login/participant') }}"
                                            class="w-full block bg-gradient-to-t bg-fixed bg-cover from-[#64AEE5] to-[#0B0960] font-medium text-md py-4 rounded-xl hover:shadow-lg transition duration-200 ease-in-out hover:bg-[#64AEE5] text-white">Login</a>
                                        <a href="#JJGuide"
                                            class="w-full block bg-gradient-to-t bg-fixed bg-cover from-[#64AEE5] to-[#0B0960] font-medium text-md py-4 rounded-xl hover:shadow-lg transition duration-200 ease-in-out hover:bg-[#64AEE5] text-white">Guideline</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- JJ&Guideline -->
    <div class="antialiased w-full h-full text-white font-inter p-10" id="JJGuide">
        <div class="container px-4 mx-auto">
            <div>
                <div id="title" class="text-center my-10">
                    <img src="{{ url('img/juklak juknis.png') }}" class="mx-auto h-[200px]">
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 justify-evenly gap-10 pt-10 ">
                    <div class="rounded-lg text-center overflow-hidden w-full transform hover:shadow-2xl hover:scale-105 transition duration-200 ease-in"
                        x-data="loadEmployees()">

                        <div class="mt-4 grid grid-cols-1">
                            <template x-for="item in filteredEmployees" :key="item">
                                <div>
                                    <div id="title" class="w-full py-2">
                                        <h2 class="font-bold text-4xl text-gray-800 dark:text-white">Software &
                                            Hardware Fair</h2>
                                    </div>
                                    <div id="content" class="">
                                        <div id="contain"
                                            class="text-lg font-light text-gray-800 dark:text-gray-200">
                                            <p class="text-start lg:px-10 px-2 py-2 md:min-h-[65rem] lg:min-h-[30rem]"
                                                x-html="item.deskripsi.replaceAll('\n', '<br>') + ' '"> </p>
                                            <div id="choose" class="w-full mt-2 px-6">
                                                <a href="https://docs.google.com/document/d/1W6GEeH3v74wmvx_LeOaz2q6ZroAnkt1LKqm_D59kNMk/edit"
                                                    target="_blank"
                                                    class="w-full block bg-gradient-to-t bg-fixed bg-cover from-[#64AEE5] to-[#0B0960] font-medium text-md py-4 rounded-xl hover:shadow-lg transition duration-200 ease-in-out hover:bg-[#64AEE5] text-white">Download
                                                    Guideline</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>

                        <div class="w-full mx-auto py-6 px-3 flex justify-between items-center"
                            x-show="pageCount() > 1">
                            <!--First Button-->
                            <button x-on:click="viewPage(0)" :disabled="pageNumber == 0"
                                :class="{ 'disabled cursor-not-allowed text-blue-600': pageNumber == 0 }">
                                <svg class="h-8 w-8 text-[#0B0960] dark:text-white" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="19 20 9 12 19 4 19 20"></polygon>
                                    <line x1="5" y1="19" x2="5" y2="5"></line>
                                </svg>
                            </button>

                            <!--Previous Button-->
                            <button x-on:click="prevPage" :disabled="pageNumber == 0"
                                :class="{ 'disabled cursor-not-allowed text-blue-600': pageNumber == 0 }">
                                <svg class="h-8 w-8 text-[#0B0960] dark:text-white" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="15 18 9 12 15 6"></polyline>
                                </svg>
                            </button>

                            <!-- Display page numbers -->
                            <template x-for="(page,index) in pages()" :key="index">
                                <button class="px-3 py-2 rounded"
                                    :class="{
                                        'bg-[#0B0960] dark:bg-white/80 dark:text-[#0B0960] text-white font-bold': index ===
                                            pageNumber
                                    }"
                                    type="button" x-on:click="viewPage(index)">
                                    <span x-text="index+1"></span>
                                </button>
                            </template>

                            <!--Next Button-->
                            <button x-on:click="nextPage" :disabled="pageNumber >= pageCount() - 1"
                                :class="{ 'disabled cursor-not-allowed text-blue-600': pageNumber >= pageCount() - 1 }">
                                <svg class="h-8 w-8 text-[#0B0960] dark:text-white" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </button>

                            <!--Last Button-->
                            <button x-on:click="viewPage(Math.ceil(total/size)-1)"
                                :disabled="pageNumber >= pageCount() - 1"
                                :class="{ 'disabled cursor-not-allowed text-blue-600': pageNumber >= pageCount() - 1 }">
                                <svg class="h-8 w-8 text-[#0B0960] dark:text-white" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="5 4 15 12 5 20 5 4"></polygon>
                                    <line x1="19" y1="5" x2="19" y2="19"></line>
                                </svg>
                            </button>
                        </div>

                    </div>
                    <div class="rounded-lg text-center overflow-hidden w-full transform hover:shadow-2xl hover:scale-105 transition duration-200 ease-in"
                        x-data="loadOpens()">

                        <div class="mt-4 grid grid-cols-1">
                            <template x-for="item in filteredOpens" :key="item">
                                <div>
                                    <div id="title" class="w-full py-2">
                                        <h2 class="font-bold text-4xl text-gray-800 dark:text-white">Open Talk</h2>
                                    </div>
                                    <div id="content" class="">
                                        <div id="contain"
                                            class="text-lg font-light text-gray-800 dark:text-gray-200">
                                            <p class="text-start lg:px-10 px-2 py-2 md:min-h-[65rem] lg:min-h-[30rem]"
                                                x-html="item.deskripsi.replaceAll('\n', '<br>') + ' '"> </p>
                                            {{-- <div id="choose" class="w-full mt-2 px-6">
                                                <a href="https://docs.google.com/document/d/1Oohy6Ubysns7jKv70LYbzi-Km1p89VhI/edit?usp=share_link&ouid=107520472537277404433&rtpof=true&sd=true"
                                                    target="_blank"
                                                    class="w-full block bg-gradient-to-t bg-fixed bg-cover from-[#64AEE5] to-[#0B0960] font-medium text-md py-4 rounded-xl hover:shadow-lg transition duration-200 ease-in-out hover:bg-[#64AEE5] text-white">Download
                                                    Guideline</a>
                                            </div> --}}
                                            <br>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>

                        <div class="w-full  mx-auto py-6 px-3 flex justify-between items-center"
                            x-show="pageCount() > 1">
                            <!--First Button-->
                            <button x-on:click="viewPage(0)" :disabled="pageNumber == 0"
                                :class="{ 'disabled cursor-not-allowed text-blue-600': pageNumber == 0 }">
                                <svg class="h-8 w-8 text-[#0B0960] dark:text-white" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="19 20 9 12 19 4 19 20"></polygon>
                                    <line x1="5" y1="19" x2="5" y2="5"></line>
                                </svg>
                            </button>

                            <!--Previous Button-->
                            <button x-on:click="prevPage" :disabled="pageNumber == 0"
                                :class="{ 'disabled cursor-not-allowed text-blue-600': pageNumber == 0 }">
                                <svg class="h-8 w-8 text-[#0B0960] dark:text-white" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="15 18 9 12 15 6"></polyline>
                                </svg>
                            </button>

                            <!-- Display page numbers -->
                            <template x-for="(page,index) in pages()" :key="index">
                                <button class="px-3 py-2 rounded"
                                    :class="{
                                        'bg-[#0B0960] dark:bg-white/80 dark:text-[#0B0960] text-white font-bold': index ===
                                            pageNumber
                                    }"
                                    type="button" x-on:click="viewPage(index)">
                                    <span x-text="index+1"></span>
                                </button>
                            </template>

                            <!--Next Button-->
                            <button x-on:click="nextPage" :disabled="pageNumber >= pageCount() - 1"
                                :class="{ 'disabled cursor-not-allowed text-blue-600': pageNumber >= pageCount() - 1 }">
                                <svg class="h-8 w-8 text-[#0B0960] dark:text-white" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </button>

                            <!--Last Button-->
                            <button x-on:click="viewPage(Math.ceil(total/size)-1)"
                                :disabled="pageNumber >= pageCount() - 1"
                                :class="{ 'disabled cursor-not-allowed text-gray-600': pageNumber >= pageCount() - 1 }">
                                <svg class="h-8 w-8 text-[#0B0960] dark:text-white" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="5 4 15 12 5 20 5 4"></polygon>
                                    <line x1="19" y1="5" x2="19" y2="19"></line>
                                </svg>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pembicara -->
    <div class="antialiased w-full h-full text-white font-inter p-10">
        <div class="container px-4 mx-auto">
            <div>
                <div id="title" class="text-center my-10">
                    <img src="{{ url('img/pembicara.png') }}" class="mx-auto h-[200px]">
                </div>
                <div class="rounded-lg text-center overflow-hidden w-full transform transition duration-200 ease-in"
                    x-data="loadEmployees()">
                    <img src="{{ url('img/human.png') }}" class="mx-auto h-[400px]">
                </div>
            </div>
        </div>
    </div>

    <!-- Sponsor -->
    <div class="antialiased w-full h-full text-white font-inter p-10">
        <div class="container px-4 mx-auto">
            <div>
                <div id="title" class="text-center my-10">
                    <img src="{{ url('img/sponsor 1.png') }}" class="mx-auto h-[200px]">
                </div>
                <div class="rounded-lg text-center overflow-hidden w-full transform transition duration-200 ease-in"
                    x-data="loadEmployees()">
                    <lottie-player class="mx-auto w-5/6"
                        src="https://assets5.lottiefiles.com/packages/lf20_udfh8lw8.json" background="transparent"
                        speed="1" loop autoplay></lottie-player>
                </div>
            </div>
        </div>
    </div>


    <footer class="p-4 bg-white/60 sm:p-6 dark:bg-[#0B0960]/10">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="{{ url('') }}" class="flex items-center">
                    <img src="{{ url('/img/logo2024.webp') }}" class="mr-3 h-6 sm:h-9"
                        alt="{{ config('app.name', 'Laravel') }}" />
                    <span
                        class="self-center text-2xl text-gray-800 font-semibold whitespace-nowrap dark:text-white">{{ config('app.name', 'Laravel') }}</span>
                </a>
                <p class="my-3 text-gray-800 dark:text-white" id="cp">Untuk informasi seputar HMTI UDINUS,
                    silahkan cek sosial media di bawah ini.</p>
                <div class="flex mt-4 space-x-6 sm:mt-0">
                    <a href="https://www.facebook.com/hmti.udinus/"
                        class="text-gray-500 hover:text-[#0B0960] dark:hover:text-blue-200 dark:text-white p-4 border dark:border-white border-gray-500 rounded-full">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="https://www.instagram.com/hmtiudinus/?hl=id"
                        class="text-gray-500 hover:text-[#0B0960] dark:hover:text-blue-200 dark:text-white p-4 border dark:border-white border-gray-500 rounded-full">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Instagram page</span>
                    </a>
                    <a href="https://twitter.com/hmtiudinus"
                        class="text-gray-500 hover:text-[#0B0960] dark:hover:text-blue-200 dark:text-white p-4 border dark:border-white border-gray-500 rounded-full">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                        <span class="sr-only">Twitter page</span>
                    </a>

                    <a href="https://twitter.com/hmtiudinus"
                        class="text-gray-500 hover:text-[#0B0960] dark:hover:text-blue-200 dark:text-white p-4 border dark:border-white border-gray-500 rounded-full">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"
                            aria-labelledby="title" aria-describedby="desc" role="img"
                            xmlns:xlink="http://www.w3.org/1999/xlink" stroke="currentColor">
                            <path data-name="layer1"
                                d="M49.539 12H14.461A12.4 12.4 0 0 0 2 24.327v17.346A12.4 12.4 0 0 0 14.461 54h35.078A12.4 12.4 0 0 0 62 41.673V24.327A12.4 12.4 0 0 0 49.539 12z"
                                fill="none" stroke-linecap="round" stroke-miterlimit="20" stroke-width="2"
                                stroke-linejoin="round"></path>
                            <path data-name="layer2"
                                d="M41.111 33.844L24.7 41.585a.658.658 0 0 1-.938-.585V25.031a.659.659 0 0 1 .956-.581l16.407 8.225a.649.649 0 0 1-.014 1.169z"
                                fill="none" stroke-linecap="round" stroke-miterlimit="20" stroke-width="2"
                                stroke-linejoin="round"></path>
                        </svg>
                        <span class="sr-only">Youtube span</span>
                    </a>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-2 md:flex md:justify-between">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Contact Person</h2>
                    <ul class="text-gray-600 dark:text-white">
                        <li class="mb-4">
                            <a href="https://wa.me/6281393689702" target="_blank"
                                class="hover:underline">Mustafid</a>
                        </li>
                        <li>
                            <a href="https://wa.me/62895325099678" target="_blank"
                                class="hover:underline">Dini</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Sponsorship</h2>
                    <ul class="text-gray-600 dark:text-white">
                        <li class="mb-4">
                            <a href="https://wa.me/6281316593105" target="_blank" class="hover:underline ">Tiar</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Media Partner</h2>
                    <ul class="text-gray-600 dark:text-white">
                        <li class="mb-4">
                            <a href="https://wa.me/62895330234885" target="_blank" class="hover:underline ">Alfina</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
            <div>
                <span class="text-sm text-gray-500 text-center dark:text-white">© 2024 <a href="{{ url('') }}"
                        class="hover:underline">{{ config('app.name', 'Laravel') }}™</a>. All Rights Reserved.
                </span>
            </div>
        </div>
    </footer>

    <script>
        function beer() {
            return {
                seconds: '00',
                minutes: '00',
                hours: '00',
                days: '00',
                distance: 0,
                countdown: null,
                beerTime: new Date('April 22, 2024 00:00:00').getTime(),
                now: new Date().getTime(),
                start: function() {
                    this.countdown = setInterval(() => {
                        // Calculate time
                        this.now = new Date().getTime();
                        this.distance = this.beerTime - this.now;
                        // Set Times
                        this.days = this.padNum(Math.floor(this.distance / (1000 * 60 * 60 * 24)));
                        this.hours = this.padNum(Math.floor((this.distance % (1000 * 60 * 60 * 24)) / (1000 *
                            60 * 60)));
                        this.minutes = this.padNum(Math.floor((this.distance % (1000 * 60 * 60)) / (1000 *
                            60)));
                        this.seconds = this.padNum(Math.floor((this.distance % (1000 * 60)) / 1000));
                        // Stop
                        if (this.distance < 0) {
                            clearInterval(this.countdown);
                            this.days = '00';
                            this.hours = '00';
                            this.minutes = '00';
                            this.seconds = '00';
                        }
                    }, 100);
                },
                padNum: function(num) {
                    var zero = '';
                    for (var i = 0; i < 2; i++) {
                        zero += '0';
                    }
                    return (zero + num).slice(-2);
                }
            }
        }
        // Dark Theme
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
        // Pageloader
        setTimeout(function() {
            document.getElementById("page-loader").classList.add('hidden');
        }, 1000);

        var sourceData = [{
                id: "1",
                deskripsi: "<b>Ketentuan Umum</b><br>• Silahkan mendaftar melalui form yang sudah disediakan.\n• Isi form pendaftaran dengan baik.\n• Setelah developer selesai mengisi form pendaftaran, akan diarahkan menuju ke halaman telah mendaftar.<br>• Silahkan cek email anda yang digunakan tadi untuk mendaftar dikarenakan di dalam email tersebut terdapat perintah untuk membayar biaya pendaftaran. <br>• Untuk batas pendaftaran pada tanggal 13 April 2024 <br>• Setelah mendaftar diharapkan developer dapat segera membayar biaya pendaftaran. Untuk batas terakhir pembayaran yaitu pada tanggal 14 April 2024. <br> • Untuk info selanjutnya akan dihubungi via email / Whatsapp.",
            },
            {
                id: "2",
                deskripsi: "<b>Tata Cara Pembayaran</b><br>• Setelah melakukan pendaftaran/registrasi melalui web, tim developer dapat melakukan pembayaran melalui :<br>No. Rek  : 1360031021402 (A.n Rahmadini Cahya Demora)<br>Bank : Mandiri<br> Dana  : 0895325099678 (A.n Rahmadini Cahya Demora)<br> ShopeePay : 0895325099678 (A.n Rahmadini Cahya Demora)<br> Biaya Pendaftaran : Rp60.000,00<br> • Untuk konfirmasi pembayaran sertakan bukti pembayaran dan silahkan menghubungi contact person di bawah ini :<br>Mustafid	: 081393689702<br> Dini	: 0895325099678<br> • Untuk info selanjutnya akan dihubungi via email / Whatsapp.",
            },
            // {
            //   id: "3",
            //   deskripsi: "• Untuk batas terakhir pemberkasan dan pembayaran yaitu pada tanggal 18 Mei 2022.<br>• Setelah melakukan pendaftaran/ registrasi melalui web,tim developer dapat melakukan pembayaran agar bisa login kedalamwebsite forum.<br> No Rekening : 1840002202362 (A.n NAUFAL IKSHAM)<br> Bank : Mandiri<br> DANA : 082243090750 (A.n NAUFAL IKSHAM)<br> OVO : 082243090750 (A.n NAUFAL IKSHAM)<br> Biaya Pendaftaran : Rp15.000,00• Untuk konfirmasi pembayaran sertakan bukti pembayaran dan silahkan menghubungi contact person di bawah ini :<br> Deo : 089659615260<br> Naufal : 082243090750<br>• Untuk informasi lebih lengkap, silahkan download Juklak Juknis ini.<br>",
            // },
        ];
        var sourceDataOT = [{
                id: "1",
                deskripsi: "<b>Ketentuan Umum</b><br>• Pada setiap stand pengunjung akan diberikan challenge untuk mendapatkan kupon yang digunakan untuk bermain mini games• Pengunjung diberikan kebebasan dalam menentukan urutan stand yang akan dikunjungi.<br>• Pengunjung <b>diwajibkan</b> mengunjungi setiap stand yang telah tersedia.<br>• Pada setiap stand, pengunjung akan diberikan challenge untuk mendapatkan poin.<br>",
            },
            {
                id: "2",
                deskripsi: "• Disediakan 3 barcode pada setiap stand, yaitu :<br>&nbsp;Barcode benar, di-scan bagi pengunjung yang menjawab challenge dengan jawaban tepat.<br>&nbsp;Barcode salah, di-scan bagi pengunjung yang menjawab challenge dengan jawaban kurang tepat.<br>&nbsp;Barcode feedback, di-scan bagi pengunjung untuk memberikan penilaian pada developer.<br>• Pengunjung <b>wajib</b> memberikan feedback setelah menyelesaikan challenge dari developer dengan cara melakukan scan pada <b>Barcode feedback</b>.• Pengunjung dapat melanjutkan ke stand selanjutnya apabila telah memberikan feedback kepada developer sebelumnya.<br>• Total poin yang dikumpulkan oleh pengunjung dapat dilihat melalui akun masing-masing pengunjung.<br>• Poin dapat ditukarkan dengan berbagai merchandise menarik.<br>• Pengumpulan kupon berlaku untuk memainkan mini games yang membutuhkan 5 kupon.",
            },
            {
                id: "3",
                deskripsi: "<b>Mini Games & Reward</b><br>• Mini games yang disediakan oleh kami adalah games type racer menggunakan situs monkeytype. Mini games dapat dimainkan dengan syarat harus mengumpulkan terlebih dahulu 5 kupon yang diperoleh dari 5 stand berbeda yang dikunjungi. Hadiah yang didapatkan para pemain mini games berdasar dari seberapa banyak WPM (word per minute) yang diperoleh oleh pemain. Tingkatan hadiah nya pun bervariasi dari snack, hingga merchandise seperti botol minum special edition Hitech 2024.<br>",
            },
        ];

        function loadEmployees() {
            return {
                search: "",
                pageNumber: 0,
                size: 1,
                total: "",
                myForData: sourceData,

                get filteredEmployees() {
                    const start = this.pageNumber * this.size,
                        end = start + this.size;

                    if (this.search === "") {
                        this.total = this.myForData.length;
                        return this.myForData.slice(start, end);
                    }

                    //Return the total results of the filters
                    this.total = this.myForData.filter((item) => {
                        return item.deskripsi
                            .toLowerCase()
                            .includes(this.search.toLowerCase());
                    }).length;

                    //Return the filtered data
                    return this.myForData
                        .filter((item) => {
                            return item.deskripsi
                                .toLowerCase()
                                .includes(this.search.toLowerCase());
                        })
                        .slice(start, end);
                },

                //Create array of all pages (for loop to display page numbers)
                pages() {
                    return Array.from({
                        length: Math.ceil(this.total / this.size),
                    });
                },

                //Next Page
                nextPage() {
                    this.pageNumber++;
                },

                //Previous Page
                prevPage() {
                    this.pageNumber--;
                },

                //Total number of pages
                pageCount() {
                    return Math.ceil(this.total / this.size);
                },

                //Return the start range of the paginated results
                startResults() {
                    return this.pageNumber * this.size + 1;
                },

                //Return the end range of the paginated results
                endResults() {
                    let resultsOnPage = (this.pageNumber + 1) * this.size;

                    if (resultsOnPage <= this.total) {
                        return resultsOnPage;
                    }

                    return this.total;
                },

                //Link to navigate to page
                viewPage(index) {
                    this.pageNumber = index;
                },
            };
        }

        function loadOpens() {
            return {
                search: "",
                pageNumber: 0,
                size: 1,
                total: "",
                myForData: sourceDataOT,

                get filteredOpens() {
                    const start = this.pageNumber * this.size,
                        end = start + this.size;

                    if (this.search === "") {
                        this.total = this.myForData.length;
                        return this.myForData.slice(start, end);
                    }

                    //Return the total results of the filters
                    this.total = this.myForData.filter((item) => {
                        return item.deskripsi
                            .toLowerCase()
                            .includes(this.search.toLowerCase());
                    }).length;

                    //Return the filtered data
                    return this.myForData
                        .filter((item) => {
                            return item.deskripsi
                                .toLowerCase()
                                .includes(this.search.toLowerCase());
                        })
                        .slice(start, end);
                },

                //Create array of all pages (for loop to display page numbers)
                pages() {
                    return Array.from({
                        length: Math.ceil(this.total / this.size),
                    });
                },

                //Next Page
                nextPage() {
                    this.pageNumber++;
                },

                //Previous Page
                prevPage() {
                    this.pageNumber--;
                },

                //Total number of pages
                pageCount() {
                    return Math.ceil(this.total / this.size);
                },

                //Return the start range of the paginated results
                startResults() {
                    return this.pageNumber * this.size + 1;
                },

                //Return the end range of the paginated results
                endResults() {
                    let resultsOnPage = (this.pageNumber + 1) * this.size;

                    if (resultsOnPage <= this.total) {
                        return resultsOnPage;
                    }

                    return this.total;
                },

                //Link to navigate to page
                viewPage(index) {
                    this.pageNumber = index;
                },
            };
        }
    </script>
</body>

</html>
