@extends('layouts.website')

@section('content')

<style>
    .date_lm_type_i_item {
        margin-bottom: 60px;
        max-height: 600px;
    }
    .owl-carousel .owl-item img {
        transform-style: preserve-3d;
        height: 100%;
        max-height: 600px;
    }
</style>
<div class="date_slider date_slider_inside date_image_bck date_fixed date_wht_txt" data-stellar-background-ratio="0.3" data-image="{{ asset('images/slider/sl5.jpg') }}">

    <div class="date_slider_firefly" data-total="30" data-min="1" data-max="3"></div>

    <div class="date_over" data-color="#000" data-opacity="0.8"></div>

    <div class="container">
        <div class="date_slide_txt date_slide_center_middle text-center">
            <img src="{{ asset('images/' . $setting->logo ) }}" alt="" height="180"><br>
            <!-- <div class="date_gold">{{ $setting->name }}</div> -->
            <div class="date_gold">  @lang('site.events')</div>
        </div>
    </div>
</div>


    <section id="date_content" class="date_content">

    <section class="date_section  date_image_bck" id="date_content" data-image="{{ asset('images/darksection.jpg') }}">

            <div class="container text-center">
                <h2 class="date_gold">  {{ $blog->title  }}</h2>
                <div class="col-md-6">
               <blockquote style=" text-align: initial;   color: #e3cc6f;" class="wp-block-quote">
                    {!! $blog->body !!}
                </blockquote>
               </div>
               <div class="col-md-6">
               <img class="img-thumbnail" src="{{ asset('images/' . $blog->avatar ) }}" alt="image">
               </div>
               
               

               

            </div>


        </section>


    </section>

    @php $photos = explode('/', $blog->gallery);  @endphp
    @if ( $photos)


    <section class="date_section  date_image_bck" id="date_content" data-image="{{ asset('images/darksection.jpg') }}">

                <div class=" text-center">
                    <h2 class="date_gold">@lang('site.egallery')</h2>
                    <div class="date_slider_single date_slider_single_wm date_wht_txt date_lm_type_i" data-dots="false" data-autoplay="true">

                        @php $photos = explode('/', $blog->gallery);  @endphp


                        @foreach ($photos as $photo)

                        <div class="date_lm_type_i_item">
                            <img src="{{ asset('images/' . $photo ) }}" alt="">
                        </div>

                        @endforeach

                    </div>

                </div>

            </section>

          @endif


            @if ($blog->video)


            <section class="date_section  date_image_bck" id="date_content" data-image="{{ asset('images/darksection.jpg') }}">

                <div class=" text-center">
                    <h2 class="date_gold">@lang('site.evideo')</h2>

                        <video  width="620" height="420" controls style="margin: 0 auto;" poster="{{ asset('images/' . $blog->avatar) }}">
                            <source src="{{ asset('images/' . $blog->video ) }}" type="video/mp4">
                            <source src="{{ asset('images/' . $blog->video ) }}" type="video/ogg">
                          </video>

                    </div>
                </section>
        @endif


@endsection
