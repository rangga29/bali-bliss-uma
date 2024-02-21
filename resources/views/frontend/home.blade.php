@extends('frontend.layouts.index')

@section('content')
    @include('frontend.home.home')
    @include('frontend.home.about')
    @include('frontend.home.video')
    @include('frontend.home.features')
    @include('frontend.home.flats')
    @include('frontend.home.gallery')
    @include('frontend.home.whoweare')
    @include('frontend.home.offer')
    @include('frontend.home.contact')
@endsection

@section('gallery-script')
    <script>
        let gallerySliderItems = [
            {
                src: '{{ asset('images/home_1.jpg') }}',
                w: 1080,
                h: 720
            },
            {
                src: '{{ asset('images/home_2.jpg') }}',
                w: 1080,
                h: 720
            },
            {
                src: '{{ asset('images/home_3.jpg') }}',
                w: 1080,
                h: 720
            },
            {
                src: '{{ asset('images/home_4.jpg') }}',
                w: 1080,
                h: 720
            },
            {
                src: '{{ asset('images/home_5.jpg') }}',
                w: 1080,
                h: 720
            }
        ];

        let galleryCarouselItems = [
            {
                src: '{{ asset('images/gallery/gallery_1.jpg') }}',
                w: 1100,
                h: 750
            },
            {
                src: '{{ asset('images/gallery/gallery_2.jpg') }}',
                w: 1100,
                h: 750
            },
            {
                src: '{{ asset('images/gallery/gallery_3.jpg') }}',
                w: 1100,
                h: 750
            },
            {
                src: '{{ asset('images/gallery/gallery_4.jpg') }}',
                w: 1100,
                h: 750
            },
            {
                src: '{{ asset('images/gallery/gallery_5.jpg') }}',
                w: 1100,
                h: 750
            },
            {
                src: '{{ asset('images/gallery/gallery_6.jpg') }}',
                w: 1100,
                h: 750
            },
            {
                src: '{{ asset('images/gallery/gallery_7.jpg') }}',
                w: 1100,
                h: 750
            },
            {
                src: '{{ asset('images/gallery/gallery_8.jpg') }}',
                w: 1100,
                h: 750
            }
        ];
    </script>
@endsection
