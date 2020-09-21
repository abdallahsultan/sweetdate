@extends('layouts.website')

@section('content')

<div class="date_slider date_slider_inside date_image_bck date_fixed date_wht_txt" data-stellar-background-ratio="0.3" data-image="{{ asset('images/slider/sl5.jpg') }}">

    <div class="date_slider_firefly" data-total="30" data-min="1" data-max="3"></div>

    <div class="date_over" data-color="#000" data-opacity="0.8"></div>

    <div class="container">
        <div class="date_slide_txt date_slide_center_middle text-center">
            <img src="{{ asset('images/' . $setting->logo ) }}" alt="" height="180"><br>
            <div class="date_gold">{{ $setting->name }}</div>
            <div class="date_slide_subtitle"> @lang('site.contact')</div>
        </div>
    </div>
</div>



<!-- Content -->
<section id="date_content" class="date_content">



    <!-- section -->
    <section class="date_section date_section_no_overlay">

            <!-- Over -->
            <div class="date_over" data-color="#333" data-opacity="0"></div>

            <div class="container text-center">


                <div class="row">

                    <div class="col-md-9 date_animation_block date_map_hidden_top" data-bottom-top="transform:translate3d(0px, 80px, 0px)" data-top-bottom="transform:translate3d(0px, -80px, 0px)">
                       <div class="date_map_container">
                            <iframe src="https://www.google.com/maps/d/embed?mid=1qYBan_Y7JRs04UzG89oa0WUnaMQ60zf1" height="680" scrolling="no"></iframe>
                        </div>
                    </div>

                    <div class="col-md-5 date_animation_block date_animation_abs_block date_posr date_image_bck" data-bottom-top="transform:translate3d(0px, 0px, 0px)" data-top-bottom="transform:translate3d(0px, 80px, 0px)" data-image="images/main_back.jpg">

                        <div class="date_over" data-color="#000" data-opacity="0.05"></div>

                        <div class="date_parallax_menu date_image_bck date_fixed">
                            <h2 class="date_gold date_title_counter">@lang('site.contact')</h2>
                            <div class="row date_contacts_icons">
                                <i class="ti ti-location-pin"></i> {{ $setting->address  }}<br>
                                <i class="ti ti-email"></i> {{ $setting->itemail}} <br>
                                <i class="ti ti-mobile"></i> {{ $setting->itphone}} <br>

                            </div>
                            <a href="mailto:{{ $setting->itemail}}" class="btn">@lang('site.contact') <i class="ti ti-email"></i></a>
                        </div>
                    </div>
                </div>
            </div>

    </section>


@endsection
