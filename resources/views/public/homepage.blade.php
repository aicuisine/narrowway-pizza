@extends('layouts/public')

@section('content')
    <!-- slider_area-start -->
    @include('public/partials/slider')
    <!-- slider_area-end -->

    <!-- service_area-start -->
    @include('public/partials/service')
    <!-- service_area-end -->

    <!-- video_area_start -->
    @include('public/partials/video')
    <!-- video_area_end -->

    <!-- order_area_start -->
    @include('public/partials/order')
    <!-- order_area_end -->

    <!-- testmonial_area_start -->
    @include('public/partials/testimonials')
    <!-- testmonial_area_end -->

    <!-- brand_area-start -->
    @include('public/partials/brand')
    <!-- brand_area-end -->
@endsection