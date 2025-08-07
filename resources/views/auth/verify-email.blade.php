@extends('layouts.unauthenticated')

@section('title', 'Verify Email')

@section('content')
<section class="bg-white dark:bg-gray-900 min-h-screen flex items-center">
    <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6 w-full">
        <div class="mx-auto max-w-screen-sm text-center">

            <h2 class="mb-4 text-4xl tracking-tight font-extrabold leading-tight text-gray-900 dark:text-white">
                <i class="fas fa-envelope-circle-check text-primary-600 dark:text-primary-400"></i> Verify Your Email Address
            </h2>

            <p class="mb-6 font-light text-gray-500 dark:text-gray-400 md:text-lg">
                We’ve sent a verification link to your email. Please check your inbox and click the link to verify your account.
            </p>

            @if (session('status') === 'verification-link-sent')
                <div class="mb-4 text-green-600 dark:text-green-400 font-medium">
                    <i class="fas fa-paper-plane"></i> A new verification email has been sent!
                </div>
            @endif

            <p class="mb-6 text-sm text-red-500 dark:text-red-400">
                <i class="fas fa-exclamation-triangle"></i> Accounts not verified within <strong>21 days</strong> will be permanently deleted.            
            </p>

            <form method="POST" action="{{ route('verification.send') }}" class="inline-block">
                @csrf
                <button type="submit" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    <i class="fas fa-redo"></i> Resend Verification Email
                </button>
            </form>

            <form method="POST" action="{{ route('logout') }}" class="inline-block">
                @csrf
                <button type="submit" class="text-gray-700 bg-gray-200 hover:bg-gray-300 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </button>
            </form>

        </div>
    </div>
</section>
@endsection
