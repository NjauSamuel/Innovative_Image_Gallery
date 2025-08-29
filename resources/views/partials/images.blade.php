{{-- resources/views/partials/images.blade.php --}}
@foreach($images as $image)
    @foreach($image->getMedia('images') as $media)
        <img class="w-full rounded-lg" src="{{ $media->getUrl() }}" alt="" loading="lazy">
    @endforeach
@endforeach

