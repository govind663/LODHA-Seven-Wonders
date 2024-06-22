@extends('frontend.layouts.master')

@section('title')
    Home | Lodha, Seven Wonders
@endsection

@push('styles')
@endpush

@section('content')
    <div class="home_page" id="home">
        <!-- Carousel Section Start -->
        <x-carousel />
        <!-- Carousel Section End -->

        <!-- About Section Start -->
        <x-about />
        <!-- About Section End -->

        <!-- Highlight Section Start -->
        <x-highlight />
        <!-- Highlight Section End -->

        <!-- Price Section Start -->
        <x-price />
        <!-- Price Section End -->

        <!-- Floor Section Start -->
        <x-floor />
        <!-- Floor Section End -->

        <!-- Amenities Section Start -->
        <x-amenities />
        <!-- Amenities Section End -->

        <!-- Location Section Start -->
        <x-location />
        <!-- Location Section End -->

        <!-- Gallary Section Start -->
        {{-- <x-gallery /> --}}
        <!-- Gallary Section End -->

        <!-- Contact Us Section Start -->
        <x-contact-us />
        <!-- Contact Us Section End -->
    </div>
@endsection

@push('scripts')
@endpush
