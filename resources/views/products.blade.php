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
/*     
.flip-box {
  background-color: transparent;
  width: 300px;
  height: 200px;
  border: 1px solid #f1f1f1;
  perspective: 1000px;
}

.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);
}

.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-box-front {
  background-color: #bbb;
  color: black;
}

.flip-box-back {
  background-color: #555;
  color: white;
  transform: rotateY(180deg);
} */

</style>
    <div class="date_slider date_slider_inside date_image_bck date_fixed date_wht_txt" data-stellar-background-ratio="0.3" data-image="{{ asset('images/slider/sl5.jpg') }}">

        <div class="date_slider_firefly" data-total="30" data-min="1" data-max="3"></div>

        <div class="date_over" data-color="#000" data-opacity="0.8"></div>

        <div class="container">
            <div class="date_slide_txt date_slide_center_middle text-center">
                <img src="{{ asset('images/' . $setting->logo ) }}" alt="" height="180"><br>
                <div class="date_gold">{{ $setting->name }}</div>
                <div class="date_slide_subtitle"> @lang('site.menu')</div>
            </div>
        </div>
    </div>


    <section id="date_content" class="date_content">


        <section class="date_section" id="products" style="background:url(../images/menucover.jpg);">
        <div class="date_slider_firefly" data-total="30" data-min="1" data-max="3"></div>

<div class="date_over" data-color="#000" data-opacity="0.8"></div>
            <div class="container-fluid text-center">

                <h2 class="date_gold date_title_counter">@lang('site.menu')</h2>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                <div class="tab" style=" text-align: -webkit-center; ">
                      
               
                      @foreach ($pcategory as $key => $value)
                      
              
                    <button class="tablinks btn success" style="   background: linear-gradient(-12deg,#ffffff85, transparent, #ffffffa3);color: white;border-radius: 12px;font-weight: bold; font-size: larger;"  onclick="openCity(event, {{$value->id}})">{{$value->translate(Config::get('app.locale'))->title}}</button>
                         
                       
                    @endforeach
                    
                   
                    <!-- <button class="tablinks active btn success" style=" background: linear-gradient(-12deg,#e3cc6f, black, #e3cc6f);color: white;border-radius: 12px; font-weight: bold; font-size: larger;" onclick="openCity(event, 'all')">@lang('site.all_parts')</button> -->
                         
                          
                           
                     </div>      
                                
                
                    <div class="row">

                      
                     
                     <div class="col-md-12" style="margin-left:10%"  >

                       
                        @for( $i = 1 ; $i < 10 ; $i++ )
                      <div id="{{$i}}" class="tabcontent">
                    
                        @foreach ($products as $product)
                        @if($product->pcategory_id == $i)
                        <div class="w3-card col-lg-3"  style="color: white;background: #00000085; height: 400px;margin:10px" >
                        
                                <img class="zoom" src="{{ asset('images/' . $product->avatar ) }}" alt="" style="width:100%; height: 200px;">
                              
                               
                               
                            <div class="w3-container">
                            <h3>{{$product->price}} &nbsp;&nbsp; {{$product->calory}}</h3>
                                <h4><b>{{$product->title}}</b></h4>
                                
                               
                                
                                
                               
                                <p>{{ strip_tags($product->body) }} </p>
                                
                            </div>
                         </div>
                        @endif
                        @endforeach
                        
                        </div>
                        @endfor




                     </div>
                     
                  
                </div>
                
              
               

                
               
            
                <!-- slider end -->

            </div>
            <!-- container end -->
        </section>
        <!-- section end -->



    </section>


<script>


function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
@endsection
