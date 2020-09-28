@extends('layouts.website')

@section('content')
<style>
.display-bottommiddle{
    
}
.image_arro{
        background-image: url(../images/badge_mini.png); 
        position: absolute;
    top: 50%;
    left: 5%;
}
.image_arro2{
        background-image: url(../images/badge_mini.png); 
        position: absolute;
    top: 50%;
    right: 5%;
}
.priv-left{
    position: absolute;
    top: 50%;
    left: 5%;
    
}
.next-right{
    position: absolute;
    top: 50%;
    right: 5%;
    
}
.mySlides{
   height:351px;
 width:100%;

}
.mySlides2{
   height:351px;
 width:100%;

}
</style>


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
                     <div class="w3-content w3-display-container">
                     <img class="mySlides img-responsive img-thumbnail" src="{{asset('images/place/indoor/1.jpg')}}">
                    <img class="mySlides img-responsive img-thumbnail" src="{{asset('images/place/indoor/2.jpg')}}">
                    <img class="mySlides img-responsive img-thumbnail" src="{{asset('images/place/indoor/3.jpg')}}">
                    <img class="mySlides img-responsive img-thumbnail" src="{{asset('images/place/indoor/4.jpg')}}">
                    <img class="mySlides img-responsive img-thumbnail" src="{{asset('images/place/indoor/5.jpg')}}">
                    <img class="mySlides img-responsive img-thumbnail" src="{{asset('images/place/indoor/6.jpg')}}">
                    <img class="mySlides img-responsive img-thumbnail" src="{{asset('images/place/indoor/7.jpg')}}">
                    <img class="mySlides img-responsive img-thumbnail" src="{{asset('images/place/indoor/8.jpg')}}">
                    <img class="mySlides img-responsive img-thumbnail" src="{{asset('images/place/indoor/9.jpg')}}">
                    <img class="mySlides img-responsive img-thumbnail" src="{{asset('images/place/indoor/10.jpg')}}">
                        <div class="w3-center display-bottommiddle" style="width:100%">
                        <div class="priv-left" onclick="plusDivs2(-1)">&#10094;</div>
                        <div class="next-right" onclick="plusDivs2(1)">&#10095;</div>
                            <span class="w3-badge demo w3-border" onclick="currentDiv(1)"></span>
                            <span class="w3-badge demo w3-border" onclick="currentDiv(2)"></span>
                            <span class="w3-badge demo w3-border" onclick="currentDiv(3)"></span>
                        </div>
                        </div>

                     <!-- <a href="#" title=""><img src="{{asset('website/img/indoor.jpg')}}"   class="img-responsive  img-thumbnail"></a> -->
                 </div>
                 <div class="col-sm-6">
                 
                     
                     <div class="date_slide_subtitle">@lang('site.outdoor')</div>
                   
                     <div class="w3-content w3-display-container">
                     <img class="mySlides2 img-responsive img-thumbnail" src="{{asset('images/place/outdoor/1.jpg')}}">
                    <img class="mySlides2 img-responsive img-thumbnail" src="{{asset('images/place/outdoor/2.jpg')}}">
                    <img class="mySlides2 img-responsive img-thumbnail" src="{{asset('images/place/outdoor/3.jpg')}}">
                    <img class="mySlides2 img-responsive img-thumbnail" src="{{asset('images/place/outdoor/4.jpg')}}">
                    <img class="mySlides2 img-responsive img-thumbnail" src="{{asset('images/place/outdoor/5.jpg')}}">
                    <img class="mySlides img-responsive img-thumbnail" src="{{asset('images/place/outdoor/6.jpg')}}">
                    <img class="mySlides img-responsive img-thumbnail" src="{{asset('images/place/outdoor/7.jpg')}}">
                    <img class="mySlides img-responsive img-thumbnail" src="{{asset('images/place/outdoor/8.jpg')}}">
                    <img class="mySlides img-responsive img-thumbnail" src="{{asset('images/place/outdoor/9.jpg')}}">
                    <img class="mySlides img-responsive img-thumbnail" src="{{asset('images/place/outdoor/10.jpg')}}">
                        <div class="w3-center display-bottommiddle" style="width:100%">
                           <div class="priv-left" onclick="plusDivs(-1)">&#10094;</div>
                            <div class="next-right" onclick="plusDivs(1)">&#10095;</div>
                            <span class="w3-badge demo w3-border" onclick="currentDiv(1)"></span>
                            <span class="w3-badge demo w3-border" onclick="currentDiv(2)"></span>
                            <span class="w3-badge demo w3-border" onclick="currentDiv(3)"></span>
                        </div>
                        </div>
                     <!-- <a href="#" title=""><img src="{{asset('website/img/outdoor.jpg')}}" style="height:351px"  class="img-responsive img-thumbnail"></a> -->
                 </div>
         
     


     </div>

</div>
</div>



<script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
        showDivs(slideIndex += n);
        }
        function showDivs(n) {
            
            var i;
            var x = document.getElementsByClassName("mySlides2");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length} ;
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex-1].style.display = "block";
            }
            var slideIndex = 1;
        showDivs2(slideIndex);

        function plusDivs2(n) {
        showDivs2(slideIndex += n);
        }

        function showDivs2(n) {
            
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length} ;
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex-1].style.display = "block";
        }
       
</script>


    <!-- Content End -->
   @endsection
