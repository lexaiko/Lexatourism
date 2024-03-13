<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Lexatourism</title>
    <link rel="icon" type="image/png" href="img/bemkm.png"
        class="rounded-lg">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-200">
    {{-- Navbar Start --}}
    <div class="navbar">
        <nav class="bg-white border-gray-200 dark:bg-gray-900 bg-opacity-0">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    {{-- <img src="/img/bemkm.png" class="h-8" alt="BEM Logo" />
            <img src="/img/bem.png" class="h-8" alt="Kabinet Logo" /> --}}
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Lexatourism</span>
                </a>
                <div class="flex md:order-2">
                    <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search"
                        aria-expanded="false"
                        class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 me-1">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                    <div class="relative hidden md:block">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <span class="sr-only">Search icon</span>
                        </div>
                        {{-- <form action="{{ route('search') }}" method="GET"> --}}
                        <input type="text" name="query" id="search-navbar"
                            class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search...">
                        </form>
                    </div>
                    <button data-collapse-toggle="navbar-search" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-search" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
                    <div class="relative mt-3 md:hidden">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="text" id="search-navbar"
                            class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search...">
                    </div>
                    <ul
                        class="flex flex-col p-4 md:p-[10px] mt-4 font-medium border border-gray-400 rounded-xl bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white md:bg-opacity-30 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li class="pl-3">
                            <a href="#" id="multiLevelDropdownButton" data-dropdown-toggle="multi-dropdown"
                                class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-white md:p-0 md:dark:text-blue-500"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Tour</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                        </li>

                        <li class="pr-3">
                            <a href="#"
                                class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    {{-- Navbar end --}}
    {{-- background top --}}
    <img src="img/herosection.png" alt=""
        class="absolute inset-0 w-full h-full object-cover -z-50 rounded-b-lg">
    {{-- end of background top --}}

    <div class="container mx-auto px-[30px]">
        {{-- hero section start --}}
        <div class="herosection grid justify-center text-center">
            <h1 class="text-white text-6xl font-semibold mt-[150px]">Extraordinary natural and <br>culture charm</h1>
            <p class="text-white mt-3">Exploring Indonesia is an unfogettable adventure.</p>


            <div class="buttongroup mt-5">
                <div class="inline-flex rounded-md shadow-sm" role="group">
                    <button type="button"
                        class="inline-flex items-center px-6 py-3 text-sm font-medium text-white bg-white border bg-opacity-20 border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                        <svg class="w-3 h-3 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                        </svg>
                        Date
                    </button>
                    <button type="button"
                        class="inline-flex items-center px-6 py-3 text-sm font-medium text-white bg-opacity-20 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                        <svg class="w-3 h-3 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 12.25V1m0 11.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M4 19v-2.25m6-13.5V1m0 2.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M10 19V7.75m6 4.5V1m0 11.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5ZM16 19v-2" />
                        </svg>
                        Budget
                    </button>
                    <button type="button"
                        class="inline-flex items-center px-6 py-3 text-sm font-medium text-white bg-opacity-20 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                        <svg class="w-3 h-3 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 12.25V1m0 11.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M4 19v-2.25m6-13.5V1m0 2.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M10 19V7.75m6 4.5V1m0 11.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5ZM16 19v-2" />
                        </svg>
                        Guest
                    </button>
                    <button type="button"
                        class="inline-flex items-center px-6 py-3 text-sm font-medium text-grey-500 bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                        <svg class="w-3 h-3 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z" />
                            <path
                                d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                        </svg>
                        Search
                    </button>
                </div>
            </div>
            <div class="cardgroup flex flex-col-4 gap-8 mt-[250px]">
                <div class="cards">
                    <div
                        class="max-w-sm rounded-lg overflow-hidden shadow-lg bg-white transition-transform duration-300 transform hover:scale-105">
                        <div class="px-10 py-3">
                            <div class="font-bold text-xl mb-2">50m+</div>
                            <p class="text-gray-700 text-base">Total Customer</p>
                        </div>
                    </div>
                </div>
                <div class="cards">
                    <div
                        class="max-w-sm rounded-lg overflow-hidden shadow-lg bg-white transition-transform duration-300 transform hover:scale-105">
                        <div class="px-10 py-3">
                            <div class="font-bold text-xl mb-2">09+</div>
                            <p class="text-gray-700 text-base">Years of Experience</p>
                        </div>
                    </div>
                </div>
                <div class="cards">
                    <div
                        class="max-w-sm rounded-lg overflow-hidden shadow-lg bg-white transition-transform duration-300 transform hover:scale-105">
                        <div class="px-10 py-3">
                            <div class="font-bold text-xl mb-2">12K</div>
                            <p class="text-gray-700 text-base">Total Destinations</p>
                        </div>
                    </div>
                </div>
                <div class="cards">
                    <div
                        class="max-w-sm rounded-lg overflow-hidden shadow-lg bg-white transition-transform duration-300 transform hover:scale-105">
                        <div class="px-10 py-3">
                            <div class="font-bold text-xl mb-2">5.0</div>
                            <p class="text-gray-700 text-base">Avarage Rating</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- hero section end --}}
        <div class="section mt-[100px]">
            {{-- text tour start --}}
            <p class="text-gray-500 text-xl">Best Location</p>
            <div class="bungkus grid grid-cols-2 gap-4 mt-3">
                <div class="kiri col-span-1">
                    <h1 class="text-gray-800 text-4xl font-semibold">Indonesian Tourism</h1>
                </div>
                <div class="kanan col-span-1">
                    <p class="text-gray-500 text-xl px-8">Extraordinary natural beauty, enjoy the rich culture, and
                        experience the friendliness of the local people</p>
                </div>
            </div>
        </div>
                {{-- text tour end --}}

            {{-- start of gallery --}}
            <div class="bungkus">
                <div class="grid grid-cols-8 gap-4 mt-[80px] border">
                    <div class="col-span-5 h-[300px] relative">
                        <img src="img/bromo.png" alt="" class="w-full h-full object-cover rounded-xl">
                        <div class="bungkus absolute bottom-5 left-0">
                            <p class="text-gray-300 text-xl px-8">Bromo, East Java</p>
                            <p class="text-gray-100 text-xl px-8">Bromo Tengger Tour</p>
                        </div>
                    </div>
                    <div class="col-span-3 relative">
                        <img src="img/bali.png" alt="" class="w-full h-full object-cover rounded-xl">
                        <div class="bungkus absolute bottom-5 left-0">
                            <p class="text-gray-300 text-xl px-8">Denpasar, Bali</p>
                            <p class="text-gray-100 text-xl px-8">Bali Beach Tourism</p>
                        </div>
                        <!-- Tambahkan kolom-kolom lainnya sesuai kebutuhan -->
                    </div>
                </div>

                <div class="grid grid-cols-8 gap-4 mt-[80px] border">
                    <div class="col-span-3 relative">
                        <img src="img/lampung.png" alt="" class="w-full h-full object-cover rounded-xl">
                        <div class="bungkus absolute bottom-5 left-0">
                            <p class="text-gray-300 text-xl px-8">Lampung, South Sumatera</p>
                            <p class="text-gray-100 text-xl px-8">Sumatera Tourim</p>
                        </div>
                        <!-- Tambahkan kolom-kolom lainnya sesuai kebutuhan -->
                    </div>
                    <div class="col-span-5 h-[300px] relative">
                        <img src="img/borobudur.png" alt="" class="w-full h-full object-cover rounded-xl">
                        <div class="bungkus absolute bottom-5 left-0">
                            <p class="text-gray-300 text-xl px-8">Yogyakarta, Central Java</p>
                            <p class="text-gray-100 text-xl px-8">Borodudur Temple Tour</p>
                        </div>
                    </div>
                </div>
            </div>
                {{-- end of gallery --}}

                <div class="grid grid-cols-8 gap-4 mt-[80px]">
                    <div class="col-span-4 h-[600px] relative">
                        <img src="img/tour.png" alt="" class="w-full h-full object-cover rounded-xl">
                        <div class="bottom-5 absolute inset-x-0 grid place-items-center">
                            <div class="buttongroup mt-5">
                                <div class="inline-flex rounded-md shadow-sm" role="group">
                                    <button type="button"
                                        class="inline-flex items-center px-6 py-3 text-sm font-medium text-white bg-white border bg-opacity-20 border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                                        <svg class="w-3 h-3 me-2" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                                        </svg>
                                        Date
                                    </button>
                                    <button type="button"
                                        class="inline-flex items-center px-6 py-3 text-sm font-medium text-white bg-opacity-20 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                                        <svg class="w-3 h-3 me-2" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M4 12.25V1m0 11.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M4 19v-2.25m6-13.5V1m0 2.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M10 19V7.75m6 4.5V1m0 11.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5ZM16 19v-2" />
                                        </svg>
                                        Budget
                                    </button>
                                    <button type="button"
                                        class="inline-flex items-center px-6 py-3 text-sm font-medium text-white bg-opacity-20 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                                        <svg class="w-3 h-3 me-2" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M4 12.25V1m0 11.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M4 19v-2.25m6-13.5V1m0 2.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M10 19V7.75m6 4.5V1m0 11.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5ZM16 19v-2" />
                                        </svg>
                                        Guest
                                    </button>
                                    <button type="button"
                                        class="inline-flex items-center px-6 py-3 text-sm font-medium text-grey-500 bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                                        <svg class="w-3 h-3 me-2" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z" />
                                            <path
                                                d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                                        </svg>
                                        Search
                                    </button>
                                </div>
                            </div>
                            <div class="teks text-center mt-3">
                                <p class="text-gray-100 text-base px-8">Embark on a journey to find your dream
                                    destination, where adventure and relaxation await, creating unforgettable memories
                                    along the way</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-4 border">
                        <div class="bungkus">
                            <p class="text-gray-500 text-xl px-8">How it works</p>
                            <h1 class="text-gray-800 text-4xl px-8 font-semibold">One click for you</h1>


                            <div class="grid gap-3 rounded-md shadow-sm mt-5" role="group">
                                <button type="button"
                                    class="block px-4 py-4 text-left text-gray-900 bg-transparent border  rounded-lg hover:bg-white hover:text-black focus:z-10 focus:ring-2 focus:ring-white focus:bg-white focus:text-black active:bg-white active:text-gray-900 dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:bg-gray-700 dark:active:bg-white dark:active:text-gray-900">
                                    <div class="bungkuses grid grid-cols-10">
                                        <div class="bungkus col-span-1 flex justify-center items-center">
                                            <div class="hadeh p-2 bg-gray-200 rounded-lg">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-width="2"
                                                        d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="bungkus col-span-9">
                                            <h1 class="text-lg font-semibold text-gray-800">Find your destination</h1>
                                            <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis quos
                                                quasi tempore quisquam aperiam est, </p>
                                        </div>
                                    </div>
                                </button>
                                <button type="button"
                                    class="block px-4 py-4 text-left text-gray-900 bg-transparent border  rounded-lg hover:bg-white hover:text-black focus:z-10 focus:ring-2 focus:ring-white focus:bg-white focus:text-black active:bg-white active:text-gray-900 dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:bg-gray-700 dark:active:bg-white dark:active:text-gray-900">
                                    <div class="bungkuses grid grid-cols-10">
                                        <div class="bungkus col-span-1 flex justify-center items-center">
                                            <div class="hadeh p-2 bg-gray-200 rounded-lg">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M9 17h6l3 3v-3h2V9h-2M4 4h11v8H9l-3 3v-3H4V4Z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="bungkus col-span-9">
                                            <h1 class="text-lg font-semibold text-gray-800">Book a ticket</h1>
                                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates ut
                                                omnis quisquam optio magni? </p>
                                        </div>
                                    </div>
                                </button>
                                <button type="button"
                                    class="block px-4 py-4 text-left text-gray-900 bg-transparent border  rounded-lg hover:bg-white hover:text-black focus:z-10 focus:ring-2 focus:ring-white focus:bg-white focus:text-black active:bg-white active:text-gray-900 dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:bg-gray-700 dark:active:bg-white dark:active:text-gray-900">
                                    <div class="bungkuses grid grid-cols-10">
                                        <div class="bungkus col-span-1 flex justify-center items-center">
                                            <div class="hadeh p-2 bg-gray-200 rounded-lg">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-width="2"
                                                        d="M8 7V6a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1M3 18v-7a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="bungkus col-span-9">
                                            <h1 class="text-lg font-semibold text-gray-800">Make Payment</h1>
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem
                                                voluptates magnam laborum ullam, non dolorem.</p>
                                        </div>
                                    </div>
                                </button>
                                <button type="button"
                                    class="block px-4 py-4 text-left text-gray-900 bg-transparent border  rounded-lg hover:bg-white hover:text-black focus:z-10 focus:ring-2 focus:ring-white focus:bg-white focus:text-black active:bg-white active:text-gray-900 dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:bg-gray-700 dark:active:bg-white dark:active:text-gray-900">
                                    <div class="bungkuses grid grid-cols-10">
                                        <div class="bungkus col-span-1 flex justify-center items-center">
                                            <div class="hadeh p-2 bg-gray-200 rounded-lg">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-3 5h3m-6 0h.01M12 16h3m-6 0h.01M10 3v4h4V3h-4Z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="bungkus col-span-9">
                                            <h1 class="text-lg font-semibold text-gray-800">Explore destination</h1>
                                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam
                                                deserunt consectetur tempore officia aspernatur vel?</p>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                        <!-- Tambahkan kolom-kolom lainnya sesuai kebutuhan -->
                    </div>
                </div>
                {{-- text tour start --}}
                <div class="teks mt-[50px]">
                    <p class="text-gray-500 text-xl">Tour Packages</p>
                    <div class="bungkus grid grid-cols-2 gap-4 mt-3">
                        <div class="kiri col-span-1">
                            <h1 class="text-gray-800 text-4xl font-semibold">Our tourist destination</h1>
                        </div>
                        <div class="kanan col-span-1">
                            <p class="text-gray-500 text-xl px-8">Our tourist destination offer an unarivaled blend of
                                nature beauty and culture richness</p>
                        </div>
                    </div>
                </div>
                    {{-- text tour end --}}
                    {{-- Card start --}}
                    <div class="banyakcard grid place-items-center">
                        <div class="grid grid-cols-3 gap-4 mt-[80px] border">
                            <div class="col-span-1 relative">
                                <img src="img/bromo.png" alt=""
                                    class="w-full h-full object-cover rounded-xl">
                                <div class="bungkus absolute bottom-5 left-0">
                                    <p class="text-gray-300 text-xl px-8">Bromo, East Java</p>
                                    <p class="text-gray-100 text-xl px-8">Bromo Tengger Tour</p>
                                </div>
                            </div>
                            <div class="col-span-1 relative">
                                <img src="img/bali.png" alt="" class="w-full h-full object-cover rounded-xl">
                                <div class="bungkus absolute bottom-5 left-0">
                                    <p class="text-gray-300 text-xl px-8">Denpasar, Bali</p>
                                    <p class="text-gray-100 text-xl px-8">Bali Beach Tourism</p>
                                </div>
                            </div>
                            <div class="col-span-1 relative">
                                <img src="img/bromo.png" alt=""
                                    class="w-full h-full object-cover rounded-xl">
                                <div class="bungkus absolute bottom-5 left-0">
                                    <p class="text-gray-300 text-xl px-8">Bromo, East Java</p>
                                    <p class="text-gray-100 text-xl px-8">Bromo Tengger Tour</p>
                                </div>
                            </div>
                        </div>
                        <div class="buttons mt-8">
                            <button type="button"
                                class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-8 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">View
                                More</button>
                        </div>
                    </div>
                    {{-- card end --}}
                    {{-- text tour start --}}
                    <div class="teks mt-[100px]">
                        <div class="bungkus grid grid-cols-7 gap-4 mt-3">
                            <div class="kiri col-span-2">

                                <div class="flex items-start gap-2.5">
                                    <img class="w-8 h-8 rounded-full" src="img/Osamu.jpg" alt="Jese image">
                                    <div
                                        class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                                        <div class="flex items-center space-x-2 rtl:space-x-reverse">
                                            <span class="text-sm font-semibold text-gray-900 dark:text-white">Bonnie
                                                Green</span>
                                            <span
                                                class="text-sm font-normal text-gray-500 dark:text-gray-400">11:46</span>
                                        </div>
                                        <p class="text-sm font-normal py-2.5 text-gray-900 dark:text-white">That's
                                            awesome. I think our users will really appreciate the improvements.</p>
                                        <span
                                            class="text-sm font-normal text-gray-500 dark:text-gray-400">Delivered</span>
                                    </div>
                                    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots"
                                        data-dropdown-placement="bottom-start"
                                        class="inline-flex self-center items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-800 dark:focus:ring-gray-600"
                                        type="button">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 4 15">
                                            <path
                                                d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                                        </svg>
                                    </button>
                                    <div id="dropdownDots"
                                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-40 dark:bg-gray-700 dark:divide-gray-600">
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                            aria-labelledby="dropdownMenuIconButton">
                                            <li>
                                                <a href="#"
                                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Reply</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Forward</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Copy</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="kanan col-span-5">
                                <p class="text-gray-800 text-lg px-8">Our tourist destination offer an unarivaled blend
                                    of nature beauty and culture richness Lorem ipsum, dolor sit amet consectetur
                                    adipisicing elit. Voluptatibus optio, repudiandae sit saepe nulla quis facilis
                                    culpa, nesciunt qui eius itaque consectetur est magnam. Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Nemo, natus illo velit repellendus mollitia quasi
                                    perferendis minus a architecto modi et facere placeat voluptates dolorum!</p>
                            </div>
                        </div>
                    </div>
                        {{-- text tour end --}}
                        {{-- Card start --}}
                    <div class="banyakcard grid place-items-center mt-[80px]">
                        <p class="text-gray-500 text-lg">Our blogs</p>
                        <h1 class="text-4xl font-semibold text-gray-800 mt-2">Our Travel Memories</h1>
                        <div class="grid grid-cols-2 gap-4 border mt-6">
                            <div class="col-span-1 relative">
                                <img src="img/bromo.png" alt=""
                                    class="w-full h-full object-cover rounded-xl">
                                <div class="bungkus absolute bottom-5 left-0">
                                    <p class="text-gray-300 text-xl px-8">Bromo, East Java</p>
                                    <p class="text-gray-100 text-xl px-8">Bromo Tengger Tour</p>
                                </div>
                            </div>
                            <div class="col-span-1 relative">
                                <img src="img/bali.png" alt="" class="w-full h-full object-cover rounded-xl">
                                <div class="bungkus absolute bottom-5 left-0">
                                    <p class="text-gray-300 text-xl px-8">Denpasar, Bali</p>
                                    <p class="text-gray-100 text-xl px-8">Bali Beach Tourism</p>
                                </div>
                            </div>
                        </div>
                        <div class="buttons mt-8">
                            <button type="button"
                                class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-8 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">View
                                More</button>
                        </div>
                    </div>
                    {{-- card end --}}
    </div>

    <footer class="bg-white dark:bg-gray-900 px-0 mt-[50px]">
        <div class="mx-auto w-full max-w-screen-xl">
          <div class="grid grid-cols-2 gap-8 px-4 py-6 lg:py-8 md:grid-cols-4">
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Company</h2>
                <ul class="text-gray-500 dark:text-gray-400 font-medium">
                    <li class="mb-4">
                        <a href="#" class=" hover:underline">About</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Careers</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Brand Center</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Blog</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Help center</h2>
                <ul class="text-gray-500 dark:text-gray-400 font-medium">
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Discord Server</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Twitter</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Facebook</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                <ul class="text-gray-500 dark:text-gray-400 font-medium">
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Privacy Policy</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Licensing</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Download</h2>
                <ul class="text-gray-500 dark:text-gray-400 font-medium">
                    <li class="mb-4">
                        <a href="#" class="hover:underline">iOS</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Android</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Windows</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">MacOS</a>
                    </li>
                </ul>
            </div>
        </div>
      </div>

      <div class="mx-auto w-full border">
        <div class="border-3 px-[100px] py-6 bg-gray-100 dark:bg-gray-700 md:flex md:items-center md:justify-between">
            <span class="text-sm text-gray-500 dark:text-gray-300 sm:text-center">© 2024 <a href="https://flowbite.com/">Lexatourism™</a>. All Rights Reserved.
            </span>
            <div class="flex mt-4 sm:justify-center md:mt-0 space-x-5 rtl:space-x-reverse">
                <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                      <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                            <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                        </svg>
                      <span class="sr-only">Facebook page</span>
                  </a>
                  <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                      <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                            <path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"/>
                        </svg>
                      <span class="sr-only">Discord community</span>
                  </a>
                  <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                      <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                        <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
                    </svg>
                      <span class="sr-only">Twitter page</span>
                  </a>
                  <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                      <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
                      </svg>
                      <span class="sr-only">GitHub account</span>
                  </a>
                  <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                      <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z" clip-rule="evenodd"/>
                    </svg>
                      <span class="sr-only">Dribbble account</span>
                  </a>
                </div>
            </div>
          </div>

      </footer>


            </body>

</html>
