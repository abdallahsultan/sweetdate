@extends('layouts.website')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" />


<div class="date_slider date_slider_inside date_image_bck date_fixed date_wht_txt" data-stellar-background-ratio="0.3" data-image="{{ asset('images/slider/sl5.jpg') }}">

    <div class="date_slider_firefly" data-total="30" data-min="1" data-max="3"></div>

    <div class="date_over" data-color="#000" data-opacity="0.8"></div>

    <div class="container">
        <div class="date_slide_txt date_slide_center_middle text-center">
            <img src="{{ asset('images/' . $setting->logo ) }}" alt="" height="180"><br>
            <!-- <div class="date_gold">{{ $setting->name }}</div> -->
            <div class="date_gold">@lang('site.reserve')</div>
        </div>
    </div>
</div>


    <section id="date_content" class="date_content">


        <section class="date_section">

                <div class="container text-center">


                    <div class="row">
                        <form method="POST" action="{{ route('makereservationoutdoor') }}">
                            @csrf
                            <div class="col-md-5 col-md-offset-1">
          
          <label> @lang('site.date')  </label>
          <input type="date" placeholder="date" value="" class="date_jq form-control" name="date" required>
          <br>
          </div>
          <div class="col-md-5">
          <label> @lang('site.time') </label>
          <input type="time" placeholder="Time" class="form-control" name="time" required>
          <br>
          </div>
                        

                        <div class="col-md-12">
                        <div class="date_slide_subtitle">@lang('site.res_req')</div>
                        </div>
                    </div>
                    <div class="indoor" style="width:inherit">
        <div class="container-fluid text-center">

<div class="row">
<div class="col-md-12">
<div class="date_slide_subtitle">@lang('site.indoor') & @lang('site.outdoor')</div>
</div>


</div>





</div>
<!-- slider end -->
<div class="plane">
<div class="cockpit">
<h1>Satge </h1>
</div>
<div class="row fuselage1">
<div class="col-md-8">
<ol class="cabin ">
<li class="row row--1">
<ul class="seats" type="A">
    
<li class="seat">
   
    
@php $table= app\Tables::where('name','VIP')->first(); @endphp
<input type="checkbox"  name="table[vip1]"  id="vip1" />
<label for="vip1"><img type="image" for="vip1" data-toggle="tooltip"    @if( $table->name == 'VIP' )   title="vip1 | price {{$table->price}}" @endif  src="{{asset('website/img/vipleft.png')}}"   /> </label>
<div class="centered"><b>VIP1  </b></div>

<div class="centered"><svg  width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill vip1 " fill="currentColor" >
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></div>

</li>

<br>
<li class="seat">

@php $table= app\Tables::where('name','VIP')->first(); @endphp
<input type="checkbox" name="table[vip2]"  id="vip2" />
<label for="vip2"><img type="image" for="vip2" data-toggle="tooltip"  @if( $table->name == 'VIP' )   title="VIP1 | price {{$table->price}}" @endif src="{{asset('website/img/vipright.png')}}"   /> </label>
<div class="centered"><b>VIP2  </b></div>
<div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill vip2 " fill="currentColor" >
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg>

</li>
<li class="seat">




@php $table= app\Tables::where('name','A')->first(); @endphp
<input type="checkbox" name="table[A1]" id="A1" />
<label for="A1"><img type="image" for="A1" data-toggle="tooltip"  @if( $table->name == 'A' )   title="A1 | price {{$table->price}}" @endif src="{{asset('website/img/a.png')}}"   /> </label>
<div class="centered"><b>VIP  </b></div>

<div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill A1" fill="currentColor" >
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></div>

</li>

<li class="seat">


@php $table= app\Tables::where('name','B')->first(); @endphp
<input type="checkbox" name="table[B1]" id="B1" />
<label for="B1"><img type="image" for="B1" data-toggle="tooltip"   @if( $table->name == 'B' )   title="B1 | price {{$table->price}}" @endif src="{{asset('website/img/b.png')}}"   /> </label>

<div class="centered"><b>B1  </b></div>
<div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill B1" fill="currentColor" >
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></div>

</li>
        <ul>
        <li class="seat">
        
        
        @php $table= app\Tables::where('name','C')->first(); @endphp
        <input type="checkbox" name="table[C1]" id="C1" />
        <label for="C1"><img type="image" for="C1" data-toggle="tooltip"   @if( $table->name == 'C' )   title="C1 | price {{$table->price}}" @endif src="{{asset('website/img/c.png')}}"   /> </label>
       
        <div class="centered"><b>C1  </b></div>
        <div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill C1" fill="currentColor" >
        <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
        </svg></div>
        
        </li>
        
        </ul>
</ul>

</li>
<li class="row row--1">
<ul class="seats" type="A">
<li class="seat">


@php $table= app\Tables::where('name','VIP')->first(); @endphp
<input type="checkbox" name="table[vip3]"    id="vip3" />
<label for="vip3"><img type="image" for="vip3" data-toggle="tooltip"  @if( $table->name == 'VIP' )   title="VIP | price {{$table->price}}" @endif src="{{asset('website/img/vipleft.png')}}"   /> </label>

<div class="centered"><b>vip3  </b></div>
<div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill vip3" fill="currentColor" >
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg>

</li><br>
<li class="seat">


@php $table= app\Tables::where('name','VIP')->first(); @endphp
<input type="checkbox" name="table[vip4]" id="vip4" />
<label for="vip4"><img type="image" for="vip4" data-toggle="tooltip"   @if( $table->name == 'VIP' )   title="VIP4 | price {{$table->price}}" @endif  src="{{asset('website/img/vipright.png')}}"   /> </label>
<div class="centered"><b>VIP4  </b></div>
<div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill vip4" fill="currentColor" >
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg>
</div>
</li>

<li class="seat">



@php $table= app\Tables::where('name','VIP')->first(); @endphp
<input type="checkbox" name="table[A2]" id="A2" />
<label for="A2"><img type="image" for="A2" data-toggle="tooltip"  @if( $table->name == 'A' )   title="A2 | price {{$table->price}}" @endif  src="{{asset('website/img/a.png')}}"   /> </label>
<div class="centered"><b>VIP  </b></div>
<div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill A2" fill="currentColor" >
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></div>
</li>
<li class="seat">

@php $table= app\Tables::where('name','B')->first(); @endphp
<input type="checkbox" name="table[B2]" id="B2" />
<label for="B2"><img type="image" for="B2" data-toggle="tooltip"   @if( $table->name == 'B' )   title="B2 | price {{$table->price}}" @endif src="{{asset('website/img/b.png')}}"   /> </label>
<div class="centered"><b>B2  </b></div>
<div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill B2" fill="currentColor" >
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg>

</li>
    <!-- class c2 -->
       <ul>
        <li class="seat">
     
      
        @php $table= app\Tables::where('name','C')->first(); @endphp
        <input type="checkbox" name="table[C2]" id="C2" />
        <label for="C2"><img type="image" for="C2" data-toggle="tooltip"  @if( $table->name == 'C' )   title="C2 | price {{$table->price}}" @endif src="{{asset('website/img/c.png')}}"   /> </label>
       <div class="centered"><b>C2  </b></div>
       <div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill C2" fill="currentColor" >
        <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
        </svg></div>

       
        </li>
        
        </ul>
        
</ul>

</li>

<li class="row row--2">
<ol class="seats" type="A">
<li class="seat">



@php $table= app\Tables::where('name','A')->first(); @endphp
<input type="checkbox" name="table[A6]" id="A6" />
<label for="A6"><img type="image" for="A6" data-toggle="tooltip"   @if( $table->name == 'A' )   title="A6| price {{$table->price}}" @endif src="{{asset('website/img/a.png')}}"   /> </label>
<div class="centered"><b>A6  </b></div>
<div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class=" bi bi-x-square-fill A6" fill="currentColor" >
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></div>

</li>
<li class="seat">


@php $table= app\Tables::where('name','A')->first(); @endphp
<input type="checkbox" name="table[A5]" id="A5" />
<label for="A5"><img type="image" for="A5" data-toggle="tooltip"   @if( $table->name == 'A' )   title="A5 | price {{$table->price}}" @endif src="{{asset('website/img/a.png')}}"   /> </label>
<div class="centered"><b>A5  </b></div>
<div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill A5" fill="currentColor" >
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg>

</li>

<br>
<li class="seat">

@php $table= app\Tables::where('name','A')->first(); @endphp
<input type="checkbox" name="table[A4]" id="A4" />
<label for="A4"><img type="image" for="A4" data-toggle="tooltip"   @if( $table->name == 'A' )   title="A4 | price {{$table->price}}" @endif src="{{asset('website/img/a.png')}}"   /> </label>
<div class="centered"><b>A4  </b></div>
<div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill A4" fill="currentColor" >
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></div>

</li>
<li class="seat">

@php $table= app\Tables::where('name','A')->first(); @endphp
<input type="checkbox" name="table[A3]" id="A3" />
<label for="A3"><img type="image" for="A3" data-toggle="tooltip"   @if( $table->name == 'A' )   title="A3 | price {{$table->price}}" @endif src="{{asset('website/img/a.png')}}"   /> </label>
<div class="centered"><b>VIP  </b></div>
<div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill A3" fill="currentColor" >
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg>

</li>

<li class="seat">


@php $table= app\Tables::where('name','B')->first(); @endphp
<input type="checkbox" name="table[B3]" id="B3" />
<label for="B3"><img type="image" for="B3" data-toggle="tooltip"   @if( $table->name == 'B' )   title="B3 | price {{$table->price}}" @endif src="{{asset('website/img/b.png')}}"   /> </label>
<div class="centered"><b>B3  </b></div>
<div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill B3" fill="currentColor" >
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg>

</li>

        <ul>
        <li style="left: -18%;" class="seat">
      
        
        @php $table= app\Tables::where('name','C')->first(); @endphp
        <input type="checkbox" name="table[C3]" id="C3" />
        <label ><img type="image"  data-toggle="tooltip"   @if( $table->name == 'C' )   title="C3 | price {{$table->price}}" @endif src="{{asset('website/img/c.png')}}"   /> </label>
        <div class="centered"><b>C3  </b></div>
        <div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill C3" fill="currentColor" >
        <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
        </svg></div>

        </li>
        
        </ul>
</ol>
</li>
<li class="row row--3">
<ol class="seats" type="A">
<li class="seat">

@php $table= app\Tables::where('name','A')->first(); @endphp
<input type="checkbox" name="table[A10]" id="A10" />
<label for="A10"><img type="image" for="A10" data-toggle="tooltip"    @if( $table->name == 'A' )   title="A10 | price {{$table->price}}" @endif src="{{asset('website/img/a.png')}}"   /> </label>
<div class="centered"><b>A10  </b></div>
<div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill A10" fill="currentColor" >
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></div>

</li>
<li class="seat">

@php $table= app\Tables::where('name','A')->first(); @endphp
<input type="checkbox" name="table[A9]" id="A9" />
<label for="A9"><img type="image" for="A9" data-toggle="tooltip"    @if( $table->name == 'A' )   title="A9 | price {{$table->price}}" @endif src="{{asset('website/img/a.png')}}"   /> </label>
<div class="centered"><b>A9  </b></div>
<div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill A9" fill="currentColor" >
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></div>

</li>
<br>
<li class="seat">

@php $table= app\Tables::where('name','A')->first(); @endphp
<input type="checkbox" name="table[A8]" id="A8" />
<label for="A8"><img type="image" for="A8" data-toggle="tooltip"    @if( $table->name == 'A' )   title="A8 | price {{$table->price}}" @endif src="{{asset('website/img/a.png')}}"   /> </label>
<div class="centered"><b>A8  </b></div>
<div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill A8" fill="currentColor" >
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></div>
</li>
<li class="seat">

@php $table= app\Tables::where('name','A')->first(); @endphp
<input type="checkbox" name="table[A7]" id="A7" />
<label for="A7"><img type="image" for="A7" data-toggle="tooltip"   @if( $table->name == 'A' )   title="A7 | price {{$table->price}}" @endif src="{{asset('website/img/a.png')}}"   /> </label>
<div class="centered"><b>A7  </b></div>
<div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill A7" fill="currentColor" >
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></div>

</li>
<li class="seat">

@php $table= app\Tables::where('name','B')->first(); @endphp
<input type="checkbox" name="table[B4]" id="B4" />
<label for="B4"><img type="image" for="B4" data-toggle="tooltip"   @if( $table->name == 'B' )   title="B4 | price {{$table->price}}" @endif src="{{asset('website/img/b.png')}}"   /> </label>
<div class="centered"><b>B4  </b></div>
<div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill B4" fill="currentColor" >
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></div>

</li>
        <ul>
        <li style="left: -18%;" class="seat">
             
                @php $table= app\Tables::where('name','C')->first(); @endphp
                <input type="checkbox" name="table[C4]" id="C4" />
                <label for="C4"><img type="image" for="C4" data-toggle="tooltip"   title="C4" src="{{asset('website/img/c.png')}}"   /> </label>
            <div class="centered"><b>C4  </b></div>
            <div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill C4" fill="currentColor" >
                <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                </svg></div>

                </li>
        </ul>
</ol>
</li>



</div>

<div class="col-md-4 vip-plus">
<ol class="cabin ">
<li class="row row--1">
<ul class="seats" type="A">
<li class="seat">
<input type="checkbox"  />

<label style="width: max-content;" ><img type="image" width="240"  data-toggle="tooltip"    src="{{asset('website/img/bar.png')}}"   /> </label>
<div class="centered"><b>Bar</b></div>
</li>


<li class="seat">

@php $table= app\Tables::where('name','VIPPlus')->first(); @endphp
<input type="checkbox" name="table[vipplus]" id="vipplus" />
<label style="width: max-content;" for="vipplus"><img type="image" width="170"  for="vipplus"  src="{{asset('website/img/vippuls.png')}}"   /> </label>
<div class="centered"><b>VIP+</b></div>
<div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill vipplus" fill="currentColor" >
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg>

</li>
</ul>



</ul>

</li>
</ol>
</div>

</div>

<div class="row">
    
    <div class="col-md-12">
    <ol class="seats" type="B" >
        
            <li style="margin-left: -24%;" class="seat">
                
                @php $table= app\Tables::where('name','Cbig')->first(); @endphp
                <input type="checkbox" name="table[Cbig2]" id="Cbig2" />
                <label style="width: max-content;" for="Cbig2"><img type="image" width="150" for="Cbig2" data-toggle="tooltip"   title="Cbig2" src="{{asset('website/img/cbig.png')}}"   /> </label>
                <div class="centered"><b>Cbig2  </b></div>
                <div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill Cbig" fill="currentColor" >
                <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                </svg></div>
              
                </li>

            <ul class="seats">
                <li  class="seat">
                @if(in_array('C7', $tables))
                <label ><img type="image"  data-toggle="tooltip"   title="C7 @lang('site.reserved')" src="{{asset('website/img/thirdc.png')}}"   /> </label>
                <div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" >
                <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                </svg></div>
                @else
                @php $table= app\Tables::where('name','VIP')->first(); @endphp
                <input type="checkbox" name="table[C7]" id="C7" />
                <label for="C7"><img type="image" for="C7" data-toggle="tooltip"   title="C7" src="{{asset('website/img/thirdc.png')}}"   /> </label>
            <div class="centered"><b>VIP  </b></div>

                @endif
                </li>

              <ul class="seats">
                <li  class="seat">
                @if(in_array('C6', $tables))
                <label ><img type="image"  data-toggle="tooltip"   title="C6 @lang('site.reserved')" src="{{asset('website/img/thirdc.png')}}"   /> </label>
                <div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" >
                <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                </svg></div>
                @else
                @php $table= app\Tables::where('name','VIP')->first(); @endphp
                <input type="checkbox" name="table[C6]" id="C6" />
                <label for="C6"><img type="image" for="C6" data-toggle="tooltip"   title="C6" src="{{asset('website/img/thirdc.png')}}"   /> </label>
            <div class="centered"><b>VIP  </b></div>

                @endif
                </li>
                
              </ul>
              
            
              <ul class="seats">
                <ul class="seats">
                    <li style="margin-left: -24%;" class="seat">
                    @if(in_array('Cbig1', $tables))
                    <label style="width: max-content;" ><img type="image"  width="150" data-toggle="tooltip"   title="Cbig1 @lang('site.reserved')" src="{{asset('website/img/cbig.png')}}"   /> </label>
                    <div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" >
                    <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                    </svg></div>
                    @else
                    @php $table= app\Tables::where('name','VIP')->first(); @endphp
                    <input type="checkbox" name="table[Cbig1]" id="Cbig1" />
                    <label style="width: max-content;" for="Cbig1"><img type="image" width="150" for="Cbig1" data-toggle="tooltip"   title="Cbig1" src="{{asset('website/img/cbig.png')}}"   /> </label>
                
                    @endif
                    </li>

                </ul>
                <li  class="seat">
                @if(in_array('C5', $tables))
                <label ><img type="image"  data-toggle="tooltip"   title="C5 @lang('site.reserved')" src="{{asset('website/img/c.png')}}"   /> </label>
                <div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" >
                <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                </svg></div>
                @else
                @php $table= app\Tables::where('name','VIP')->first(); @endphp
                <input type="checkbox" name="table[C5]" id="C5" />
                <label for="C5"><img type="image" for="C5" data-toggle="tooltip"   title="C5" src="{{asset('website/img/c.png')}}"   /> </label>
            <div class="centered"><b>VIP  </b></div>

                @endif
                </li>
                
              </ul>
              
            </ul>
    </ol>
</div>

  <!-- trabezat 2 saf -->
  <hr>
  <div class="col-md-12">

   <ol class="seats" type="D" >
    <ul class="seats">

              <li  style="right: 21%; top: 25%;" class="seat">
                @if(in_array('D1', $tables))
                <label ><img type="image"  data-toggle="tooltip"   title="D1 @lang('site.reserved')" src="{{asset('website/img/d.png')}}"   /> </label>
                <div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" >
                <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                </svg></div>
                @else
                @php $table= app\Tables::where('name','VIP')->first(); @endphp
                <input type="checkbox" name="table[D1]" id="D1" />
                <label for="D1"><img type="image" for="D1" data-toggle="tooltip"   title="D1" src="{{asset('website/img/d.png')}}"   /> </label>
            <div class="centered"><b>VIP  </b></div>

                @endif
            </li>
    
                <li style="right: 12%; top: 50%;"  class="seat">
               
                
                @php $table= app\Tables::where('name','VIP')->first(); @endphp
                <input type="checkbox" name="table[E1]" id="E1" />
                <label style="max-width: max-content;" for="E1"><img type="image" height="85" for="E1" data-toggle="tooltip"   title="E1" src="{{asset('website/img/e.png')}}"   /> </label>
                <div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill E1" fill="currentColor" >
                <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                </svg></div>
              
                </li>

              <ul class="seats">
                <li style=" top: 50%;"  class="seat">
               
                
               
                @php $table= app\Tables::where('name','VIP')->first(); @endphp
                <input type="checkbox" name="table[E2]" id="E2" />
                <label style="max-width: max-content;" for="E2"><img type="image" height="85" for="E2" data-toggle="tooltip"   title="E2" src="{{asset('website/img/e.png')}}"   /> </label>
                <div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill E2" fill="currentColor" >
                <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                </svg></div>
              
                </li>
              </ul>  
             
              
            
            
              <ul class="seats">
                <li  class="seat">
                @if(in_array('D2', $tables))
                <label ><img type="image"  data-toggle="tooltip"   title="D2 @lang('site.reserved')" src="{{asset('website/img/d.png')}}"   /> </label>
                <div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" >
                <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                </svg></div>
                @else
                @php $table= app\Tables::where('name','VIP')->first(); @endphp
                <input type="checkbox" name="table[D2]" id="D2" />
                <label for="D2"><img type="image" for="D2" data-toggle="tooltip"   title="D2" src="{{asset('website/img/d.png')}}"   /> </label>
            <div class="centered"><b>VIP  </b></div>

                @endif
                </li>
              </ul>

              <ul class="seats">
                <li  class="seat D3table">
                @if(in_array('D3', $tables))
                <label ><img type="image"  data-toggle="tooltip"   title="D3 @lang('site.reserved')" src="{{asset('website/img/d.png')}}"   /> </label>
                <div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" >
                <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                </svg></div>
                @else
                @php $table= app\Tables::where('name','VIP')->first(); @endphp
                <input type="checkbox" name="table[D3]" id="D3" />
                <label for="D3"><img type="image" for="D3" data-toggle="tooltip"   title="D3" src="{{asset('website/img/d.png')}}"   /> </label>
                <div class="centered"><b>VIP  </b></div>
                @endif
                </li>
              </ul>
            
                <li style="top:100%;"  class="seat D7table">
             
                @php $table= app\Tables::where('name','D')->first(); @endphp
                <input type="checkbox" name="table[D7]" id="D7" />
                <label for="D7"><img type="image" for="D7" data-toggle="tooltip"   title="D7" src="{{asset('website/img/d.png')}}"   /> </label>
                <div class="centered"><b>D7  </b></div>
                <div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill D7" fill="currentColor" >
                <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                </svg></div>
               
                </li>
              </ol>
              
              
           
       </ol>   
  </div>

 <!-- trabezah DE -->
  <div class="col-md-12 ">
      <div class="col-md-offset-4 DEtable">
      <li  class="seat">
            
              @php $table= app\Tables::where('name','DE')->first(); @endphp
              <input type="checkbox" name="table[DE]" id="DE" />
              <label for="DE"><img type="image" for="DE" data-toggle="tooltip"   title="DE" src="{{asset('website/img/de.png')}}"   /> </label>
              <!-- <div class="centered"><b>DE  </b></div> -->
              <div class="centered"> <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill DE" fill="currentColor" >
              <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
              </svg></div>
              
          </li>
      </div>

  </div>
  
<div class="col-md-12">
  
  <ol class="seats" type="D" >
  <ul class="seats">
            <li style="right: 25%;" class="seat">
           
              @php $table= app\Tables::where('name','D')->first(); @endphp
              <input type="checkbox" name="table[D4]" id="D4" />
              <label for="D4"><img type="image" for="D4" data-toggle="tooltip"   title="D4" src="{{asset('website/img/d.png')}}"   /> </label>
              <div class="centered"><b>D4  </b></div>
              <div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill D4" fill="currentColor" >
              <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
              </svg>

             
          </li>
  
              <li style="bottom: 50%; right: 13%;"  class="seat">
              @if(in_array('E3', $tables))
              <label style="max-width: max-content;" ><img type="image" height="85"  data-toggle="tooltip"   title="E3 @lang('site.reserved')" src="{{asset('website/img/e.png')}}"   /> </label>
              <div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" >
              <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
              </svg></div>
              @else
              @php $table= app\Tables::where('name','VIP')->first(); @endphp
              <input type="checkbox" name="table[E3]" id="E3" />
              <label style="max-width: max-content;" for="E3"><img type="image" height="85"  for="E3" data-toggle="tooltip"   title="E3" src="{{asset('website/img/e.png')}}"   /> </label>
          
              @endif
              </li>

            <ul class="seats">
              <li style="bottom: 50%;"  class="seat">
              
             
              @php $table= app\Tables::where('name','E')->first(); @endphp
              <input type="checkbox" name="table[E4]" id="E4" />
              <label style="max-width: max-content;" for="E4"><img type="image" height="85" for="E4" data-toggle="tooltip"   title="E4" src="{{asset('website/img/e.png')}}"   /> </label>
              <div class="centered"><b>E4  </b></div>
              <div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill E4" fill="currentColor" >
              <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
              </svg></div>
           
              </li>
              
            </ul>
            
          
            
              <ul class="seats">
              <li  class="seat D%table">
              @if(in_array('D5', $tables))
              <label ><img type="image"  data-toggle="tooltip"   title="D5 @lang('site.reserved')" src="{{asset('website/img/d.png')}}"   /> </label>
              <div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" >
              <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
              </svg></div>
              @else
              @php $table= app\Tables::where('name','VIP')->first(); @endphp
              <input type="checkbox" name="table[D5]" id="D5" />
              <label for="D5"><img type="image" for="D5" data-toggle="tooltip"   title="D5" src="{{asset('website/img/d.png')}}"   /> </label>
          <div class="centered"><b>VIP  </b></div>

              @endif
              </li>

              </ul>
              <ul class="seats">
              <li  class="seat">
              @if(in_array('D6', $tables))
              <label ><img type="image"  data-toggle="tooltip"   title="D6 @lang('site.reserved')" src="{{asset('website/img/d.png')}}"   /> </label>
              <div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" >
              <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
              </svg></div>
              @else
              @php $table= app\Tables::where('name','VIP')->first(); @endphp
              <input type="checkbox" name="table[D6]" id="D6" />
              <label for="D6"><img type="image" for="D6" data-toggle="tooltip"   title="D6" src="{{asset('website/img/d.png')}}"   /> </label>
          <div class="centered"><b>VIP  </b></div>

              @endif
              </li>
              
            </ul>
            
          </ul>
  </ol>
  
  
</div>
<div class="col-md-12">
  
  <ol class="seats ftables" type="D" >
  <ul class="seats">
            <li style="right: 20%;" class="seat">
              @if(in_array('F1', $tables))
              <label ><img type="image"  data-toggle="tooltip"   title="F1 @lang('site.reserved')" src="{{asset('website/img/f.png')}}"   /> </label>
              <div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" >
              <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
              </svg></div>
              @else
              @php $table= app\Tables::where('name','VIP')->first(); @endphp
              <input type="checkbox" name="table[F1]" id="F1" />
              <label for="F1"><img type="image" for="F1" data-toggle="tooltip"   title="F1" src="{{asset('website/img/f.png')}}"   /> </label>
          <div class="centered"><b>VIP  </b></div>

              @endif
          </li>
          <li style="right: 20%;" class="seat">
              @if(in_array('F2', $tables))
              <label ><img type="image"  data-toggle="tooltip"   title="F2 @lang('site.reserved')" src="{{asset('website/img/f.png')}}"   /> </label>
              <div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" >
              <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
              </svg></div>
              @else
              @php $table= app\Tables::where('name','VIP')->first(); @endphp
              <input type="checkbox" name="table[F2]" id="F2" />
              <label for="F2"><img type="image" for="F2" data-toggle="tooltip"   title="F2" src="{{asset('website/img/f.png')}}"   /> </label>
          <div class="centered"><b>VIP  </b></div>

              @endif
              </li>
        
             <ul class="seats">
                 
             <li style="right: 50%;" class="seat">
              @if(in_array('Fbig', $tables))
              <label style="width: max-content;" ><img type="image" width="150"  data-toggle="tooltip"   title="Fbig @lang('site.reserved')" src="{{asset('website/img/fbig.png')}}"   /> </label>
              <div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" >
              <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
              </svg></div>
              @else
              @php $table= app\Tables::where('name','VIP')->first(); @endphp
              <input type="checkbox" name="table[Fbig]" id="Fbig" />
              <label style="width: max-content;" for="Fbig"><img type="image" width="150"  for="Fbig" data-toggle="tooltip"   title="Fbig" src="{{asset('website/img/fbig.png')}}"   /> </label>
          
              @endif
              </li>
             </ul>
            
          
            
              
              <li  class="seat">
              @if(in_array('F3', $tables))
              <label ><img type="image"  data-toggle="tooltip"   title="F3 @lang('site.reserved')" src="{{asset('website/img/f.png')}}"   /> </label>
              <div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" >
              <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
              </svg></div>
              @else
              @php $table= app\Tables::where('name','VIP')->first(); @endphp
              <input type="checkbox" name="table[F3]" id="F3" />
              <label for="F3"><img type="image" for="F3" data-toggle="tooltip"   title="F3" src="{{asset('website/img/f.png')}}"   /> </label>
          <div class="centered"><b>VIP  </b></div>

              @endif
              </li>

            
            
              <li  class="seat">
              @if(in_array('F4', $tables))
              <label ><img type="image"  data-toggle="tooltip"   title="F4 @lang('site.reserved')" src="{{asset('website/img/f.png')}}"   /> </label>
              <div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" >
              <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
              </svg></div>
              @else
              @php $table= app\Tables::where('name','VIP')->first(); @endphp
              <input type="checkbox" name="table[F4]" id="F4" />
              <label for="F4"><img type="image" for="F4" data-toggle="tooltip"   title="F4" src="{{asset('website/img/f.png')}}"   /> </label>
          <div class="centered"><b>VIP  </b></div>

              @endif
              </li>
              <li  class="seat">
              @if(in_array('F5', $tables))
              <label ><img type="image"  data-toggle="tooltip"   title="F5 @lang('site.reserved')" src="{{asset('website/img/f.png')}}"   /> </label>
              <div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" >
              <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
              </svg></div>
              @else
              @php $table= app\Tables::where('name','VIP')->first(); @endphp
              <input type="checkbox" name="table[F5]" id="F5" />
              <label for="F5"><img type="image" for="F5" data-toggle="tooltip"   title="F5" src="{{asset('website/img/f.png')}}"   /> </label>
          <div class="centered"><b>VIP  </b></div>

              @endif
              </li>
            
            
          </ul>
  </ol>
  
  
</div>
</div>

<div class="exit exit--back fuselage">

</div>
</div>

</div>
@php $start='12:30 am'; $end='11:59 pm';  @endphp
        @if( strtotime($start) <= strtotime( date('h:i a')) && strtotime( date('h:i a')) <=strtotime($end)  )
        
                     <div class="col-md-5 col-md-offset-1">
                        <label> @lang('site.name') </label>
                            <input type="text" placeholder="Name" class="form-control"  name="name" required>
                           
                        </div>

                        <div class="col-md-5">

                           
                            <label> @lang('site.phone') </label>
                            <input type="number" placeholder="Phone" class="form-control" name="phone" required>
                             <br>
                            
                        </div>
                          
 
                            <input type="submit" style="background: #e3cd71;" class="btn btn-warning btn-lg btn-block" value="@lang('site.send')" >
                     @else
                   
                     <div class="col-md-12">
                        <div class="date_slide_subtitle">@lang('site.time_booking')</div>
                        </div>
                     
                @endif    
              </form>


                </div>
          <!-- booking table -->
        
        </div>





</div>
      
       
    


        </section>



    </section>
    <!-- Content End -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script>
       
         
//        $.ajaxSetup({

// headers: {

//     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

// }
// });
    
        
//     $('input[type="checkbox"]').on('click', function(){
        
//         var data = {};
//        var id= data.id = $(this).attr('id');
//         var value =data.value = $(this).is(':checked') ? 1 : 0;
        
//         if(value == 1){
//             alert('Are You Sure Of your reservation'+' '+'Table '+' '+id);
//             swal("Good job!", "sdfasfasf", "success");
//         }else{
//             alert('Are You Sure  to cancel your reservation'+' '+'Table '+' '+id);
//         }
    
//         console.log(data);

//         $.ajax({
//             type: "POST",
//             url: $("form").attr('action'),
//             headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
//             data: data,
//         }).done(function(data) {
//                 console.log(data);
//                 alert(error);
//         });
//     });

 

</script>

    <script>
         
 

    var menuItems = $('.main-navigation li');

menuItems.on("click", function(event) {
    
  menuItems.removeClass("active");
  
  $(this).addClass("active");
  
  $(".main-content").css({
    "background": $(this).data("bg-color")
    
  });
  
  event.preventDefault();
});



</script>
<script>
$(document).ready(function(){

   $(".centered svg").hide();
    $(".date_jq").change(function(){
      $(".centered svg").hide();
        $('input[type="checkbox"]').off("click", false);
        $('input[type="checkbox"]').removeAttr('checked');

        let _url   = $('meta[name="url"]').attr('content');

          var str = $(".date_jq").val();
          

            $.ajax({
              url: "{{url('/gettabledate')}}",
              type:"GET",
              data:{
                date:str,
               
              },
              success:function(response){
                 if (response['tables'].length > 0 )
                 {
                   
                    if(response['tables'].length >0){
                      var date= response['date'];
                      
                      var dayNames = new Array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Sunday');
                      var currentDate = Math.round(+new Date(date)/1000);
                      var nData = new Date(currentDate);
                      var day= dayNames[nData.getDay()];
                      
                      from = date.split("-");
                      date= from[2]+'/'+from[1] ;
                      date=  " محجوز به "+ response['tables'].length+" طاولات " +day+"يوم " + date;
                      
                      var date2= "("+ response['tables']+")"+"وهم";

                      
                   
                      swal(date,date2 ,"info")
                     
                    $.each(response['tables'], function( index, value ) {
                      $(".centered  ."+value).show();
                    table=  $('input[name="'+'table['+value+']'+'"]').on("click", false);
                    
                      });
                    }
                  
                   
                
                 }else{
                      
                      $(".centered svg").hide();
                      $('input[type="checkbox"]').off("click", false);
                      $('input[type="checkbox"]').removeAttr('checked');
                    }
              
                // if(response) {
                  
                //   $('.success').text(response.success);
                //   $("#ajaxform")[0].reset();
                // }
              },
          });
        

    
     });
});



</script>
@endsection
