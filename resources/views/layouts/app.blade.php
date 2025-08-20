<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite(['resources/css/app.css', 'resources/js/app.js']) {{-- ✅ Correct way --}}
        <title>@yield('title', 'My App')</title>
        <!-- Standard favicon -->
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
        <link rel="shortcut icon" href="{{ asset('favicon/favicon.ico') }}">

        <!-- Android -->
        <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon/android-chrome-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('favicon/android-chrome-512x512.png') }}">

        <!-- Apple -->
        <link rel="apple-touch-icon" href="{{ asset('favicon/apple-touch-icon.png') }}">

        <!-- Swiper CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


        <style>
            .loader {
                transform: rotateZ(45deg);
                perspective: 1000px;
                border-radius: 50%;
                width: 48px;
                height: 48px;
                color: #00C851;
            }
            .loader:before,
            .loader:after {
                content: '';
                display: block;
                position: absolute;
                top: 0;
                left: 0;
                width: inherit;
                height: inherit;
                border-radius: 50%;
                transform: rotateX(70deg);
                animation: 1s spin linear infinite;
            }
            .loader:after {
                color: #FF3D00;
                transform: rotateY(70deg);
                animation-delay: .4s;
            }

            @keyframes rotate {
                0% {
                transform: translate(-50%, -50%) rotateZ(0deg);
                }
                100% {
                transform: translate(-50%, -50%) rotateZ(360deg);
                }
            }

            @keyframes rotateccw {
                0% {
                transform: translate(-50%, -50%) rotate(0deg);
                }
                100% {
                transform: translate(-50%, -50%) rotate(-360deg);
                }
            }

            @keyframes spin {
                0%,
                100% {
                box-shadow: .2em 0px 0 0px currentcolor;
                }
                12% {
                box-shadow: .2em .2em 0 0 currentcolor;
                }
                25% {
                box-shadow: 0 .2em 0 0px currentcolor;
                }
                37% {
                box-shadow: -.2em .2em 0 0 currentcolor;
                }
                50% {
                box-shadow: -.2em 0 0 0 currentcolor;
                }
                62% {
                box-shadow: -.2em -.2em 0 0 currentcolor;
                }
                75% {
                box-shadow: 0px -.2em 0 0 currentcolor;
                }
                87% {
                box-shadow: .2em -.2em 0 0 currentcolor;
                }
            }

            /* Dark mode styling for scrollbar track */
            .os-theme-dark > .os-scrollbar-horizontal {
                background-color: #111;
            }

        </style>
    
    </head>
    <body>
    
        <!-- Loader
        <div class="tw-fixed tw-inset-0 tw-flex tw-items-center tw-justify-center tw-bg-black tw-bg-opacity-70 tw-z-50" id="loader">
            <span class="loader"></span>
        </div> -->

        <!-- Loader -->
        <div id="loader" style="position: fixed; top: 0; right: 0; bottom: 0; left: 0;">
            <div class="flex items-center justify-center min-h-screen bg-white dark:bg-gray-800">
                <span class="loader text-white text-xl"></span>
            </div>
        </div>

        <!-- Main App -->
        <div id="app" style="display: none;">
            <main class="bg-white dark:bg-gray-800">            
                <header>
                    <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800 dark:border-gray-600">
                        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                            <a href="/" class="flex items-center">
                                <img src="{{ asset('logo/logo-light.png') }}" class="mr-3 h-9 rounded dark:hidden" alt="Illustra Logo" />
                                <img src="{{ asset('logo/logo-dark.png') }}" class="mr-3 h-9 rounded hidden dark:inline" alt="Illustra Logo" />
                                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Illustra</span>
                            </a>
                            <div class="flex items-center lg:order-2">
                                <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 bg-gray-50 dark:bg-gray-700 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 mr-2 sm:mr-4">
                                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                                </button>
                                
                                @guest
                                    <a href="{{ route('login') }}" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 lg:px-5 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Login</a>
                                    <a href="{{ route('register') }}" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 lg:px-5 lg:py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">Sign up</a>
                                @endguest
                                
                                @auth
                                    <!-- Authenticated -->
                                    <div class="relative">
                                        <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover"
                                            class="flex items-center gap-2 text-sm font-medium text-gray-900 dark:text-white focus:outline-none"
                                            type="button">
                                                                                    
                                            <!-- Profile image -->
                                            <img src="{{ Auth::user()->profile_image_url }}"
                                                alt="Profile"
                                                class="w-9 h-9 rounded-full object-cover">

                                            <!-- Arrow only on large screens -->
                                            <i class="fa fa-chevron-down hidden lg:inline-block text-xs ml-1"></i>
                                        </button>

                                        <!-- Dropdown -->
                                        <div id="dropdownHover"
                                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700">
                                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                                                <li>
                                                    <span class="block pl-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white font-bold text-lg">{{ Auth::user()->name }} </span>                                                </span>
                                                </li>
                                                <li>
                                                    <a href="#" onclick="showAlert()" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                                </li>
                                                <li>
                                                    <a href="#" onclick="showAlert()" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                                </li>
                                                <li>
                                                    <a href="#" onclick="showAlert()" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                                </li>
                                                <li>
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                        <button type="submit" class="w-full text-left block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                            Sign out
                                                        </button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                @endauth

                                <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                                    <span class="sr-only">Open main menu</span>
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </button>
                            </div>
                            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                                <li>
                                    <a href="#" class="block py-2 pr-4 pl-3 border-b border-gray-100 text-primary-600 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-600 lg:p-0 dark:text-primary-500 lg:dark:hover:text-primary-500 dark:hover:bg-gray-700 dark:hover:text-primary-500 lg:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Home</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-600 lg:p-0 dark:text-gray-400 lg:dark:hover:text-primary-500 dark:hover:bg-gray-700 dark:hover:text-primary-500 lg:dark:hover:bg-transparent dark:border-gray-700">Features</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-600 lg:p-0 dark:text-gray-400 lg:dark:hover:text-primary-500 dark:hover:bg-gray-700 dark:hover:text-primary-500 lg:dark:hover:bg-transparent dark:border-gray-700">Marketplace</a>
                                </li>
                                <li>
                                    <button type="button" id="dropdown-button" data-dropdown-toggle="dropdown" class="flex justify-between items-center py-2 pr-4 pl-3 w-full font-medium text-gray-700 border-b border-gray-100 lg:w-auto hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-600 lg:p-0 dark:text-gray-400 lg:dark:hover:text-primary-500 dark:hover:bg-gray-700 dark:hover:text-primary-500 lg:dark:hover:bg-transparent dark:border-gray-700">Company <svg class="ml-1 w-5 h-5 lg:w-4 lg:h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                                    <div id="dropdown" class="hidden z-10 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                                        <ul class="py-1 text-sm font-light text-gray-500 dark:text-gray-400" aria-labelledby="dropdown-button">
                                            <li>
                                            <a href="#" class="flex items-center py-2 px-4 w-full hover:text-primary-600 dark:hover:text-primary-500"><svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>Audience</a>
                                            </li>
                                            <li>
                                            <a href="#" class="flex items-center py-2 px-4 w-full hover:text-primary-600 dark:hover:text-primary-500"><svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z"></path></svg>Marketing Automation</a>
                                            </li>
                                            <li>
                                            <button id="submenu-dropdown-button" data-dropdown-toggle="submenu-dropdown" data-dropdown-placement="right-end" type="button" class="flex justify-between items-center py-2 px-4 w-full hover:text-primary-600 dark:hover:text-primary-500">
                                                <span class="flex items-center">
                                                    <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>Creative Tools
                                                </span>
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                                            </button>
                                            <div id="submenu-dropdown" class="hidden z-10 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                                                <ul class="py-1 text-sm font-light text-gray-500 dark:text-gray-400" aria-labelledby="dropdown-button">
                                                    <li>
                                                    <a href="#" class="flex items-center py-2 px-4 w-full hover:text-primary-600 dark:hover:text-primary-500">Marketing CRM</a>
                                                    </li>
                                                    <li>
                                                    <a href="#" class="flex items-center py-2 px-4 w-full hover:text-primary-600 dark:hover:text-primary-500">Sign up forms</a>
                                                    </li>
                                                    <li>
                                                    <a href="#" class="flex items-center py-2 px-4 w-full hover:text-primary-600 dark:hover:text-primary-500">Segmentation</a>
                                                    </li>
                                                    <li>
                                                    <a href="#" class="flex items-center py-2 px-4 w-full hover:text-primary-600 dark:hover:text-primary-500">Dynamic content</a>
                                                    </li>
                                                    <li>
                                                    <a href="#" class="flex items-center py-2 px-4 w-full hover:text-primary-600 dark:hover:text-primary-500">A/B Testing</a>
                                                    </li>
                                                    <li>
                                                    <a href="#" class="flex items-center py-2 px-4 w-full hover:text-primary-600 dark:hover:text-primary-500">Behavioural targeting</a>
                                                    </li>
                                                    <li>
                                                    <a href="#" class="flex items-center py-2 px-4 w-full hover:text-primary-600 dark:hover:text-primary-500">Integrations</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            </li>
                                            <li>
                                            <a href="#" class="flex items-center py-2 px-4 w-full hover:text-primary-600 dark:hover:text-primary-500"><svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd"></path></svg>Insights & Analytics</a>
                                            </li>
                                            <li>
                                            <a href="#" class="flex items-center py-2 px-4 w-full hover:text-primary-600 dark:hover:text-primary-500"><svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>Demographics</a>
                                            </li>
                                            <li>
                                            <a href="#" class="flex items-center py-2 px-4 w-full hover:text-primary-600 dark:hover:text-primary-500"><svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>Contact Profiles</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-600 lg:p-0 dark:text-gray-400 lg:dark:hover:text-primary-500 dark:hover:bg-gray-700 dark:hover:text-primary-500 lg:dark:hover:bg-transparent dark:border-gray-700">Team</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-600 lg:p-0 dark:text-gray-400 lg:dark:hover:text-primary-500 dark:hover:bg-gray-700 dark:hover:text-primary-500 lg:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                                </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <hr class="bg-white dark:bg-gray-800 border-gray-200 sm:mx-auto dark:border-gray-700" />
                </header>


                @yield('content')
            
                <footer class="bg-slate-100 rounded-lg shadow-sm dark:bg-gray-900 m-4">
                    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
                        <div class="sm:flex sm:items-center sm:justify-between">            
                            <a href="#" class="flex items-center">
                                <img src="{{ asset('logo/logo-light.png') }}" class="mr-3 h-6 sm:h-9 rounded dark:hidden" alt="Illustra Logo" />
                                <img src="{{ asset('logo/logo-dark.png') }}" class="mr-3 h-6 sm:h-9 rounded hidden dark:inline" alt="Illustra Logo" />
                                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Illustra</span>
                            </a>
                            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                                <li>
                                    <a href="#" class="hover:underline me-4 md:me-6">About</a>
                                </li>
                                <li>
                                    <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                                </li>
                                <li>
                                    <a href="#" class="hover:underline">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2025 <a href="#" class="hover:underline">Illustra™</a>. All Rights Reserved.</span>
                    </div>
                </footer>
            </main>

            @if(session('flash_type') === 'success')

                <div id="toast-success" class="auto-close-toast fixed top-5 right-5 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow-sm dark:text-gray-400 dark:bg-gray-800" role="alert">
                    <div class="inline-flex items-center justify-center shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                        </svg>
                        <span class="sr-only">Check icon</span>
                    </div>
                    <div class="ms-3 text-sm font-normal">{{ session('flash_message') }}</div>
                    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>
                </div>
                
            @endif

            @if(session('flash_type') === 'error')

                <div id="toast-danger" class="auto-close-toast fixed top-5 right-5 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow-sm dark:text-gray-400 dark:bg-gray-800" role="alert">
                    <div class="inline-flex items-center justify-center shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z"/>
                        </svg>
                        <span class="sr-only">Error icon</span>
                    </div>
                    <div class="ms-3 text-sm font-normal">{{ session('flash_message') }}</div>
                    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-danger" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>
                </div>
            @endif

            @if(session('flash_type') === 'warning')

                <div id="toast-warning" class="auto-close-toast flex items-center w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow-sm dark:text-gray-400 dark:bg-gray-800" role="alert">
                    <div class="inline-flex items-center justify-center shrink-0 w-8 h-8 text-orange-500 bg-orange-100 rounded-lg dark:bg-orange-700 dark:text-orange-200">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z"/>
                        </svg>
                        <span class="sr-only">Warning icon</span>
                    </div>
                    <div class="ms-3 text-sm font-normal">{{ session('flash_message') }}</div>
                    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-warning" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>
                </div>
            
            @endif

        </div>

        <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

        <script>
            window.addEventListener('load', () => {
                // Delay hiding the loader by 300ms to allow rendering
                setTimeout(() => {
                    document.getElementById('loader').style.display = 'none';
                    document.getElementById('app').style.display = 'block';
                }, 300); // You can increase this if needed
            });
        </script>

        <script>

            function showAlert() {
                let timerInterval;

                const isDark = document.documentElement.classList.contains('dark');

                Swal.fire({
                    title: "Feature Coming Soon!",
                    html: "I will close in <b></b> milliseconds.",
                    timer: 4000,
                    timerProgressBar: true,
                    background: isDark ? '#374151' : '#ffffff', // dark:bg-gray-700 or white
                    color: isDark ? '#ffffff' : '#000000',      // text color based on mode
                    customClass: {
                        popup: 'rounded-lg shadow-sm',
                        title: isDark 
                            ? 'text-white text-xl font-semibold' 
                            : 'text-gray-900 text-xl font-semibold',
                        htmlContainer: isDark ? 'text-gray-300' : 'text-gray-600',
                        timerProgressBar: 'bg-blue-600',
                    },
                    didOpen: () => {
                        Swal.showLoading();
                        const timer = Swal.getPopup().querySelector("b");
                        timerInterval = setInterval(() => {
                            timer.textContent = `${Swal.getTimerLeft()}`;
                        }, 100);
                    },
                    willClose: () => {
                        clearInterval(timerInterval);
                    }
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.timer) {
                        console.log("I was closed by the timer");
                    }
                });
            }

        </script>


        <script>
            // On page load or when changing themes, best to add inline in `head` to avoid FOUC
            if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark')
            }
        </script>

        <script>
            var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
            var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

            // Change the icons inside the button based on previous settings
            if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
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
        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const swiper = new Swiper('.swiper', {
                    slidesPerView: 1, // Lowered from a higher value
                    slidesPerGroup: 1, // Lowered from a higher value
                    loop: true,
                    autoplay: {
                        delay: 3000, // 3 seconds
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                });

                // Press the "Next" button once after 3 seconds
                setTimeout(() => {
                    document.querySelector('.swiper-button-next')?.click();
                }, 3000);
            });
        </script>

    </body>

</html>
