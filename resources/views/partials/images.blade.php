<div class="w-3/4 mx-auto columns-2 md:columns-3 gap-4 space-y-4 mt-8">
    {{-- resources/views/partials/images.blade.php --}}
    @foreach($images as $image)
        @foreach($image->getMedia('images') as $media)
            <img class="w-full rounded-lg" src="{{ $media->getUrl() }}" alt="" loading="lazy">
        @endforeach
    @endforeach
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $(document).ready(function () {
        let loading = false;

        function loadMore(url) {
            if (!url || loading) return;
            loading = true;
            $('#load-more-btn').text('Loading...');

            // extract category from nextPageUrl if exists
            const urlObj = new URL(url, window.location.origin);
            const category = urlObj.searchParams.get('category') || '';

            $.get('/images', { page: urlObj.searchParams.get('page') || 1, category: category }, function (data) {
                $('#image-container').append(data.html);

                if (data.nextPageUrl) {
                    $('#load-more-btn').data('next-page', data.nextPageUrl).text('Load More');
                } else {
                    $('#load-more-container').remove();
                }

                loading = false;
            });
        }

        // click Load More
        $(document).on('click', '#load-more-btn', function () {
            loadMore($(this).data('next-page'));
        });

        // infinite scroll
        $(window).scroll(function () {
            if ($(window).scrollTop() + $(window).height() >= $(document).height() - 100) {
                loadMore($('#load-more-btn').data('next-page'));
            }
        });

        // category filter
        $('.scroll-pills a').click(function(e){
            e.preventDefault();
            const urlObj = new URL($(this).attr('href'), window.location.origin);
            const category = urlObj.searchParams.get('category') || '';

            $.get('/images', { page: 1, category: category }, function(data){
                $('#image-container').html(data.html);

                if(data.nextPageUrl){
                    if($('#load-more-btn').length){
                        $('#load-more-btn').data('next-page', data.nextPageUrl).text('Load More');
                    } else {
                        $('#load-more-container').html('<button id="load-more-btn" data-next-page="'+data.nextPageUrl+'" class="px-4 py-2 bg-primary-700 text-white rounded">Load More</button>');
                    }
                } else {
                    $('#load-more-container').remove();
                }
            });
        });
    });

            
</script>
