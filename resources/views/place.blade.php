@extends('layouts.website')

@section('content')

<div class="date_slider date_slider_inside date_image_bck date_fixed date_wht_txt" data-stellar-background-ratio="0.3" data-image="{{ asset('images/slider/sl5.jpg') }}">

    <div class="date_slider_firefly" data-total="30" data-min="1" data-max="3"></div>

    <div class="date_over" data-color="#000" data-opacity="0.8"></div>

    <div class="container">
        <div class="date_slide_txt date_slide_center_middle text-center">
            <img  src="{{ asset('images/' . $setting->logo ) }}" alt="" height="180"><br>
            <!-- <div class="date_gold">{{ $setting->name }}</div> -->
            <div class="date_slide_subtitle">@lang('site.place')</div>
            
        </div>
        
    </div>
</div>


   
        
<div class="date_slider date_slider_inside date_image_bck date_fixed date_wht_txt" data-stellar-background-ratio="0.3" data-image="{{ asset('images/slider/sl5.jpg') }}">

<div class="date_slider_firefly" data-total="30" data-min="1" data-max="3"></div>

<div class="date_over" data-color="#000" data-opacity="0.8"></div>

<div class="container text-center">
            
<div class="row vertical-align">
                 
                   
                 <div class="col-sm-6">
                 
                     <div class="date_slide_subtitle">@lang('site.indoor')</div>
                     
                     <a href="#" title=""><img src="{{asset('website/img/indoor.jpg')}}"style="height:351px"   class="img-responsive  img-thumbnail"></a>
                 </div>
                 <div class="col-sm-6">
                 
                     
                     <div class="date_slide_subtitle">@lang('site.outdoor')</div>
                   
                    
                     <a href="#" title=""><img src="{{asset('website/img/outdoor.jpg')}}" style="height:351px"  class="img-responsive img-thumbnail"></a>
                 </div>
         
     


     </div>

</div>
</div>






    <!-- Content End -->
   @endsection
