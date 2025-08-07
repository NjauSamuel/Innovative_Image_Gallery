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
        <main class="bg-gray-50 dark:bg-gray-900">

            @yield('content')
            
        </main>
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