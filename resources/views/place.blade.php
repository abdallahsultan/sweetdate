@extends('layouts.website')

@section('content')
<style>

    .owl-carousel.owl-loaded {

        margin-bottom: 150px;
    }

    .date_lm_type_i_item,
    .date_lm_type_i_item img{
        max-height: 600px;
    }

</style>
    <div class="date_slider date_slider_inside date_image_bck date_fixed date_wht_txt" data-stellar-background-ratio="0.3" data-image="{{ asset('images/slider/sl5.jpg') }}">

        <div class="date_slider_firefly" data-total="30" data-min="1" data-max="3"></div>

        <div class="date_over" data-color="#000" data-opacity="0.8"></div>

        <div class="container">
            <div class="date_slide_txt date_slide_center_middle text-center">
                <img src="{{ asset('images/' . $setting->logo ) }}" alt="" height="180"><br>
                <div class="date_gold">{{ $setting->name }}</div>
                <div class="date_slide_subtitle"> @lang('site.place')</div>
            </div>
        </div>
    </div>


    <section id="date_content" class="date_content">


        <section class="date_section" id="products">

            <div class="container-fluid text-center">

                <h2 class="date_gold date_title_counter">@lang('site.place')</h2>


                <div class="date_slider_single date_wht_txt date_lm_type_i" data-dots="true" data-autoplay="true">

             


                    </div>

                </div>
                <!-- slider end -->

            </div>
            <!-- container end -->
        </section>
        <!-- section end -->



    </section>



    
@endsection
