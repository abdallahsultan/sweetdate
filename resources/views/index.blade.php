@extends('layouts.website')


@section('content')

<div class="date_slider date_image_bck date_fixed date_wht_txt" data-stellar-background-ratio="0.3" data-image="{{ asset('images/' . $slider->avatar) }}">
    <div class="date_slider_firefly" data-total="30" data-min="1" data-max="3"></div>

    <div class="date_over" data-color="#000" data-opacity="0.8"></div>

    <div class="container">

        <div class="date_slide_txt date_slide_center_middle text-center">
            <img src="images/bbq/bbq_logo.png" alt="" height="180"><br>
            <div class="date_gold date_title_animation">Sweet Date</div>
            <!-- <div class="date_slide_subtitle">{{ strip_tags($slider->body) }}</div> -->
        </div>

    </div>

    <a class="date_scroll_down date_go" href="#date_content"> <b></b> <i class="ti ti-angle-double-down"></i> </a>


</div>

<section id="date_content" class="date_content">

    <section class="date_section date_section_no_overlay date_image_bck">


            <div class="date_over" data-color="#000" data-opacity="0.05"></div>

            <div class="container text-center">


                <div class="row">
                    <div class="col-md-10 date_animation_block" data-bottom-top="transform:translate3d(0px, 80px, 0px)" data-top-bottom="transform:translate3d(0px, -80px, 0px)">
                    <video loop autoplay muted="false"  id="vid" >
  <source src="{{ asset('images/videosotry.mp4') }}" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">

</video>
                    </div>
          
                    <div class="col-md-5 date_animation_block date_animation_abs_block date_posr date_image_bck" data-bottom-top="transform:translate3d(0px, 0px, 0px)" data-top-bottom="transform:translate3d(0px, 80px, 0px)" data-image="images/main_back_gr.jpg">

                        <div class="date_parallax_menu date_image_bck date_fixed date_wht_txt">
                            <h2 class="date_gold date_title_counter">@lang('site.ourstory')</h2>

                            <p>{{ strip_tags($story->body) }}</p>
                            <a href="{{ route('ourstory')}}" class="btn"> @lang('site.view_more') <i class="ti ti-truck"></i></a>

                        </div>
                    </div>
                </div>
            </div>
    </section>


    @if (count($services) > 1)

    <section class="date_section date_image_bck date_fixed date_section_no_overlay date_wht_txt" data-stellar-background-ratio="0.2" data-image="images/slider/sl13.jpg">


        <div class="date_over" data-color="#000" data-opacity="0.8"></div>

        <div class="container text-center">

            <h2 class="date_gold date_title_counter">@lang('site.services')</h2>

            <div class="date_icon_boxes date_team_slider">

                @foreach ($services as $service)

                <div class="date_news_block text-center">
                    <span class="date_news_img_parent"><span class="date_news_img date_image_bck" data-image="{{ asset('images/' . $service->avatar ) }}"></span></span>
                    <span class="date_gold date_title_animation" style="font-size:15px">{{ $service->title }}</span>
                    <span class="date_news_title date_gold_subtitle">{{ strip_tags($service->body) }}</span>

                </div>

                @endforeach

            </div>
        </div>


    </section>

    @endif

    @if (count($products) > 1)


    <section class="date_section">

        <div class="container-fluid text-center">

            <h2 class="date_gold date_title_counter"> @lang('site.products') </h2>


            <div class="date_slider_single date_wht_txt date_lm_type_i" data-dots="true" data-autoplay="true">

                @foreach ($products as $product)


                <div class="date_lm_type_i_item">
                    <img src="{{ asset('images/' . $product->avatar ) }}" alt="">

                    <div class="date_lm_type_i_item_desc date_lm_type_i_item_desc_left date_image_bck text-left" data-bottom-top="transform:translate3d(0px, 0px, 0px)" data-top-bottom="transform:translate3d(0px, -50px, 0px)" data-image="images/main_back_gr.jpg">

                        <div class="date_lm_type_i_item_desc_cont">
                            <h3 class="date_gold"> {{ $product->title }}</h3>

                            <p> {{ strip_tags($product->body) }} </p>

                        </div>
                    </div>
                </div>

                @endforeach

            </div>

        </div>
    </section>

    @endif


    <!-- <section class="date_section date_section_no_overlay">

            <div class="date_over" data-color="#333" data-opacity="0.05"></div>

            <div class="container text-center">


                <div class="row">
                    <div class="col-md-10 col-md-offset-2 date_animation_block" data-bottom-top="transform:translate3d(0px, 80px, 0px)" data-top-bottom="transform:translate3d(0px, -80px, 0px)">
                        <img src="{{ asset('images/' . $story->avatar) }}" alt="">
                    </div>

                    <div class="col-md-5 date_animation_block date_animation_abs_block date_posl date_image_bck" data-bottom-top="transform:translate3d(0px, 0px, 0px)" data-top-bottom="transform:translate3d(0px, 80px, 0px)" data-image="{{ asset('images/main_back_gr.jpg') }}">

                        <div class="date_over" data-color="#000" data-opacity="0.05"></div>

                        <div class="date_parallax_menu date_image_bck date_fixed date_wht_txt">
                            <h2 class="date_gold date_title_counter">@lang('site.ourstory')</h2>
                            <p>{{ strip_tags($story->body)}}.</p>

                        </div>

                    </div>
                </div>
            </div>
    </section> -->

    <!-- <section class="date_section date_image_bck date_fixed date_wht_txt" data-stellar-background-ratio="0.2" data-image="{{ asset('images/slider/sl13.jpg') }}" data-bottom-top="@data-animation:noactive" data-200-bottom="@data-animation:active">

        <div class="date_over" data-color="#000" data-opacity="0.6"></div>
        <div class="container text-center">

            <h2 class="date_gold date_title_counter">@lang('site.blogs')</h2>

            <div class="date_icon_boxes date_team_slider">

                @foreach ($blogs as $blog)

                <div class="date_news_block text-center">
                    <a href="{{ route('blogdetails', $blog->id )}}">
                    <span class="date_news_img_parent">
                        <span class="date_news_img date_image_bck" data-image="{{ asset('images/' . $blog->avatar ) }}"></span></span>
                    <span class="date_gold date_title_animation date_wht_txt"> {{ $blog->title  }}</span>
                    <span class="date_news_title date_gold_subtitle">{{ strip_tags(substr($blog->body,0,90))  }}</span>
                    </a>
                </div>

               @endforeach

            </div>

        </div>
    </section> -->


    @if (count($lprojects) > 0)

    <section class="date_section">

        <div class="container text-center">
            <h2 class="date_gold date_title_counter">@lang('site.events')</h2>

            <div class="date_slider_event date_wht_txt date_lm_type_i" data-dots="false" data-autoplay="true">

                @foreach ($lprojects as $event)

                <div class="date_lm_type_i_item">
                    <a href="">
                    <div class="event_box">
                    <img src="{{ asset('images/'  . $event->avatar ) }}" alt="">
                     <h3> {{ $event->title }} </h3>
                    </div>
                    </a>
                </div>

                @endforeach
            </div>

        </div>

    </section>

    @endif

    @if (count($tests) > 0)

    <section class="date_section date_section_no_overlay">

            <div class="date_over" data-color="#333" data-opacity="0.05"></div>

            <div class="container">

                <div class="row">
                    <div class="col-md-10 col-md-offset-2 date_animation_block" data-bottom-top="transform:translate3d(0px, 80px, 0px)" data-top-bottom="transform:translate3d(0px, -80px, 0px)">
                        <img src="{{ asset('images/coffee/photo-1442975631115-c4f7b05b8a2c.jpg') }}" alt="">
                    </div>

                    <div class="col-md-7 date_animation_block date_animation_abs_block date_posl date_image_bck date_wht_txt" data-bottom-top="transform:translate3d(0px, -80px, 0px)" data-top-bottom="transform:translate3d(0px, 0px, 0px)" data-image="images/main_back_gr.jpg">

                        <div class="date_parallax_menu date_image_bck date_fixed text-center">
                            <h2 class="date_gold date_title_counter">@lang('site.test')</h2>

                            <div class="date_reviews_single date_lm_type_i" data-dots="true" data-autoplay="true">

                                @foreach ($tests as $test)

                                <div class="date_reviews_item">
                                    <p> {{ strip_tags($test->body) }}</p>
                                    <svg class="svg-graphic" width="100" height="100" viewBox="0 0 100 100">
                                        <g>
                                           <clipPath id="hexagonal-mask">
                                              <polygon id="path-1" points="50 -0.787401575 85.9121161 14.0878839 100.787402 50 85.9121161 85.9121161 50 100.787402 14.0878839 85.9121161 -0.787401575 50 14.0878839 14.0878839 "></polygon>
                                              <text></text>
                                           </clipPath>
                                        </g>
                                         <image clip-path="url(#hexagonal-mask)" height="100px" width="100px" xlink:href="{{ asset('images/' . $test->avatar )}}" />
                                    </svg>

                                     <strong>{{ $test->title }}</strong>
                                </div>

                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </section>

    @endif


    @if (count($teams) > 0)
    <section class="date_section date_image_bck text-center date_wht_txt" data-image="images/main_back_bl.jpg">


            <div class="date_over" data-color="#333" data-opacity="0.05"></div>
            @if (count($teams) > 0)

                <div class="container text-center">
                    <h2 class="date_gold date_title_counter">@lang('site.teams')</h2>

                    <div class="date_slider_event date_wht_txt date_lm_type_i" data-dots="false" data-autoplay="true">

                        @foreach ($teams as $team)

                        <div class="date_lm_type_i_item">
                            <div class="date_news_block text-center">
                                <span class="date_news_img_parent"><span class="date_news_img date_image_bck" data-image="{{ asset('images/' . $team->avatar ) }}"></span></span>
                                <span class="date_gold date_title_animation">{{ $team->title }}</span>
                                <h3 class="team-job">{{ strip_tags($team->body) }}</h3>

                            </div>
                        </div>
                        @endforeach


                </div>

            </section>

            @endif

            </div>




   </section>
   @endif


    @if (count($partners) > 0)

    <section class="date_section partner_section">

        <div style="width: 80%;" class="container text-center">
            <h2 class="date_gold date_title_counter">@lang('site.partners')</h2>

            <div class="date_slider_partners date_wht_txt date_lm_type_i" data-dots="false" data-autoplay="true">

                @foreach ($partners as $partner)

                <div class="date_lm_type_i_item">
                    <img src="{{ asset('images/'  . $partner->avatar ) }}" alt="">
                </div>

                @endforeach
            </div>

        </div>

    </section>

    @endif
       @endsection
