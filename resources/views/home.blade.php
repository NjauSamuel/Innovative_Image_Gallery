@extends('layouts.app')

@section('title', 'Home')

@section('content')

  <!-- Breadcrumb -->

  

    <nav class="flex" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
        <li class="inline-flex items-center">
        <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
            </svg>
            Home
        </a>
        </li>
        <li>
        <div class="flex items-center">
            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Projects</a>
        </div>
        </li>
        <li aria-current="page">
        <div class="flex items-center">
            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Flowbite</span>
        </div>
        </li>
    </ol>
    </nav>




    <header>
        <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="https://flowbite.com" class="flex items-center">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                </a>
                <div class="flex items-center lg:order-2">
                    <a href="#" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 lg:px-5 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Login</a>
                    <a href="#" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 lg:px-5 lg:py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">Sign up</a>
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
    </header>
    
  <div class="w-7/8 sm:w-1/2 mx-auto border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600 mb-20">
    <div class="px-3 py-2 border-b border-gray-200 dark:border-gray-600">
        <div class="flex flex-wrap items-center">
            <div class="flex items-center space-x-1 rtl:space-x-reverse flex-wrap">
                <button id="toggleBoldButton" data-tooltip-target="tooltip-bold" type="button" class="p-1.5 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5h4.5a3.5 3.5 0 1 1 0 7H8m0-7v7m0-7H6m2 7h6.5a3.5 3.5 0 1 1 0 7H8m0-7v7m0 0H6"/>
                    </svg>
                    <span class="sr-only">Bold</span>
                </button>
                <div id="tooltip-bold" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                    Toggle bold
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <button id="toggleItalicButton" data-tooltip-target="tooltip-italic" type="button" class="p-1.5 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8.874 19 6.143-14M6 19h6.33m-.66-14H18"/>
                    </svg>
                    <span class="sr-only">Italic</span>
                </button>
                <div id="tooltip-italic" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                    Toggle italic
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <button id="toggleUnderlineButton" data-tooltip-target="tooltip-underline" type="button" class="p-1.5 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 19h12M8 5v9a4 4 0 0 0 8 0V5M6 5h4m4 0h4"/>
                    </svg>
                    <span class="sr-only">Underline</span>
                </button>
                <div id="tooltip-underline" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                    Toggle underline
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <button id="toggleStrikeButton" data-tooltip-target="tooltip-strike" type="button" class="p-1.5 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 6.2V5h12v1.2M7 19h6m.2-14-1.677 6.523M9.6 19l1.029-4M5 5l6.523 6.523M19 19l-7.477-7.477"/>
                    </svg>
                    <span class="sr-only">Strike</span>
                </button>
                <div id="tooltip-strike" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                    Toggle strike
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <button id="toggleHighlightButton" data-tooltip-target="tooltip-highlight" type="button" class="p-1.5 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M9 19.2H5.5c-.3 0-.5-.2-.5-.5V16c0-.2.2-.4.5-.4h13c.3 0 .5.2.5.4v2.7c0 .3-.2.5-.5.5H18m-6-1 1.4 1.8h.2l1.4-1.7m-7-5.4L12 4c0-.1 0-.1 0 0l4 8.8m-6-2.7h4m-7 2.7h2.5m5 0H17"/>
                    </svg>
                    <span class="sr-only">Highlight</span>
                </button>
                <div id="tooltip-highlight" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                    Toggle highlight
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <button id="toggleCodeButton" type="button" data-tooltip-target="tooltip-code" class="p-1.5 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 8-4 4 4 4m8 0 4-4-4-4m-2-3-4 14"/>
                    </svg>
                    <span class="sr-only">Code</span>
                </button>
                <div id="tooltip-code" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                    Format code
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <button id="toggleLinkButton" data-tooltip-target="tooltip-link" type="button" class="p-1.5 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.213 9.787a3.391 3.391 0 0 0-4.795 0l-3.425 3.426a3.39 3.39 0 0 0 4.795 4.794l.321-.304m-.321-4.49a3.39 3.39 0 0 0 4.795 0l3.424-3.426a3.39 3.39 0 0 0-4.794-4.795l-1.028.961"/>
                    </svg>
                    <span class="sr-only">Link</span>
                </button>
                <div id="tooltip-link" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                    Add link
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <button id="removeLinkButton" data-tooltip-target="tooltip-remove-link" type="button" class="p-1.5 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M13.2 9.8a3.4 3.4 0 0 0-4.8 0L5 13.2A3.4 3.4 0 0 0 9.8 18l.3-.3m-.3-4.5a3.4 3.4 0 0 0 4.8 0L18 9.8A3.4 3.4 0 0 0 13.2 5l-1 1m7.4 14-1.8-1.8m0 0L16 16.4m1.8 1.8 1.8-1.8m-1.8 1.8L16 20"/>
                    </svg>
                    <span class="sr-only">Remove link</span>
                </button>
                <div id="tooltip-remove-link" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                    Remove link
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <button id="toggleTextSizeButton" data-dropdown-toggle="textSizeDropdown" type="button" data-tooltip-target="tooltip-text-size" class="p-1.5 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6.2V5h11v1.2M8 5v14m-3 0h6m2-6.8V11h8v1.2M17 11v8m-1.5 0h3"/>
                    </svg>
                    <span class="sr-only">Text size</span>
                </button>
                <div id="tooltip-text-size" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                    Text size
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <div id="textSizeDropdown" class="z-10 hidden w-72 rounded-sm bg-white p-2 shadow-sm dark:bg-gray-700">
                    <ul class="space-y-1 text-sm font-medium" aria-labelledby="toggleTextSizeButton">
                        <li>
                            <button data-text-size="16px" type="button" class="flex justify-between items-center w-full text-base rounded-sm px-3 py-2 hover:bg-gray-100 text-gray-900 dark:hover:bg-gray-600 dark:text-white">16px (Default) 
                            </button>
                        </li>
                        <li>
                            <button data-text-size="12px" type="button" class="flex justify-between items-center w-full text-xs rounded-sm px-3 py-2 hover:bg-gray-100 text-gray-900 dark:hover:bg-gray-600 dark:text-white">12px (Tiny)
                            </button>
                        </li>
                        <li>
                            <button data-text-size="14px" type="button" class="flex justify-between items-center w-full text-sm rounded-sm px-3 py-2 hover:bg-gray-100 text-gray-900 dark:hover:bg-gray-600 dark:text-white">14px (Small)
                            </button>
                        </li>
                        <li>
                            <button data-text-size="18px" type="button" class="flex justify-between items-center w-full text-lg rounded-sm px-3 py-2 hover:bg-gray-100 text-gray-900 dark:hover:bg-gray-600 dark:text-white">18px (Lead)
                            </button>
                        </li>
                        <li>
                            <button data-text-size="24px" type="button" class="flex justify-between items-center w-full text-2xl rounded-sm px-3 py-2 hover:bg-gray-100 text-gray-900 dark:hover:bg-gray-600 dark:text-white">24px (Large)
                            </button>
                        </li>
                        <li>
                            <button data-text-size="36px" type="button" class="flex justify-between items-center w-full text-4xl rounded-sm px-3 py-2 hover:bg-gray-100 text-gray-900 dark:hover:bg-gray-600 dark:text-white">36px (Huge)
                            </button>
                        </li>
                    </ul>
                </div>
                <button id="toggleTextColorButton" data-dropdown-toggle="textColorDropdown" type="button" data-tooltip-target="tooltip-text-color" class="p-1.5 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="25" height="24" fill="none" viewBox="0 0 25 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m6.532 15.982 1.573-4m-1.573 4h-1.1m1.1 0h1.65m-.077-4 2.725-6.93a.11.11 0 0 1 .204 0l2.725 6.93m-5.654 0H8.1m.006 0h5.654m0 0 .617 1.569m5.11 4.453c0 1.102-.854 1.996-1.908 1.996-1.053 0-1.907-.894-1.907-1.996 0-1.103 1.907-4.128 1.907-4.128s1.909 3.025 1.909 4.128Z"/>
                    </svg>
                    <span class="sr-only">Text color</span>
                </button>
                <div id="tooltip-text-color" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                    Text color
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <div id="textColorDropdown" class="z-10 hidden w-48 rounded-sm bg-white p-2 shadow-sm dark:bg-gray-700">
                    <div class="grid grid-cols-6 gap-2 group mb-3 items-center p-1.5 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600">
                        <input type="color" id="color" value="#e66465" class="border-gray-200 border bg-gray-50 dark:bg-gray-700 dark:border-gray-600 rounded-md p-px px-1 hover:bg-gray-50 group-hover:bg-gray-50 dark:group-hover:bg-gray-700 w-full h-8 col-span-3" />
                        <label for="color" class="text-gray-500 dark:text-gray-400 text-sm font-medium col-span-3 group-hover:text-gray-900 dark:group-hover:text-white">Pick a color</label>
                    </div>
                    <div class="grid grid-cols-6 gap-1 mb-3">
                        <button type="button" data-hex-color="#1A56DB" style="background-color: #1A56DB" class="w-6 h-6 rounded-md"><span class="sr-only">Blue</span></button>
                        <button type="button" data-hex-color="#0E9F6E" style="background-color: #0E9F6E" class="w-6 h-6 rounded-md"><span class="sr-only">Green</span></button>
                        <button type="button" data-hex-color="#FACA15" style="background-color: #FACA15" class="w-6 h-6 rounded-md"><span class="sr-only">Yellow</span></button>
                        <button type="button" data-hex-color="#F05252" style="background-color: #F05252" class="w-6 h-6 rounded-md"><span class="sr-only">Red</span></button>
                        <button type="button" data-hex-color="#FF8A4C" style="background-color: #FF8A4C" class="w-6 h-6 rounded-md"><span class="sr-only">Orange</span></button>
                        <button type="button" data-hex-color="#0694A2" style="background-color: #0694A2" class="w-6 h-6 rounded-md"><span class="sr-only">Teal</span></button>
                        <button type="button" data-hex-color="#B4C6FC" style="background-color: #B4C6FC" class="w-6 h-6 rounded-md"><span class="sr-only">Light indigo</span></button>
                        <button type="button" data-hex-color="#8DA2FB" style="background-color: #8DA2FB" class="w-6 h-6 rounded-md"><span class="sr-only">Indigo</span></button>
                        <button type="button" data-hex-color="#5145CD" style="background-color: #5145CD" class="w-6 h-6 rounded-md"><span class="sr-only">Purple</span></button>
                        <button type="button" data-hex-color="#771D1D" style="background-color: #771D1D" class="w-6 h-6 rounded-md"><span class="sr-only">Brown</span></button>
                        <button type="button" data-hex-color="#FCD9BD" style="background-color: #FCD9BD" class="w-6 h-6 rounded-md"><span class="sr-only">Light orange</span></button>
                        <button type="button" data-hex-color="#99154B" style="background-color: #99154B" class="w-6 h-6 rounded-md"><span class="sr-only">Bordo</span></button>
                        <button type="button" data-hex-color="#7E3AF2" style="background-color: #7E3AF2" class="w-6 h-6 rounded-md"><span class="sr-only">Dark Purple</span></button>
                        <button type="button" data-hex-color="#CABFFD" style="background-color: #CABFFD" class="w-6 h-6 rounded-md"><span class="sr-only">Light</span></button>
                        <button type="button" data-hex-color="#D61F69" style="background-color: #D61F69" class="w-6 h-6 rounded-md"><span class="sr-only">Dark Pink</span></button>
                        <button type="button" data-hex-color="#F8B4D9" style="background-color: #F8B4D9" class="w-6 h-6 rounded-md"><span class="sr-only">Pink</span></button>
                        <button type="button" data-hex-color="#F6C196" style="background-color: #F6C196" class="w-6 h-6 rounded-md"><span class="sr-only">Cream</span></button>
                        <button type="button" data-hex-color="#A4CAFE" style="background-color: #A4CAFE" class="w-6 h-6 rounded-md"><span class="sr-only">Light Blue</span></button>
                        <button type="button" data-hex-color="#5145CD" style="background-color: #5145CD" class="w-6 h-6 rounded-md"><span class="sr-only">Dark Blue</span></button>
                        <button type="button" data-hex-color="#B43403" style="background-color: #B43403" class="w-6 h-6 rounded-md"><span class="sr-only">Orange Brown</span></button>
                        <button type="button" data-hex-color="#FCE96A" style="background-color: #FCE96A" class="w-6 h-6 rounded-md"><span class="sr-only">Light Yellow</span></button>
                        <button type="button" data-hex-color="#1E429F" style="background-color: #1E429F" class="w-6 h-6 rounded-md"><span class="sr-only">Navy Blue</span></button>
                        <button type="button" data-hex-color="#768FFD" style="background-color: #768FFD" class="w-6 h-6 rounded-md"><span class="sr-only">Light Purple</span></button>
                        <button type="button" data-hex-color="#BCF0DA" style="background-color: #BCF0DA" class="w-6 h-6 rounded-md"><span class="sr-only">Light Green</span></button>
                        <button type="button" data-hex-color="#EBF5FF" style="background-color: #EBF5FF" class="w-6 h-6 rounded-md"><span class="sr-only">Sky Blue</span></button>
                        <button type="button" data-hex-color="#16BDCA" style="background-color: #16BDCA" class="w-6 h-6 rounded-md"><span class="sr-only">Cyan</span></button>
                        <button type="button" data-hex-color="#E74694" style="background-color: #E74694" class="w-6 h-6 rounded-md"><span class="sr-only">Pink</span></button>
                        <button type="button" data-hex-color="#83B0ED" style="background-color: #83B0ED" class="w-6 h-6 rounded-md"><span class="sr-only">Darker Sky Blue</span></button>
                        <button type="button" data-hex-color="#03543F" style="background-color: #03543F" class="w-6 h-6 rounded-md"><span class="sr-only">Forest Green</span></button>
                        <button type="button" data-hex-color="#111928" style="background-color: #111928" class="w-6 h-6 rounded-md"><span class="sr-only">Black</span></button>
                        <button type="button" data-hex-color="#4B5563" style="background-color: #4B5563" class="w-6 h-6 rounded-md"><span class="sr-only">Stone</span></button>
                        <button type="button" data-hex-color="#6B7280" style="background-color: #6B7280" class="w-6 h-6 rounded-md"><span class="sr-only">Gray</span></button>
                        <button type="button" data-hex-color="#D1D5DB" style="background-color: #D1D5DB" class="w-6 h-6 rounded-md"><span class="sr-only">Light Gray</span></button>
                        <button type="button" data-hex-color="#F3F4F6" style="background-color: #F3F4F6" class="w-6 h-6 rounded-md"><span class="sr-only">Cloud Gray</span></button>
                        <button type="button" data-hex-color="#F3F4F6" style="background-color: #F3F4F6" class="w-6 h-6 rounded-md"><span class="sr-only">Cloud Gray</span></button>
                        <button type="button" data-hex-color="#F9FAFB" style="background-color: #F9FAFB" class="w-6 h-6 rounded-md"><span class="sr-only">Heaven Gray</span></button>
                    </div>
                    <button type="button" id="reset-color" class="py-1.5 text-sm font-medium text-gray-500 focus:outline-none bg-white rounded-lg hover:bg-gray-100 hover:text-gray-900 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-700 dark:text-gray-400 dark:hover:text-white w-full dark:hover:bg-gray-600">Reset color</button>
                </div>
                <button id="toggleFontFamilyButton" data-dropdown-toggle="fontFamilyDropdown" type="button" data-tooltip-target="tooltip-font-family" class="p-1.5 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m10.6 19 4.298-10.93a.11.11 0 0 1 .204 0L19.4 19m-8.8 0H9.5m1.1 0h1.65m7.15 0h-1.65m1.65 0h1.1m-7.7-3.985h4.4M3.021 16l1.567-3.985m0 0L7.32 5.07a.11.11 0 0 1 .205 0l2.503 6.945h-5.44Z"/>
                    </svg>
                    <span class="sr-only">Font family</span>
                </button>
                <div id="tooltip-font-family" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                    Font Family
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <div id="fontFamilyDropdown" class="z-10 hidden w-48 rounded-sm bg-white p-2 shadow-sm dark:bg-gray-700">
                    <ul class="space-y-1 text-sm font-medium" aria-labelledby="toggleFontFamilyButton">
                        <li>
                            <button data-font-family="Inter, ui-sans-serif" type="button" class="flex justify-between items-center w-full text-sm font-sans rounded-sm px-3 py-2 hover:bg-gray-100 text-gray-900 dark:hover:bg-gray-600 dark:text-white">Default
                            </button>
                        </li>
                        <li>
                            <button data-font-family="Arial, sans-serif" type="button" class="flex justify-between items-center w-full text-sm rounded-sm px-3 py-2 hover:bg-gray-100 text-gray-900 dark:hover:bg-gray-600 dark:text-white" style="font-family: Arial, sans-serif;">Arial
                            </button>
                        </li>
                        <li>
                            <button data-font-family="'Courier New', monospace" type="button" class="flex justify-between items-center w-full text-sm rounded-sm px-3 py-2 hover:bg-gray-100 text-gray-900 dark:hover:bg-gray-600 dark:text-white" style="font-family: 'Courier New', monospace;">Courier New
                            </button>
                        </li>
                        <li>
                            <button data-font-family="Georgia, serif" type="button" class="flex justify-between items-center w-full text-sm rounded-sm px-3 py-2 hover:bg-gray-100 text-gray-900 dark:hover:bg-gray-600 dark:text-white" style="font-family: Georgia, serif;">Georgia
                            </button>
                        </li>
                        <li>
                            <button data-font-family="'Lucida Sans Unicode', sans-serif" type="button" class="flex justify-between items-center w-full text-sm rounded-sm px-3 py-2 hover:bg-gray-100 text-gray-900 dark:hover:bg-gray-600 dark:text-white" style="font-family: 'Lucida Sans Unicode', sans-serif;">Lucida Sans Unicode
                            </button>
                        </li>
                        <li>
                            <button data-font-family="Tahoma, sans-serif" type="button" class="flex justify-between items-center w-full text-sm rounded-sm px-3 py-2 hover:bg-gray-100 text-gray-900 dark:hover:bg-gray-600 dark:text-white" style="font-family: Tahoma, sans-serif;">Tahoma
                            </button>
                        </li>
                        <li>
                            <button data-font-family="'Times New Roman', serif;" type="button" class="flex justify-between items-center w-full text-sm rounded-sm px-3 py-2 hover:bg-gray-100 text-gray-900 dark:hover:bg-gray-600 dark:text-white" style="font-family: 'Times New Roman', serif;">Times New Roman
                            </button>
                        </li>
                        <li>
                            <button data-font-family="'Trebuchet MS', sans-serif" type="button" class="flex justify-between items-center w-full text-sm rounded-sm px-3 py-2 hover:bg-gray-100 text-gray-900 dark:hover:bg-gray-600 dark:text-white" style="font-family: 'Trebuchet MS', sans-serif;">Trebuchet MS
                            </button>
                        </li>
                        <li>
                            <button data-font-family="Verdana, sans-serif" type="button" class="flex justify-between items-center w-full text-sm rounded-sm px-3 py-2 hover:bg-gray-100 text-gray-900 dark:hover:bg-gray-600 dark:text-white" style="font-family: Verdana, sans-serif;">Verdana
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="px-1">
                    <span class="block w-px h-4 bg-gray-300 dark:bg-gray-600"></span>
                </div>
                <button id="toggleLeftAlignButton" type="button" data-tooltip-target="tooltip-left-align" class="p-1.5 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 6h8m-8 4h12M6 14h8m-8 4h12"/>
                    </svg>
                    <span class="sr-only">Align left</span>
                </button>
                <div id="tooltip-left-align" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                    Align left
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <button id="toggleCenterAlignButton" type="button" data-tooltip-target="tooltip-center-align" class="p-1.5 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 6h8M6 10h12M8 14h8M6 18h12"/>
                    </svg>
                    <span class="sr-only">Align center</span>
                </button>
                <div id="tooltip-center-align" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                    Align center
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <button id="toggleRightAlignButton" type="button" data-tooltip-target="tooltip-right-align" class="p-1.5 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 6h-8m8 4H6m12 4h-8m8 4H6"/>
                    </svg>
                    <span class="sr-only">Align right</span>
                </button>
                <div id="tooltip-right-align" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                    Align right
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
            </div>
    </div>
    <div class="flex items-center gap-2 pt-2 flex-wrap">
        <button id="typographyDropdownButton" data-dropdown-toggle="typographyDropdown" class="flex items-center justify-center rounded-lg bg-gray-100 px-3 py-1.5 text-sm font-medium text-gray-500 hover:bg-gray-200 hover:text-gray-900 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-50 dark:bg-gray-600 dark:text-gray-400 dark:hover:bg-gray-500 dark:hover:text-white dark:focus:ring-gray-600" type="button">
            Format
            <svg class="-me-0.5 ms-1.5 h-3.5 w-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
            </svg>
        </button>
        <div class="ps-1.5">
            <span class="block w-px h-4 bg-gray-300 dark:bg-gray-600"></span>
        </div>
        <!-- Heading Dropdown -->
        <div id="typographyDropdown" class="z-10 hidden w-72 rounded-sm bg-white p-2 shadow-sm dark:bg-gray-700">
            <ul class="space-y-1 text-sm font-medium" aria-labelledby="typographyDropdownButton">
                <li>
                    <button id="toggleParagraphButton" type="button" class="flex justify-between items-center w-full text-base rounded-sm px-3 py-2 hover:bg-gray-100 text-gray-900 dark:hover:bg-gray-600 dark:text-white">Paragraph 
                        <div class="space-x-1.5">
                            <kbd class="px-2 py-1 text-xs font-semibold text-gray-500 bg-gray-100 border border-gray-200 rounded-lg dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500">Cmd</kbd>
                            <kbd class="px-2 py-1 text-xs font-semibold text-gray-500 bg-gray-100 border border-gray-200 rounded-lg dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500">Alt</kbd>
                            <kbd class="px-2 py-1 text-xs font-semibold text-gray-500 bg-gray-100 border border-gray-200 rounded-lg dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500">0</kbd>
                        </div>
                    </button>
                </li>
                <li>
                    <button data-heading-level="1" type="button" class="flex justify-between items-center w-full text-base rounded-sm px-3 py-2 hover:bg-gray-100 text-gray-900 dark:hover:bg-gray-600 dark:text-white">Heading 1 
                        <div class="space-x-1.5">
                            <kbd class="px-2 py-1 text-xs font-semibold text-gray-500 bg-gray-100 border border-gray-200 rounded-lg dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500">Cmd</kbd>
                            <kbd class="px-2 py-1 text-xs font-semibold text-gray-500 bg-gray-100 border border-gray-200 rounded-lg dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500">Alt</kbd>
                            <kbd class="px-2 py-1 text-xs font-semibold text-gray-500 bg-gray-100 border border-gray-200 rounded-lg dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500">1</kbd>
                        </div>
                    </button>
                </li>
                <li>
                    <button  data-heading-level="2" type="button" class="flex justify-between items-center w-full text-base rounded-sm px-3 py-2 hover:bg-gray-100 text-gray-900 dark:hover:bg-gray-600 dark:text-white">Heading 2 
                        <div class="space-x-1.5">
                            <kbd class="px-2 py-1 text-xs font-semibold text-gray-500 bg-gray-100 border border-gray-200 rounded-lg dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500">Cmd</kbd>
                            <kbd class="px-2 py-1 text-xs font-semibold text-gray-500 bg-gray-100 border border-gray-200 rounded-lg dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500">Alt</kbd>
                            <kbd class="px-2 py-1 text-xs font-semibold text-gray-500 bg-gray-100 border border-gray-200 rounded-lg dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500">2</kbd>
                        </div>
                    </button>
                </li>
                <li>
                    <button  data-heading-level="3" type="button" class="flex justify-between items-center w-full text-base rounded-sm px-3 py-2 hover:bg-gray-100 text-gray-900 dark:hover:bg-gray-600 dark:text-white">Heading 3
                        <div class="space-x-1.5">
                            <kbd class="px-2 py-1 text-xs font-semibold text-gray-500 bg-gray-100 border border-gray-200 rounded-lg dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500">Cmd</kbd>
                            <kbd class="px-2 py-1 text-xs font-semibold text-gray-500 bg-gray-100 border border-gray-200 rounded-lg dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500">Alt</kbd>
                            <kbd class="px-2 py-1 text-xs font-semibold text-gray-500 bg-gray-100 border border-gray-200 rounded-lg dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500">3</kbd>
                        </div>
                    </button>
                </li>
                <li>
                    <button  data-heading-level="4" type="button" class="flex justify-between items-center w-full text-base rounded-sm px-3 py-2 hover:bg-gray-100 text-gray-900 dark:hover:bg-gray-600 dark:text-white">Heading 4
                        <div class="space-x-1.5">
                            <kbd class="px-2 py-1 text-xs font-semibold text-gray-500 bg-gray-100 border border-gray-200 rounded-lg dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500">Cmd</kbd>
                            <kbd class="px-2 py-1 text-xs font-semibold text-gray-500 bg-gray-100 border border-gray-200 rounded-lg dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500">Alt</kbd>
                            <kbd class="px-2 py-1 text-xs font-semibold text-gray-500 bg-gray-100 border border-gray-200 rounded-lg dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500">4</kbd>
                        </div>
                    </button>
                </li>
                <li>
                    <button data-heading-level="5" type="button" class="flex justify-between items-center w-full text-base rounded-sm px-3 py-2 hover:bg-gray-100 text-gray-900 dark:hover:bg-gray-600 dark:text-white">Heading 5
                        <div class="space-x-1.5">
                            <kbd class="px-2 py-1 text-xs font-semibold text-gray-500 bg-gray-100 border border-gray-200 rounded-lg dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500">Cmd</kbd>
                            <kbd class="px-2 py-1 text-xs font-semibold text-gray-500 bg-gray-100 border border-gray-200 rounded-lg dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500">Alt</kbd>
                            <kbd class="px-2 py-1 text-xs font-semibold text-gray-500 bg-gray-100 border border-gray-200 rounded-lg dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500">5</kbd>
                        </div>
                    </button>
                </li>
                <li>
                    <button  data-heading-level="6" type="button" class="flex justify-between items-center w-full text-base rounded-sm px-3 py-2 hover:bg-gray-100 text-gray-900 dark:hover:bg-gray-600 dark:text-white">Heading 6
                        <div class="space-x-1.5">
                            <kbd class="px-2 py-1 text-xs font-semibold text-gray-500 bg-gray-100 border border-gray-200 rounded-lg dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500">Cmd</kbd>
                            <kbd class="px-2 py-1 text-xs font-semibold text-gray-500 bg-gray-100 border border-gray-200 rounded-lg dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500">Alt</kbd>
                            <kbd class="px-2 py-1 text-xs font-semibold text-gray-500 bg-gray-100 border border-gray-200 rounded-lg dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500">6</kbd>
                        </div>
                    </button>
                </li>
            </ul>
        </div>
        <button id="addImageButton" type="button" data-tooltip-target="tooltip-image" class="p-1.5 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M13 10a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2H14a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M2 6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12c0 .556-.227 1.06-.593 1.422A.999.999 0 0 1 20.5 20H4a2.002 2.002 0 0 1-2-2V6Zm6.892 12 3.833-5.356-3.99-4.322a1 1 0 0 0-1.549.097L4 12.879V6h16v9.95l-3.257-3.619a1 1 0 0 0-1.557.088L11.2 18H8.892Z" clip-rule="evenodd"/>
                </svg>
                <span class="sr-only">Add image</span>
            </button>
            <div id="tooltip-image" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                Add image
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <button id="addVideoButton" type="button" data-tooltip-target="tooltip-video" class="p-1.5 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M9 7V2.221a2 2 0 0 0-.5.365L4.586 6.5a2 2 0 0 0-.365.5H9Zm2 0V2h7a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Zm-2 4a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2H9Zm0 2h2v2H9v-2Zm7.965-.557a1 1 0 0 0-1.692-.72l-1.268 1.218a1 1 0 0 0-.308.721v.733a1 1 0 0 0 .37.776l1.267 1.032a1 1 0 0 0 1.631-.776v-2.984Z" clip-rule="evenodd"/>
                </svg>
                <span class="sr-only">Add video</span>
            </button>
            <div id="tooltip-video" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                Add video
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <button id="toggleListButton" type="button" data-tooltip-target="tooltip-list" class="p-1.5 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M9 8h10M9 12h10M9 16h10M4.99 8H5m-.02 4h.01m0 4H5"/>
                </svg>
                <span class="sr-only">Toggle list</span>
            </button>
            <div id="tooltip-list" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                Toggle list
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <button id="toggleOrderedListButton" type="button" data-tooltip-target="tooltip-ordered-list" class="p-1.5 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6h8m-8 6h8m-8 6h8M4 16a2 2 0 1 1 3.321 1.5L4 20h5M4 5l2-1v6m-2 0h4"/>
            </svg>
            <span class="sr-only">Toggle ordered list</span>
        </button>
        <div id="tooltip-ordered-list" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
            Toggle ordered list
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <button id="toggleBlockquoteButton" type="button" data-tooltip-target="tooltip-blockquote-list" class="p-1.5 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M6 6a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a3 3 0 0 1-3 3H5a1 1 0 1 0 0 2h1a5 5 0 0 0 5-5V8a2 2 0 0 0-2-2H6Zm9 0a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a3 3 0 0 1-3 3h-1a1 1 0 1 0 0 2h1a5 5 0 0 0 5-5V8a2 2 0 0 0-2-2h-3Z" clip-rule="evenodd"/>
            </svg>
            <span class="sr-only">Toggle blockquote</span>
        </button>
        <div id="tooltip-blockquote-list" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
            Toggle blockquote
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <button id="toggleHRButton" type="button" data-tooltip-target="tooltip-hr-list" class="p-1.5 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 12h14"/>
                <path stroke="currentColor" stroke-linecap="round" d="M6 9.5h12m-12 9h12M6 7.5h12m-12 9h12M6 5.5h12m-12 9h12"/>
            </svg>
            <span class="sr-only">Toggle Horizontal Rule</span>
        </button>
        <div id="tooltip-hr-list" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
            Toggle Horizontal Rule
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    </div>
</div>
<div class="px-4 py-2 bg-white rounded-b-lg dark:bg-gray-800">
    <label for="wysiwyg-example" class="sr-only">Publish post</label>
    <div id="wysiwyg-example"class="block w-full min-h-[20vh] px-0 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"></div>
</div>
  </div>




  <div class="w-3/4 mx-auto grid grid-cols-2 md:grid-cols-3 gap-4">
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-8.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-9.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-10.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-11.jpg" alt="">
    </div>
  </div>




  <footer class="bg-slate-100 rounded-lg shadow-sm dark:bg-gray-900 m-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
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
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.</span>
    </div>
  </footer>

@endsection
