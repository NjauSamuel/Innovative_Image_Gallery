@extends('layouts.unauthenticated')

@section('title', 'Register')

@section('content')
    <section class="bg-white dark:bg-gray-900">
        <div class="grid lg:grid-cols-2">
            <div class="flex justify-center py-3 sm:py-6 pb-6 px-4 lg:py-0 sm:px-0 relative lg:h-screen lg:overflow-y-auto">
                
                
                <form class="my-6 space-y-4 max-w-md md:space-y-6 xl:max-w-xl pt-4 pb-4" action="{{ route('register') }}" method="POST">
                    @csrf

                    <div class="flex items-center justify-between">
                        <h2 class="text-xl font-bold text-gray-900 dark:text-white">Prince Mbuthia ni Fala!!</h2>
                        
                        <button id="theme-toggle" type="button" class=" text-gray-500 dark:text-gray-400 hover:bg-gray-100 bg-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                            <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                            <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                        </button>
                    </div>

                    <div class="items-center space-y-3 space-x-0 sm:flex sm:space-x-4 sm:space-y-0">
                        <a href="#" onclick="showAlert()" class="w-full inline-flex items-center justify-center py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-gray-900 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                            <svg class="mr-2 w-5 h-5" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_13183_10121)"><path d="M20.3081 10.2303C20.3081 9.55056 20.253 8.86711 20.1354 8.19836H10.7031V12.0492H16.1046C15.8804 13.2911 15.1602 14.3898 14.1057 15.0879V17.5866H17.3282C19.2205 15.8449 20.3081 13.2728 20.3081 10.2303Z" fill="#3F83F8"/><path d="M10.7019 20.0006C13.3989 20.0006 15.6734 19.1151 17.3306 17.5865L14.1081 15.0879C13.2115 15.6979 12.0541 16.0433 10.7056 16.0433C8.09669 16.0433 5.88468 14.2832 5.091 11.9169H1.76562V14.4927C3.46322 17.8695 6.92087 20.0006 10.7019 20.0006V20.0006Z" fill="#34A853"/><path d="M5.08857 11.9169C4.66969 10.6749 4.66969 9.33008 5.08857 8.08811V5.51233H1.76688C0.348541 8.33798 0.348541 11.667 1.76688 14.4927L5.08857 11.9169V11.9169Z" fill="#FBBC04"/><path d="M10.7019 3.95805C12.1276 3.936 13.5055 4.47247 14.538 5.45722L17.393 2.60218C15.5852 0.904587 13.1858 -0.0287217 10.7019 0.000673888C6.92087 0.000673888 3.46322 2.13185 1.76562 5.51234L5.08732 8.08813C5.87733 5.71811 8.09302 3.95805 10.7019 3.95805V3.95805Z" fill="#EA4335"/></g><defs><clipPath id="clip0_13183_10121"><rect width="20" height="20" fill="white" transform="translate(0.5)"/></clipPath></defs>
                            </svg>                            
                            Sign up with Google
                        </a>
                        <a href="#" onclick="showAlert()" class="w-full inline-flex items-center justify-center py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-gray-900 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                            <svg class="mr-2 w-5 h-5 text-gray-900 dark:text-white" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_13183_29163)"><path d="M18.6574 15.5863C18.3549 16.2851 17.9969 16.9283 17.5821 17.5196C17.0167 18.3257 16.5537 18.8838 16.1969 19.1936C15.6439 19.7022 15.0513 19.9627 14.4168 19.9775C13.9612 19.9775 13.4119 19.8479 12.7724 19.585C12.1308 19.3232 11.5412 19.1936 11.0021 19.1936C10.4366 19.1936 9.83024 19.3232 9.18162 19.585C8.53201 19.8479 8.00869 19.985 7.60858 19.9985C7.00008 20.0245 6.39356 19.7566 5.78814 19.1936C5.40174 18.8566 4.91842 18.2788 4.33942 17.4603C3.71821 16.5863 3.20749 15.5727 2.80738 14.4172C2.37887 13.1691 2.16406 11.9605 2.16406 10.7904C2.16406 9.45009 2.45368 8.29407 3.03379 7.32534C3.4897 6.54721 4.09622 5.9334 4.85533 5.4828C5.61445 5.03219 6.43467 4.80257 7.31797 4.78788C7.80129 4.78788 8.4351 4.93738 9.22273 5.2312C10.0081 5.52601 10.5124 5.67551 10.7335 5.67551C10.8988 5.67551 11.4591 5.5007 12.4088 5.15219C13.3069 4.82899 14.0649 4.69517 14.6859 4.74788C16.3685 4.88368 17.6327 5.54699 18.4734 6.74202C16.9685 7.65384 16.2241 8.93097 16.2389 10.5693C16.2525 11.8454 16.7154 12.9074 17.6253 13.7506C18.0376 14.1419 18.4981 14.4444 19.0104 14.6592C18.8993 14.9814 18.7821 15.29 18.6574 15.5863V15.5863ZM14.7982 0.400358C14.7982 1.40059 14.4328 2.3345 13.7044 3.19892C12.8254 4.22654 11.7623 4.82035 10.6093 4.72665C10.5947 4.60665 10.5861 4.48036 10.5861 4.34765C10.5861 3.38743 11.0041 2.3598 11.7465 1.51958C12.1171 1.09416 12.5884 0.740434 13.16 0.458257C13.7304 0.18029 14.2698 0.0265683 14.7772 0.000244141C14.7921 0.133959 14.7982 0.267682 14.7982 0.400345V0.400358Z" fill="currentColor"/></g><defs><clipPath id="clip0_13183_29163"><rect width="20" height="20" fill="white" transform="translate(0.5)"/></clipPath></defs>
                            </svg>                            
                            Sign up with Apple
                        </a>
                    </div>
                    <div class="flex items-center">
                        <div class="w-full h-0.5 bg-gray-200 dark:bg-gray-700"></div>
                        <div class="px-5 text-center text-gray-500 dark:text-gray-400">or</div>
                        <div class="w-full h-0.5 bg-gray-200 dark:bg-gray-700"></div>
                    </div>
                    <!-- Name -->
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                            What should we call you?
                        </label>
                        <input
                            type="text"
                            name="name"
                            id="name"
                            value="{{ old('name') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                                focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5
                                dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
                                @error('name') border-red-500 @enderror"
                            placeholder="e.g. Bonnie Green"
                            required
                        >
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                            Your email
                        </label>
                        <input
                            type="email"
                            name="email"
                            id="email"
                            value="{{ old('email') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                                focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5
                                dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
                                @error('email') border-red-500 @enderror"
                            placeholder="name@company.com"
                            required
                        >
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                            Your password </label>
                        <input type="password" name="password" id="password" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white @error('password') border-red-500 @enderror focus:ring-primary-500 focus:border-primary-500 " placeholder="••••••••" required >
                        @error('password')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Confirm password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="••••••••" required>
                    </div>

                    <div class="space-y-3">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                            <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                            </div>
                            <div class="ml-3 text-sm">
                            <label for="terms" class="font-light text-gray-500 dark:text-gray-300">By signing up, you are creating a Illustra account, and you agree to Illustra’s <a class="font-medium text-primary-600 dark:text-primary-500 hover:underline" href="#" onclick="showAlert()">Terms of Use</a> and <a class="font-medium text-primary-600 dark:text-primary-500 hover:underline" href="#" onclick="showAlert()">Privacy Policy</a>.</label>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-700">Create an account</button>
                    </div>
                    <div class="sm:pb-3">
                        <p class="text-sm font-light text-gray-500 dark:text-gray-300">
                            Already have an account? <a href="{{ route('login') }}" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login here</a>
                        </p>
                    </div>
                    
                </form>
            </div>  

            <div class="flex justify-center items-center py-6 px-4 bg-primary-600 lg:py-0 sm:px-0">
                <div class="max-w-md xl:max-w-xl">

                    <a href="/" class="flex items-center">
                        <img src="{{ asset('logo/logo-light.png') }}" class="mr-3 h-6 sm:h-9 rounded dark:hidden" alt="Illustra Logo" />
                        <img src="{{ asset('logo/logo-dark.png') }}" class="mr-3 h-6 sm:h-9 rounded hidden dark:inline" alt="Illustra Logo" />
                        <span class="self-center text-xl font-semibold whitespace-nowrap text-white dark:text-black">Illustra</span>
                    </a>

                    <h1 class="mb-4 text-3xl font-extrabold tracking-tight leading-none text-white dark:text-primary-200 xl:text-5xl">Explore trending and curated image galleries.</h1>
                    <p class="mb-4 font-light text-primary-200 lg:mb-8 dark:text-black">Discover and share visual inspiration on Illustra — a platform for storing, exploring, and trending image galleries. Whether public or private, your collections become part of a growing archive of creative expression.</p>
                    <div class="flex items-center divide-x divide-primary-500">
                        <div class="flex pr-3 -space-x-4 sm:pr-5">
                            <img class="w-10 h-10 border-2 border-white rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="bonnie avatar">
                        <img class="w-10 h-10 border-2 border-white rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="jese avatar">
                        <img class="w-10 h-10 border-2 border-white rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png" alt="roberta avatar">
                        <img class="w-10 h-10 border-2 border-white rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/thomas-lean.png" alt="thomas avatar">
                        </div>
                        <a href="/" class="pl-3 text-white sm:pl-5 dark:text-white">
                            <span class="text-sm text-primary-200">Galleries shared. Stories told.</span>
                        </a> 
                    </div>
                </div>
            </div>              
        </div>
    </section>
@endsection
