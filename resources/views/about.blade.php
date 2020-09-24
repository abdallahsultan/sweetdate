@extends('layouts.website')

@section('content')

    <div class="date_slider date_slider_inside date_image_bck date_fixed date_wht_txt" data-stellar-background-ratio="0.3" data-image="{{ asset('images/slider/sl5.jpg') }}">

        <div class="date_slider_firefly" data-total="30" data-min="1" data-max="3"></div>

        <div class="date_over" data-color="#000" data-opacity="0.8"></div>

        <div class="container">
            <div class="date_slide_txt date_slide_center_middle text-center">
                <img src="{{ asset('images/' . $setting->logo ) }}" alt="" height="180"><br>
                <div class="date_gold">{{ $setting->name }}</div>
                <div class="date_slide_subtitle"> @lang('site.ourstory')</div>
            </div>
        </div>
    </div>

    <section id="date_content" class="date_content">

        <section class="date_section date_section_no_overlay" id="story">
                <div class="date_over" data-color="#333" data-opacity="0.05"></div>
                <div class="container text-center">

                    <div class="row">
                        <div class="col-md-10 col-md-offset-2 date_animation_block" data-bottom-top="transform:translate3d(0px, 50px, 0px)" data-top-bottom="transform:translate3d(0px, -50px, 0px)">
                            <img src="{{ asset('images/' . $about->avatar) }}" alt="">
                        </div>

                        <div class="col-md-5 date_animation_block date_animation_abs_block date_posl date_image_bck" data-bottom-top="transform:translate3d(0px, 0px, 0px)" data-top-bottom="transform:translate3d(0px, 50px, 0px)" data-image="images/main_back.jpg">

                            <div class="date_over" data-color="#000" data-opacity="0.05"></div>

                            <div class="date_parallax_menu date_image_bck date_fixed">
                                <h2 class="date_gold date_title_counter">@lang('site.about')</h2>

                                {!! $about->body !!}

                            </div>
                        </div>
                    </div>

                </div>

        </section>

@endsection
