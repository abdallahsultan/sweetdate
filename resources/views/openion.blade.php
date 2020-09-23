@extends('layouts.website')

@section('content')

<style>

    @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
fieldset, label { margin: 0; padding: 0; }

h1 { font-size: 1.5em; margin: 10px; }



.rating {
  border: none;
  /* float: left; */
}

.rating > input { display: none; }
.rating > label:before {
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before {
  content: "\f089";
  position: absolute;
}

.rating > label {
  color: #ddd;
 float: right;
}


.rating > input:checked ~ label,
.rating:not(:checked) > label:hover,
.rating:not(:checked) > label:hover ~ label { color: #FFD700;  }

.rating > input:checked + label:hover,
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label,
.rating > input:checked ~ label:hover ~ label { color: #FFED85;  }

::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #fffbf5;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: #fffbf5;
}

::-ms-input-placeholder { /* Microsoft Edge */
  color: #fffbf5;
}
.inputc{
    background: #fffbf538;
    color: white;
}
.bsend{
    width: 50%;
    border: 1px;
    background: #d7c26b9c;
    border-radius: 58px;
}
.bsend:hover {
  background-color: #000000ba;
}
</style>

<div class="date_slider date_slider_inside date_image_bck date_fixed date_wht_txt" data-stellar-background-ratio="0.3" data-image="{{ asset('images/slider/sl5.jpg') }}">

    <div class="date_slider_firefly" data-total="30" data-min="1" data-max="3"></div>

    <div class="date_over" data-color="#000" data-opacity="0.8"></div>

    <div class="container">
        <div class="date_slide_txt date_slide_center_middle text-center">
            <img src="{{ asset('images/' . $setting->logo ) }}" alt="" height="180"><br>
            <div class="date_gold">{{ $setting->name }}</div>
            <div class="date_slide_subtitle">@lang('site.openion')</div>
        </div>
    </div>
</div>

<section   class="date_content   date_image_bck date_fixed date_wht_txt" data-stellar-background-ratio="0.3" data-image="{{ asset('images/slider/sl5.jpg') }}">
   <div class="date_slider_firefly" data-total="30" data-min="1" data-max="3"></div>
   <div class="date_over" data-color="#000" data-opacity="0.8"></div>
   
   <div class="container text-center">
      <div class="row">
         <form method="POST" action="{{ route('saveopenion') }}">
         @csrf
         <div class="col-md-6 ">
            <label> @lang('site.name') </label>
            <input  type="text" placeholder="@lang('site.name')" class="form-control inputc"  name="name" required>
         </div>
         <div class="col-md-6">
            <label> @lang('site.phone') </label>
            <input type="number" placeholder="@lang('site.phone')" class="form-control inputc"  name="phone" required>
         </div>
         <div class="col-md-6 ">
            <label> @lang('site.openion') </label>
            <textarea class="form-control inputc" placeholder="@lang('site.openion')" name="message" rows="6"></textarea>
         </div>
         <div class="col-md-6 rrat">
            <div class="col-md-4  offset-1">
               <label> @lang('site.services') </label>
               <fieldset class="rating">
                  <input type="radio" id="s5" name="services" value="5" />
                  <label class = "full" for="s5" title="Awesome - 5 stars"></label>
                  <input type="radio" id="s45" name="services" value="4.5" />
                  <label class="half" for="s45" title="Pretty good - 4.5 stars"></label>
                  <input type="radio" id="s4" name="services" value="4" />
                  <label class = "full" for="s4" title="Pretty good - 4 stars"></label>
                  <input type="radio" id="s35" name="services" value="3.5" />
                  <label class="half" for="s35" title="Meh - 3.5 stars"></label>
                  <input type="radio" id="s3" name="services" value="3" />
                  <label class = "full" for="s3" title="Meh - 3 stars"></label>
                  <input type="radio" id="s25" name="services" value="2.5" />
                  <label class="half" for="s25" title="Kinda bad - 2.5 stars"></label>
                  <input type="radio" id="s2" name="services" value="2" />
                  <label class = "full" for="s2" title="Kinda bad - 2 stars"></label>
                  <input type="radio" id="s15" name="services" value="1.5" />
                  <label class="half" for="s15" title="Meh - 1.5 stars"></label>
                  <input type="radio" id="s1" name="services" value="1" />
                  <label class = "full" for="s1" title="Sucks big time - 1 star"></label>
                  <input type="radio" id="s05" name="services" value="0.5" />
                  <label class="half" for="s05" title="Sucks big time - 0.5 stars"></label>
               </fieldset>
            </div>
            <div class="col-md-4  offset-1">
               <label> @lang('site.waiting_time') </label>
               <fieldset class="rating">
                  <input type="radio" id="vx1" name="waiting" value="5" />
                  <label class = "full" for="vx1" title="Awesome - 5 stars"></label>
                  <input type="radio" id="vx2" name="waiting" value="4.5" />
                  <label class="half" for="vx2" title="Pretty good - 4.5 stars"></label>
                  <input type="radio" id="vx3" name="waiting" value="4" />
                  <label class = "full" for="vx3" title="Pretty good - 4 stars"></label>
                  <input type="radio" id="vx4" name="waiting" value="3.5" />
                  <label class="half" for="vx4" title="Meh - 3.5 stars"></label>
                  <input type="radio" id="vx5" name="waiting" value="3" />
                  <label class = "full" for="v5" title="Meh - 3 stars"></label>
                  <input type="radio" id="vx6" name="waiting" value="2.5" />
                  <label class="half" for="vx6" title="Kinda bad - 2.5 stars"></label>
                  <input type="radio" id="vx7" name="waiting" value="2" />
                  <label class = "full" for="vx7" title="Kinda bad - 2 stars"></label>
                  <input type="radio" id="vx8" name="waiting" value="1.5" />
                  <label class="half" for="vx8" title="Meh - 1.5 stars"></label>
                  <input type="radio" id="vx9" name="waiting" value="1" />
                  <label class = "full" for="vx9" title="Sucks big time - 1 star"></label>
                  <input type="radio" id="vx11" name="waiting" value="0.5" />
                  <label class="half" for="vx11" title="Sucks big time - 0.5 stars"></label>
               </fieldset>
            </div>
            <div class="col-md-4  offset-1">
               <label> @lang('site.food_service') </label>
               <fieldset class="rating">
                  <input type="radio" id="v1" name="foodserve" value="5" />
                  <label class = "full" for="v1" title="Awesome - 5 stars"></label>
                  <input type="radio" id="v2" name="foodserve" value="4.5" />
                  <label class="half" for="v2" title="Pretty good - 4.5 stars"></label>
                  <input type="radio" id="v3" name="foodserve" value="4" />
                  <label class = "full" for="v3" title="Pretty good - 4 stars"></label>
                  <input type="radio" id="v4" name="foodserve" value="3.5" />
                  <label class="half" for="v4" title="Meh - 3.5 stars"></label>
                  <input type="radio" id="v5" name="foodserve" value="3" />
                  <label class = "full" for="v5" title="Meh - 3 stars"></label>
                  <input type="radio" id="v6" name="foodserve" value="2.5" />
                  <label class="half" for="v6" title="Kinda bad - 2.5 stars"></label>
                  <input type="radio" id="v7" name="foodserve" value="2" />
                  <label class = "full" for="v7" title="Kinda bad - 2 stars"></label>
                  <input type="radio" id="v8" name="foodserve" value="1.5" />
                  <label class="half" for="v8" title="Meh - 1.5 stars"></label>
                  <input type="radio" id="v9" name="foodserve" value="1" />
                  <label class = "full" for="v9" title="Sucks big time - 1 star"></label>
                  <input type="radio" id="v11" name="foodserve" value="0.5" />
                  <label class="half" for="v11" title="Sucks big time - 0.5 stars"></label>
               </fieldset>
            </div>
            <div class="col-md-4  offset-1">
               <label> @lang('site.team') </label>
               <fieldset class="rating">
                  <input type="radio" id="x1" name="team" value="5" />
                  <label class = "full" for="x1" title="Awesome - 5 stars"></label>
                  <input type="radio" id="x2" name="team" value="4.5" />
                  <label class="half" for="x2" title="Pretty good - 4.5 stars"></label>
                  <input type="radio" id="x3" name="team" value="4" />
                  <label class = "full" for="x3" title="Pretty good - 4 stars"></label>
                  <input type="radio" id="x4" name="team" value="3.5" />
                  <label class="half" for="x4" title="Meh - 3.5 stars"></label>
                  <input type="radio" id="x5" name="team" value="3" />
                  <label class = "full" for="x5" title="Meh - 3 stars"></label>
                  <input type="radio" id="x6" name="team" value="2.5" />
                  <label class="half" for="x6" title="Kinda bad - 2.5 stars"></label>
                  <input type="radio" id="x7" name="team" value="2" />
                  <label class = "full" for="x7" title="Kinda bad - 2 stars"></label>
                  <input type="radio" id="x8" name="team" value="1.5" />
                  <label class="half" for="x8" title="Meh - 1.5 stars"></label>
                  <input type="radio" id="x9" name="team" value="1" />
                  <label class = "full" for="x9" title="Sucks big time - 1 star"></label>
                  <input type="radio" id="x11" name="team" value="0.5" />
                  <label class="half" for="x11" title="Sucks big time - 0.5 stars"></label>
               </fieldset>
            </div>
            <div class="col-md-4  offset-1">
               <label> @lang('site.sanitization') </label>
               <fieldset class="rating">
                  <input type="radio" id="q1" name="sanitization" value="5" />
                  <label class = "full" for="q1" title="Awesome - 5 stars"></label>
                  <input type="radio" id="q2" name="sanitization" value="4.5" />
                  <label class="half" for="q2" title="Pretty good - 4.5 stars"></label>
                  <input type="radio" id="q3" name="sanitization" value="4" />
                  <label class = "full" for="q3" title="Pretty good - 4 stars"></label>
                  <input type="radio" id="q4" name="sanitization" value="3.5" />
                  <label class="half" for="q4" title="Meh - 3.5 stars"></label>
                  <input type="radio" id="q5" name="sanitization" value="3" />
                  <label class = "full" for="q5" title="Meh - 3 stars"></label>
                  <input type="radio" id="q6" name="sanitization" value="2.5" />
                  <label class="half" for="q6" title="Kinda bad - 2.5 stars"></label>
                  <input type="radio" id="q7" name="sanitization" value="2" />
                  <label class = "full" for="q7" title="Kinda bad - 2 stars"></label>
                  <input type="radio" id="q8" name="sanitization" value="1.5" />
                  <label class="half" for="q8" title="Meh - 1.5 stars"></label>
                  <input type="radio" id="q9" name="sanitization" value="1" />
                  <label class = "full" for="q9" title="Sucks big time - 1 star"></label>
                  <input type="radio" id="q11" name="sanitization" value="0.5" />
                  <label class="half" for="q11" title="Sucks big time - 0.5 stars"></label>
               </fieldset>
            </div>
         </div>
         <br>
         <div class="col-md-12 ">
            <input type="submit" class="bsend btn-lg" value="@lang('site.send')" >
            <br><br>
         </div>
         <br>
      </div>
   </div>
</section>
    <!-- Content End -->



@endsection
