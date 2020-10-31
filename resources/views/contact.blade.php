@extends('layouts.website')

@section('content')

<div class="date_slider date_slider_inside date_image_bck date_fixed date_wht_txt" data-stellar-background-ratio="0.3" data-image="{{ asset('images/slider/sl5.jpg') }}">

    <div class="date_slider_firefly" data-total="30" data-min="1" data-max="3"></div>

    <div class="date_over" data-color="#000" data-opacity="0.8"></div>

    <div class="container">
        <div class="date_slide_txt date_slide_center_middle text-center">
            <img src="{{ asset('images/' . $setting->logo ) }}" alt="" height="180"><br>
            <!-- <div class="date_gold">{{ $setting->name }}</div> -->
            <div class="date_gold"> @lang('site.contact')</div>
        </div>
    </div>
</div>



<!-- Content -->
<section id="date_content" class="date_content">



    <!-- section -->
    <section class="date_section  date_image_bck" id="date_content" data-image="{{ asset('images/main_back_bl.jpg') }}">

            <!-- Over -->
            <div class="date_over" data-color="#333" data-opacity="0"></div>

            <div class="container text-center">


                <div class="row">

                    <div class="col-md-9 date_animation_block date_map_hidden_top" data-bottom-top="transform:translate3d(0px, 80px, 0px)" data-top-bottom="transform:translate3d(0px, -80px, 0px)">
                       <div class="date_map_container">
                       <div class="date_over" data-color="#000" data-opacity="0.2"></div>
                       <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3622.229435459473!2d46.72819091500138!3d24.78759598408837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2efdd33fb34cad%3A0x9ea5f5a339c61d53!2zU3dlZXQgRGF0ZeKAjw!5e0!3m2!1sen!2sae!4v1601153755932!5m2!1sen!2sae" height="550" scrolling="no" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        
                        </div>
                    </div>

                    <div class="col-md-5 date_animation_block date_animation_abs_block date_posr date_image_bck" data-bottom-top="transform:translate3d(0px, 0px, 0px)" data-top-bottom="transform:translate3d(0px, 80px, 0px)">

                        <div class="date_over" data-color="#000" data-opacity="0.7"></div>

                        <div class="date_parallax_menu date_image_bck date_fixed">
                            <h2 class="date_gold date_title_counter">@lang('site.contact')</h2>
                            <div style="color: #e3cc6f;font-weight: bold;" class="row date_contacts_icons">
                                <i style="font-size: 20px;font-weight: bold;"  class="ti ti-location-pin"></i> {{ $setting->address  }}<br>
                                <i style="font-size: 20px;font-weight: bold;" class="ti ti-email"></i> {{ $setting->itemail}} <br>
                                <i style="font-size: 20px;font-weight: bold;" class="fa fa-whatsapp" aria-hidden="true"></i> {{ $setting->itphone}} <br>

                            </div>
                            <a style="    color: #e3cc6f;" href="mailto:{{ $setting->itemail}}" class="btn">@lang('site.contact') <i class="ti ti-email"></i></a>
                        </div>
                    </div>
                </div>
            </div>

    </section>


@endsection
