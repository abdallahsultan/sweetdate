@extends('layouts.website')

@section('content')

<div class="date_slider date_slider_inside date_image_bck date_fixed date_wht_txt" data-stellar-background-ratio="0.3" data-image="{{ asset('images/slider/sl5.jpg') }}">

    <div class="date_slider_firefly" data-total="30" data-min="1" data-max="3"></div>

    <div class="date_over" data-color="#000" data-opacity="0.8"></div>

    <div class="container">
        <div class="date_slide_txt date_slide_center_middle text-center">
            <img src="{{ asset('images/' . $setting->logo ) }}" alt="" height="180"><br>
            <!-- <div class="date_gold">{{ $setting->name }}</div> -->
            <div class="date_gold">@lang('site.menu_catalog')</div>
            
        </div>
        
    </div>
</div>


    

        
<section id="date_content" class="date_content" >
<section class="date_section  date_image_bck" id="date_content" data-image="{{ asset('images/main_back_bl.jpg') }}">

<script>

        var iOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
        if (iOS && top.location!= self.location) {
            top.location = self.location.href;
        }
    </script>
    <!-- Bootstrap Core CSS -->
    <!-- <link rel="stylesheet" href="{{asset('website/magazine/css/bootstrap.min.css')}}" type="text/css"> -->

    <!-- Custom Fonts -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'> -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'> -->
    <!-- <link rel="stylesheet" href="{{asset('website/magazine/css/font-awesome.min.css')}}" type="text/css"> -->

    <!-- Plugin CSS -->
    <!-- <link rel="stylesheet" href="{{asset('website/magazine/css/animate.min.css')}}" type="text/css"> -->

    <!-- Custom CSS -->
    <!-- <link rel="stylesheet" href="{{asset('website/magazine/css/creative.css')}}" type="text/css"> -->
    
   
    <section id="services" >
        
        <div class="container">
                <div class="row">
            
                <div id='book3-trigger' class=" col-md-6 text-center">
                        <div class="service-box">
                        <h2 class="date_gold date_title_counter">@lang('site.drinksmenu')</h2>
                            <img  class='book-thumb img-thumbnail' src="{{asset('images/menu/ar/drinks/menu.jpg')}}"  />
                            
                            
                        </div>
                    </div>
            
                
                <div id='book4-trigger' class=" col-md-6 text-center">
                        <div class="service-box">
                        <h2 class="date_gold date_title_counter">@lang('site.foodmenu')</h2>
                            <img  class='book-thumb img-thumbnail' src="{{asset('images/menu/ar/food/menu.jpg')}}"  />
                            
                            
                        </div>
                    </div>

                </div>
            </div>
    </section>

   

    <section id="contact">
    </section>

    <div style='display: none'>
        <div id='book1'>
            
        </div>
        <div id='book2'></div>
        <div id='book3'>
            <div>
                <img src="{{asset('images/menu/ar/drinks/menu.jpg')}}" class='wowbook-lazy' />
            </div>
            <div>
                <img src="{{asset('images/menu/ar/drinks/menu1.jpg')}}" class='wowbook-lazy' />
            </div>
            <div>
                <img src="{{asset('images/menu/ar/drinks/menu2.jpg')}}" class='wowbook-lazy' />
            </div>
            <div>
                <img src="{{asset('images/menu/ar/drinks/menu3.jpg')}}" class='wowbook-lazy' />
            </div>
            <div>
                <img src="{{asset('images/menu/ar/drinks/menu.jpg')}}" class='wowbook-lazy' />
            </div>
            <div>
                <img src="{{asset('images/menu/ar/drinks/menu.jpg')}}" class='wowbook-lazy' />
            </div>
        </div>
        <div id='book4'>
            <div>
                <img src="{{asset('images/menu/ar/food/menu.jpg')}}" class='wowbook-lazy' />
            </div>
            <div>
                <img src="{{asset('images/menu/ar/food/menu1.jpg')}}" class='wowbook-lazy' />
            </div>
            <div>
                <img src="{{asset('images/menu/ar/food/menu2.jpg')}}" class='wowbook-lazy' />
            </div>
          
            <div>
                <img src="{{asset('images/menu/ar/food/menu.jpg')}}" class='wowbook-lazy' />
            </div>
        </div>
        <img src="{{asset('images/menu/ar/food/menu.jpg')}}" style='visibility: hidden' />
    </div>
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
            /* height: -webkit-fill-available; */
            box-shadow: 0 0 3px rgba(0, 0, 0, 0.5)

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
		hr {
			max-width: 450px;
		}
	</style>

   

    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="{{asset('website/magazine/js/bootstrap.min.js')}}"></script> -->

    <!-- Plugin JavaScript -->
    <!-- <script src="{{asset('website/magazine/js/jquery.easing.min.js')}}"></script> -->
    <!-- <script src="{{asset('website/magazine/js/jquery.fittext.js')}}"></script> -->
    <!-- <script src="{{asset('website/magazine/js/wow.min.js')}}"></script> -->

    <!-- Custom Theme JavaScript -->
    <!-- <script src="{{asset('website/magazine/js/creative.js')}}"></script> -->

    <link rel="stylesheet" href="{{asset('website/magazine/css/wow_book.css')}}" type="text/css" />
	<style>
		.wowbook-right .wowbook-gutter-shadow {
			background-image: url("https://previews.customer.envatousercontent.com/files/251648489/img/page_right_background.png");
			background-position: 0 0;
			width: 75px;
		}
		.wowbook-left .wowbook-gutter-shadow {
			background-image: url("https://previews.customer.envatousercontent.com/files/251648489/img/page_left_background.png");
			opacity: 0.5;
			width: 60px;
		}
        .wowbook-control-currentPage {
            font-family: "Segoe UI",Helvetica,Arial,sans-serif;
        }
	</style>
    <!-- <script type="text/javascript" src="{{asset('website/magazine/js/pdf.combined.min.js')}}"></script> -->
    
    
</section>

</section>


@endsection