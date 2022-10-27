@extends('layouts/public')

@section('content')
    <!-- breadcam_area_start -->
    <div class="breadcam_area breadcam_bg_1 zigzag_bg_2">
            <div class="breadcam_inner">
                <div class="breadcam_text">
                    <h3>About Us</h3>
                    <p>inappropriate behavior is often laughed off as “boys will be boys,” women <br> face higher conduct standards especially in the workplace. That’s why it’s <br> crucial that, as women.</p>
                </div>
            </div>
    </div>
    <!-- breadcam_area_end -->

    <!-- single_about_area_start -->
    <div class="single_about_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-5">
                    <div class="single_about_text">
                        <h3>Daily Food <br>
                            Courses <br>
                            with Drinks </h3>
                            <p class="about_text1">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                            <p class="about_text2">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                            </p>
                            <a href="#" class="boxed_btn">View Menu</a>
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-lg-6 offset-lg-1">
                    <div class="single_about_thumb thumb_n1">
                        <img src="img/about/1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- single_about_area_end -->

    <!-- video_area_start -->
    @include('public/partials/video')
    <!-- video_area_end -->

    <!-- single_about_area_start -->
    <div class="single_about_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="single_about_thumb thumb_n2">
                        <img src="img/about/2.png" alt="">
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-5 offset-lg-1">
                    <div class="single_about_text">
                        <h3>Daily Food <br>
                            Courses <br>
                            with Drinks </h3>
                            <p class="about_text1">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                            <p class="about_text2">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                            </p>
                            <a href="#" class="boxed_btn">View Menu</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- single_about_area_end -->
    
    <!-- testmonial_area_start -->
    @include('public/partials/testimonials')
    <!-- testmonial_area_end -->

    <!-- brand_area-start -->
    @include('public/partials/brand')
    <!-- brand_area-end -->
@endsection