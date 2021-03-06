@extends('layouts.website')


@section('content')

<div class="date_slider date_image_bck date_fixed date_wht_txt" data-stellar-background-ratio="0.3" data-image="{{ asset('images/' . $slider->avatar) }}">
    <div class="date_slider_firefly" data-total="30" data-min="1" data-max="3"></div>

    <div class="date_over" data-color="#000" data-opacity="0.8"></div>

    <div class="container">

        <div class="date_slide_txt date_slide_center_middle text-center">
            <img src="images/logo.png" alt="" height="180"><br>
            <div class="date_gold date_title_animation">Sweet Date</div>
        
            <!-- <div class="date_slide_subtitle">{{ strip_tags($slider->body) }}</div> -->
        </div>

    </div>

    <a class="date_scroll_down date_go" href="#date_content"> <b></b> <i class="ti ti-angle-down"></i> </a>


</div>



    <section class="date_section  date_image_bck" id="date_content" data-image="{{ asset('images/main_back_bl.jpg') }}">
    <!-- <div class="date_over" data-color="#111" data-opacity="0.05"></div> -->

                <div class="container text-center">

                    <div class="row">
                        <div class="col-md-10 col-md-offset-2 date_animation_block" data-bottom-top="transform:translate3d(0px, 50px, 0px)" data-top-bottom="transform:translate3d(0px, -50px, 0px)">
                       
                       
                        <video  loop  autoplay muted  class="img-thumbnail"  >
                            <source src="{{ asset('images/videosotry.mp4') }}" type="video/mp4">
                            <source src="movie.ogg" type="video/ogg">

                            </video>
                            <!-- <img src="{{ asset('images/' . $story->avatar) }}" alt=""> -->
                        </div>

                        <div class="col-md-5 date_animation_block  date_animation_abs_block date_posl date_image_bck" data-bottom-top="transform:translate3d(0px, 0px, 0px)" data-top-bottom="transform:translate3d(0px, 50px, 0px)" style="background:#00000070" >

                            
                        <div class="date_parallax_menu date_image_bck date_fixed date_wht_txt">
                            <h2 class="date_gold date_title_animation">@lang('site.ourstory')</h2>
                            <p style="color: #e3cc6f;"><b>{{ strip_tags($about->body) }}</b></p>
                            
                            <a href="{{ route('ourstory')}}" style="    border: 2px solid #e3cc6f;border-radius: 4px; font-weight: bold; color:#ffffff;" class="btn"> @lang('site.view_more') <i class="ti ti-arrow-circle-right"></i></a>

                        </div>
                    </div>

                </div>

    </section>
    <style>
		
	
	
		@media (min-width: 768px) {
			#nav-buy-now {
				margin-right: 0px;
			}
		}
		#bs-example-navbar-collapse-1 {
			display: none;
		}

		.wowbook {
			font-family: "Open Sans","Helvetica Neue",Arial,sans-serif;
		}
		.wowbook-page-content {
			padding: 1.5em;
		}
		.wowbook ul {
			padding-left: 1em;
		}
        .book-thumb {
            height: 350px;
            box-shadow:6px 6px 0px 0px rgb(227 204 111 / 63%);

        }

		#book1-trigger, #book2-trigger, #book3-trigger ,#book4-trigger {
			cursor: pointer;
		}
		#book1-trigger:hover, #book2-trigger:hover, #book3-trigger:hover  #book4-trigger:hover {
			background: #f8f8f8;
		}

        .wowbook-lightbox > .wowbook-close {
            background: transparent !important;
            border: none !important;
            color: #222 !important;
            font-size: 2.5em;
        }
        .wowbook-lightbox > .wowbook-close:hover {
            background: #444 !important;
            color: white !important;
            border-radius: 3px;
        }


        .lightbox-images1 .wowbook-book-container {
            background: #6d6b92; /* Old browsers */
            background: -moz-radial-gradient(center, ellipse cover, #ffffff 0%, #6d6b92 100%); /* FF3.6-15 */
            background: -webkit-radial-gradient(center, ellipse cover, #ffffff 0%,#6d6b92 100%); /* Chrome10-25,Safari5.1-6 */
            background: radial-gradient(ellipse at center, #ffffff 0%,#6d6b92 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        }
        .lightbox-images1 > .wowbook-close,
        .lightbox-images2 > .wowbook-close {
            color: #ccc !important;
        }
        .lightbox-images2 .wowbook-book-container {
            background: #1E2831; /* Old browsers */
            background: -moz-radial-gradient(center, ellipse cover, #ffffff 0%, #1E2831 100%); /* FF3.6-15 */
            background: -webkit-radial-gradient(center, ellipse cover, #ffffff 0%,#1E2831 100%); /* Chrome10-25,Safari5.1-6 */
            background: radial-gradient(ellipse at center, #ffffff 0%,#1E2831 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        }



		.lightbox-pdf  .wowbook-book-container {
			background: #e5e5e5 url(https://previews.customer.envatousercontent.com/files/251648489/img/bg-lightbox-pdf.png); /* Old browsers */
			background: #e5e5e5 -moz-radial-gradient(center, ellipse cover, #ffffff 20%, #bbbbbb 100%); /* FF3.6-15 */
			background: #e5e5e5 -webkit-radial-gradient(center, ellipse cover, #ffffff 20%,#bbbbbb 100%); /* Chrome10-25,Safari5.1-6 */
			background: #e5e5e5 radial-gradient(ellipse at center, #ffffff 20%,#bbbbbb 100%); /* W3C, IE10+, FF16+, Chrome26+,Opera12+, Safari7+*/
		}


		.lightbox-html  .wowbook-book-container {
			background: url(https://previews.customer.envatousercontent.com/files/251648489/img/book_html/wood.jpg);
		}
		.lightbox-html .wowbook-toolbar {
			margin-top: 1em; /* FIXME */
			box-sizing: content-box !important;
		}

		.lightbox-html .wowbook-controls {
			border-radius: 6px;
			width: auto;
		}

		.lightbox-html.wowbook-mobile .wowbook-toolbar {
			margin: 0;
		}

		.lightbox-html.wowbook-mobile .wowbook-controls {
			border-radius: 0;
			width: 100%;
		}
      

        /*		.lightbox-html .wowbook-controls {
                    border-radius: 6px;
                    width: auto;
                    background: none;
                    color: rgba(60, 20, 20, 0.8);
                    text-shadow: 0 1px 0 #fff;
                    box-shadow: none;
                }
                .lightbox-html .wowbook-control:hover {
                    background: none;
                    color: white;
                    text-shadow: 0 1px 0 #fff, 0 0px 5px rgba(60, 20, 20, 1);
                    text-shadow: 0 1px 0 #fff, 0 0px 3px #fff;
                }
        */
        .zoom {
        
        
        transition: transform 1.1s; /* Animation */
        width: 200px;
        height: 200px;
        margin: 0 auto;
        }

        .zoom:hover {
            transform: scale(1.1);
            border: 2px solid #e3cc6fa8; /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }
        .tabsmenu{
            
            margin-left: 10px;
                background: linear-gradient(0deg,#ffffff52, transparent, #ffffff52);
                color: white;
                border-radius: 12px;
                font-weight: bold; 
                
        }
	</style>

    @if (count($products) > 1)

    <link rel="stylesheet" href="{{ asset('website/css/sulo.css') }}">
    <section class="date_section" id="products" style="background:url(images/menucover.jpg);">
      

      <div class="date_over" data-color="#000" data-opacity="0.8"></div>
   

        <div class="container-fluid text-center">

            <h2 class="date_gold date_title_counter"> @lang('site.menu') </h2>


            <div class="row">
 
            <div class="col-md-12 menu_center"   >
               @php $count=1; @endphp
                @foreach ($products as $product)

                @if($count < 7)
                <div class="w3-card col-lg-3"  style="color: white;background: #00000085; height: 400px;margin:10px" >
                        
                        <img class="zoom" src="{{ asset('images/' . $product->avatar ) }}" alt="" style="width:100%; height: 200px;">
                      
                       
                       
                    <div class="w3-container">
                    <h3 style="color: #e3cc6f;">{{$product->price}} &nbsp;&nbsp; {{$product->calory}}</h3>
                        <h4 style="color: #e3cc6f;"><b>{{$product->title}}</b></h4>
                        
                       
                        
                        
                       
                        <p>{{ strip_tags($product->body) }} </p>
                        
                    </div>
                 </div>
                 @endif
                 @php $count+=1; @endphp
                @endforeach

              
                </div>
                <div class="col-md-12">
              <a class="tablinks active btn success" href="{{route('menu')}}" style="border: 2px solid #e3cc6f;border-radius: 4px; font-weight: bold; color:#ffffff;" >@lang('site.show_more') <i class="ti ti-list"></i></a>
              </div>
                </div>
               <br>
               <br>

        </div>
    </section>

    @endif
        

                


       




    <!-- <section class="date_section ">

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

    <section class="date_section date_image_bck" data-image="{{ asset('images/darksection2.jpg') }}">

        <div class="container text-center">
            <h2 class="date_gold date_title_counter">@lang('site.events')</h2>

            <div class="date_reviews_single date_wht_txt " data-dots="true" data-autoplay="false">

                @foreach ($lprojects as $event)

                <div class="date_reviews_item">
                    <a style="text-decoration:none;" href="{{ route('eventdetails', $event->id ) }}">
                    <div class="event_box">
                   
                    <img class="img-thumbnail" style="    height:350px;" src="{{ asset('images/'  . $event->avatar ) }}" alt=""> 
                    <br>
                    <h3> {{ $event->title }} </h3>
                    <br>
                    <blockquote style="color: #e3cc6f;border-left: none;" class="wp-block-quote">
                    
                    {{ strip_tags(substr($event->body,0,200)) }}
                </blockquote>
                     
                    </div>
                    </a>
                </div>

                @endforeach
            </div>

        </div>

    </section>

    @endif

    @if (count($tests) > 1)

    <section class="date_section ">

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
    
   


    <section class="date_section  date_image_bck" data-image="{{ asset('images/main_back_bl.jpg') }}">
    <!-- <div class="date_over" data-color="#111" data-opacity="0.05"></div> -->

                <div class="container text-center">

                    <div class="row">
                    <div class="col-md-10 col-md-offset-2 date_animation_block" data-bottom-top="transform:translate3d(0px, 80px, 0px)" data-top-bottom="transform:translate3d(0px, -80px, 0px)">
                        <img src="{{ asset('images/team/teams.jpg') }}" class="img-thumbnail" alt="" style="width: 100%;">
                    </div>

                        <div class="col-md-5 date_animation_block  date_animation_abs_block date_posl date_image_bck" data-bottom-top="transform:translate3d(0px, 0px, 0px)" data-top-bottom="transform:translate3d(0px, 50px, 0px)" style="background:#00000070" >

                            
                        <div class="date_parallax_menu date_image_bck date_fixed date_wht_txt">
                            <h2 class="date_gold date_title_counter">@lang('site.team')</h2>

                            <p style="color: #e3cc6f;font-weight: bold;">@lang('site.ourteamtext')</p>
                            <!-- <a href="{{ route('ourstory')}}" class="btn"> @lang('site.view_more') <i class="ti ti-truck"></i></a> -->

                        </div>
                    </div>

                </div>
            </div>

    </section>


    <!-- @if (count($teams) > 0)
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
   @endif -->


    @if (count($partners) > 0)

    <section class="date_section partner_section date_image_bck" data-image="{{ asset('images/darksection4.jpg') }}">

        <div style="width: 75%;" class="container text-center">
            <h2 class="date_gold date_title_counter">@lang('site.partners')</h2>
            
            <div class="row">
                <div class="date_slider_partners date_wht_txt date_lm_type_i" data-dots="false" data-autoplay="true">

                    @foreach ($partners as $partner)
                    <div class="col-md-4">
                    <div class="date_lm_type_i_item "style="padding: 0px 15px;">
                        <img  src="{{ asset('images/'  . $partner->avatar ) }}" style="width:150px;padding: 0px 15px;" alt="">
                    </div>
                    <div class="date_lm_type_i_item ">
                        
                    </div>
                    </div>
                   

                    @endforeach
                </div>

            </div>

            
        </div>

    </section>

    @endif

  @endsection
