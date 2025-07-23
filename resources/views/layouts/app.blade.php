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
        <div class="flex items-center justify-center min-h-screen">
            <span class="loader text-white text-xl"></span>
        </div>
    </div>




    <!-- Main App -->
    <div id="app" style="display: none;">
        <main>
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

</body>
</html>