@extends('layouts.website')

@section('content')
<style>
* {
  box-sizing: border-box;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}
.cursor2 {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}
.demo2 {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
.active,
.demo2:hover {
  opacity: 1;
}
</style>


<div class="date_slider date_slider_inside date_image_bck date_fixed date_wht_txt" data-stellar-background-ratio="0.3" data-image="{{ asset('images/slider/sl5.jpg') }}">

    <div class="date_slider_firefly" data-total="30" data-min="1" data-max="3"></div>

    <div class="date_over" data-color="#000" data-opacity="0.8"></div>

    <div class="container">
        <div class="date_slide_txt date_slide_center_middle text-center">
            <img  src="{{ asset('images/' . $setting->logo ) }}" alt="" height="180"><br>
            <!-- <div class="date_gold">{{ $setting->name }}</div> -->
            <div class="date_gold">@lang('site.place')</div>
            
        </div>
        
    </div>
</div>


   
        
<div class="date_section  date_image_bck  date_wht_txt" style="min-height: 569px;"  data-image="{{ asset('images/slider/sl5.jpg') }}">

  <div class="date_slider_firefly" data-total="30" data-min="1" data-max="3"></div>

  <div class="date_over" data-color="#000" data-opacity="0.8"></div>
                 
  <div class="container "> 
      <div class="row">
      <h2 class="date_gold text-center">@lang('site.indoor')</h2>
        <div class="col-md-12">
      
            <!-- Full-width images with number text -->
            <div class="mySlides">
              <div class="numbertext">1 / 6</div>
                <img class="img-thumbnail" src="{{asset('images/place/indoor/1.jpg')}}" style=" height:550px; width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">2 / 6</div>
                <img class="img-thumbnail" src="{{asset('images/place/indoor/2.jpg')}}" style=" height:550px; width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">3 / 6</div>
                <img class="img-thumbnail" src="{{asset('images/place/indoor/3.jpg')}}" style=" height:550px; width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">4 / 6</div>
                <img class="img-thumbnail" src="{{asset('images/place/indoor/4.jpg')}}" style=" height:550px; width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">5 / 6</div>
                <img class="img-thumbnail" src="{{asset('images/place/indoor/5.jpg')}}" style=" height:550px; width:100%">
            </div>
            <div class="mySlides">
              <div class="numbertext">6 / 6</div>
                <img class="img-thumbnail" src="{{asset('images/place/indoor/6.jpg')}}" style=" height:550px; width:100%">
            </div>


            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <!-- Image text -->
            <div class="caption-container">
              <p id="caption" hidden></p>
            </div>

          <!-- Thumbnail images -->
          <div class="row">
            <div class="column">
              <img class="demo cursor" src="{{asset('images/place/indoor/1.jpg')}}" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
            </div>
            <div class="column">
              <img class="demo cursor" src="{{asset('images/place/indoor/2.jpg')}}" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
            </div>
            <div class="column">
              <img class="demo cursor" src="{{asset('images/place/indoor/3.jpg')}}" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
            </div>
            <div class="column">
              <img class="demo cursor" src="{{asset('images/place/indoor/4.jpg')}}" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
            </div>
            <div class="column">
              <img class="demo cursor" src="{{asset('images/place/indoor/5.jpg')}}" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
            </div>
            <div class="column">
              <img class="demo cursor" src="{{asset('images/place/indoor/6.jpg')}}" style="width:100%" onclick="currentSlide(6)" alt="Nature and sunrise">
            </div>
          
          </div>
        </div>
        <br><br>
        <div class="date_gold"></div>
       
        <h2 class=" date_wht_txt  date_gold text-center">@lang('site.outdoor')</h2>
        <div class="col-md-12">
        
            <!-- Full-width images with number text -->
            <div class="mySlides2">
              <div class="numbertext">1 / 6</div>
                <img class="img-thumbnail" src="{{asset('images/place/outdoor/1.jpg')}}" style=" height:550px; width:100%">
            </div>

            <div class="mySlides2">
              <div class="numbertext">2 / 6</div>
                <img class="img-thumbnail" src="{{asset('images/place/outdoor/2.jpg')}}" style=" height:550px; width:100%">
            </div>

            <div class="mySlides2">
              <div class="numbertext">3 / 6</div>
                <img class="img-thumbnail" src="{{asset('images/place/outdoor/3.jpg')}}" style=" height:550px; width:100%">
            </div>

            <div class="mySlides2">
              <div class="numbertext">4 / 6</div>
                <img class="img-thumbnail" src="{{asset('images/place/outdoor/4.jpg')}}" style=" height:550px; width:100%">
            </div>

            <div class="mySlides2">
              <div class="numbertext">5 / 6</div>
                <img class="img-thumbnail" src="{{asset('images/place/outdoor/5.jpg')}}" style=" height:550px; width:100%">
            </div>
            <div class="mySlides2">
              <div class="numbertext">6/ 6</div>
                <img class="img-thumbnail" src="{{asset('images/place/outdoor/6.jpg')}}" style=" height:550px; width:100%">
            </div>



          <!-- Next and previous buttons -->
          <a class="prev" onclick="plusSlides2(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides2(1)">&#10095;</a>

          <!-- Image text -->
          <div class="caption-container">
            <p id="caption2" hidden></p>
          </div>

            <!-- Thumbnail images -->
            <div class="row">
              <div class="column">
                <img class="demo2 cursor2" src="{{asset('images/place/outdoor/1.jpg')}}" style="width:100%" onclick="currentSlide2(1)" alt="The Woods">
              </div>
              <div class="column">
                <img class="demo2 cursor2" src="{{asset('images/place/outdoor/2.jpg')}}" style="width:100%" onclick="currentSlide2(2)" alt="Cinque Terre">
              </div>
              <div class="column">
                <img class="demo2 cursor2" src="{{asset('images/place/outdoor/3.jpg')}}" style="width:100%" onclick="currentSlide2(3)" alt="Mountains and fjords">
              </div>
              <div class="column">
                <img class="demo2 cursor2" src="{{asset('images/place/outdoor/4.jpg')}}" style="width:100%" onclick="currentSlide2(4)" alt="Northern Lights">
              </div>
              <div class="column">
                <img class="demo2 cursor2" src="{{asset('images/place/outdoor/5.jpg')}}" style="width:100%" onclick="currentSlide2(5)" alt="Nature and sunrise">
              </div>
              <div class="column">
                <img class="demo2 cursor2" src="{{asset('images/place/outdoor/6.jpg')}}" style="width:100%" onclick="currentSlide2(6)" alt="Nature and sunrise">
              </div>
            </div>
        </div>

        
      </div>

  </div>
     



</div>



<script>
      var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

<script>
      var slideIndex2 = 1;
showSlides2(slideIndex2);

// Next/previous controls
function plusSlides2(n) {
  showSlides2(slideIndex2 += n);
}

// Thumbnail image controls
function currentSlide2(n) {
  showSlides2(slideIndex2 = n);
}

function showSlides2(n) {
  var i;
  var slides2 = document.getElementsByClassName("mySlides2");
  var dots2 = document.getElementsByClassName("demo2");
  var captionText = document.getElementById("caption2");
  if (n > slides2.length) {slideIndex2 = 1}
  if (n < 1) {slideIndex2 = slides2.length}
  for (i = 0; i < slides2.length; i++) {
    slides2[i].style.display = "none";
  }
  for (i = 0; i < dots2.length; i++) {
    dots2[i].className = dots2[i].className.replace(" active", "");
  }
  slides2[slideIndex2-1].style.display = "block";
  dots2[slideIndex2-1].className += " active";
  captionText.innerHTML = dots2[slideIndex2-1].alt;
}
</script>


    <!-- Content End -->
   @endsection
