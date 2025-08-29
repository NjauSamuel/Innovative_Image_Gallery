@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <section class="bg-white dark:bg-gray-900 antialiased">
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:px-6 sm:py-16 lg:py-24">
        <div class="flex flex-col gap-8 lg:items-center lg:gap-16 lg:flex-row">
            <div class="lg:max-w-xl xl:shrink-0">
            <div>
                <h2 class="text-3xl font-extrabold leading-none tracking-tight text-gray-900 dark:text-white sm:text-5xl">
                    Share your world, one gallery at a time
                </h2>
                <p class="mt-5 text-base font-normal text-gray-500 dark:text-gray-400 md:max-w-3xl sm:text-xl">
                Illustra lets you upload and showcase your best images, organize them into stunning galleries, 
        and explore inspiring collections across countless categories shared by a creative community.
                </p>
            </div>

            <div class="flex flex-col gap-4 mt-8 sm:flex-row">
                <a href="#" title=""
                class="sm:w-[182px] px-5 py-3 w-full  text-base font-medium text-center text-white bg-primary-700 rounded-lg shrink-0 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                role="button">
                    Create Now
                </a>

                <a href="#" title=""
                    class="sm:w-[182px] inline-flex w-full justify-center items-center px-5 py-3 text-base font-medium text-center text-gray-800 bg-white border border-gray-200 rounded-lg shrink-0 focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                    role="button">
                    <i class="fa-solid fa-compass w-5 h-5 mr-2 text-xl -ml-1"></i>
                    Discover More
                </a>

            </div>
            </div>
            
            <!-- Swiper -->
            <div class="swiper w-full h-72 md:h-96">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/ngo-carousel/image-1.jpg" class="w-full h-full object-cover rounded-lg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/ngo-carousel/image-2.jpg" class="w-full h-full object-cover rounded-lg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/ngo-carousel/image-3.jpg" class="w-full h-full object-cover rounded-lg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/ngo-carousel/image-4.jpg" class="w-full h-full object-cover rounded-lg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/ngo-carousel/image-5.jpg" class="w-full h-full object-cover rounded-lg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/ngo-carousel/image-6.jpg" class="w-full h-full object-cover rounded-lg" />
                    </div>
                </div>
                <!-- Pagination -->
                <div class="swiper-pagination"></div>

                <!-- Navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>

        </div>
        </div>
    </section>

    <div class="scroll-pills sticky top-0 z-50 bg-white dark:bg-gray-900 border-b border-gray-800">
        <div class="max-w-screen-xl mx-auto px-4 py-3 flex space-x-3 overflow-x-auto">
            @foreach($categories as $category)
                @php $slug = Str::slug($category->name); @endphp
                <a href="{{ url('/?category=' . $slug) }}#filter-nav"
                class="flex items-center space-x-2 whitespace-nowrap px-4 py-2 rounded-full border 
                        {{ $activeSlug === $slug 
                                ? 'border-primary-700 bg-primary-700 text-white' 
                                : 'border-primary-700 bg-primary-700 text-white hover:bg-primary-800' }} 
                        transition">
                    <i class="{{ $category->icon->class }} text-sm"></i>
                    <span class="text-sm font-medium">
                        {{ $category->name }} ({{ $category->images_count }})
                    </span>
                </a>
            @endforeach
        </div>
    </div>

    @if(request('category'))
        <script>
            window.addEventListener('load', function() {
                const el = document.getElementById('filter-nav');
                if (el) el.scrollIntoView({ behavior: "smooth", block: "start" });
            });
        </script>
    @endif

    {{-- Image gallery --}}
    <div id="image-container" class="w-3/4 mx-auto columns-2 md:columns-3 gap-4 space-y-4 mt-8">
        @include('partials.images', ['images' => $initialImages])
    </div>

    {{-- Load More button --}}
    <div id="load-more-container" class="text-center py-4">
        @if($initialImages->hasMorePages())
            <button id="load-more-btn" data-next-page="{{ $initialImages->nextPageUrl() }}" class="px-4 py-2 bg-primary-700 text-white rounded">
                Load More
            </button>
        @endif
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
$(document).ready(function () {
    let loading = false;
    let currentCategory = "{{ $activeSlug ?? '' }}"; // maintain current filter globally

    function loadImages(page = 1, category = currentCategory, append = false) {
        if (loading) return;
        loading = true;
        $('#load-more-btn').text('Loading...');

        $.get('/images', { page, category }, function(data){
            if(append){
                $('#image-container').append(data.html);
            } else {
                $('#image-container').html(data.html);
            }

            // update next page globally
            if(data.nextPageUrl){
                $('#load-more-btn').data('next-page', data.nextPageUrl).text('Load More');
                $('#load-more-container').show();
            } else {
                $('#load-more-container').hide();
            }

            loading = false;
        });
    }

    // Load More click
    $(document).on('click', '#load-more-btn', function () {
        const url = $(this).data('next-page');
        if(url) {
            const page = new URL(url).searchParams.get('page');
            loadImages(page, currentCategory, true);
        }
    });

    // Infinite scroll
    $(window).scroll(function () {
        if ($(window).scrollTop() + $(window).height() >= $(document).height() - 100) {
            const nextUrl = $('#load-more-btn').data('next-page');
            if(nextUrl){
                const page = new URL(nextUrl).searchParams.get('page');
                loadImages(page, currentCategory, true);
            }
        }
    });

    // Category filter click
    $(document).on('click', '.scroll-pills a', function(e){
        e.preventDefault();
        currentCategory = $(this).data('slug'); // update global category

        // update active class
        $('.scroll-pills a').removeClass('border-primary-700').addClass('hover:bg-primary-800');
        $(this).addClass('border-primary-700 bg-primary-700 text-white');

        loadImages(1, currentCategory, false);
    });
});

</script>



@endsection
