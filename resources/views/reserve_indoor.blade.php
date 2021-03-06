@extends('layouts.website')

@section('content')

<div class="date_slider date_slider_inside date_image_bck date_fixed date_wht_txt" data-stellar-background-ratio="0.3" data-image="{{ asset('images/slider/sl5.jpg') }}">

    <div class="date_slider_firefly" data-total="30" data-min="1" data-max="3"></div>

    <div class="date_over" data-color="#000" data-opacity="0.8"></div>

    <div class="container">
        <div class="date_slide_txt date_slide_center_middle text-center">
            <img src="{{ asset('images/' . $setting->logo ) }}" alt="" height="180"><br>
            <div class="date_gold">{{ $setting->name }}</div>
            <div class="date_slide_subtitle">@lang('site.reserve')/@lang('site.indoor')</div>
        </div>
    </div>
</div>


    <section id="date_content" class="date_content">


        <section class="date_section">

                <div class="container text-center">


                    <div class="row">
                        <form method="POST" action="{{ route('makereservationindoor') }}">
                            @csrf
                        <div class="col-md-5 col-md-offset-1">
                        <label> @lang('site.name') </label>
                            <input type="text" placeholder="Name" class="form-control"  name="name" required>
                           
                        </div>

                        <div class="col-md-5">

                           
                            <label> @lang('site.phone') </label>
                            <input type="number" placeholder="Phone" class="form-control" name="phone" required>
                             <br>
                            
                           
                        
                        </div>
                        <div class="col-md-12">
                        <div class="date_slide_subtitle">You must choose your location Before Click Send</div>
                        </div>
                    </div>
                    <div class="indoor">
        <div class="container-fluid text-center">

<div class="row">
<div class="col-md-12">
<div class="date_slide_subtitle">@lang('site.indoor')</div>
</div>


</div>





</div>
<!-- slider end -->
<div class="plane">
<div class="cockpit">
<h1>Satge Area</h1>
</div>
<div class="row">
<div class="col-md-8">
<ol class="cabin fuselage">
<li class="row row--1">
<ul class="seats" type="A">
    
<li class="seat">
   
    
@if(in_array('vip1', $tables))
<label ><img type="image"  data-toggle="tooltip"   title="VIP1 @lang('site.reserved')" src="{{asset('website/img/vipleft.png')}}"   /> </label>
<div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" >
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></div>
@else
<input type="checkbox"  name="table[vip1]"  id="vip1" />
<label for="vip1"><img type="image" for="vip1" data-toggle="tooltip"   title="VIP1" src="{{asset('website/img/vipleft.png')}}"   /> </label>
<div class="centered"><b>VIP </b></div>
@endif
</li>

<br>
<li class="seat">
@if(in_array('vip2', $tables))
<label ><img type="image"  data-toggle="tooltip"   title="VIP2 @lang('site.reserved')" src="{{asset('website/img/vipright.png')}}"   /> </label>
<div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" >
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></div>
@else
<input type="checkbox" name="table[vip2]"  id="vip2" />
<label for="vip2"><img type="image" for="vip2" data-toggle="tooltip"   title="VIP2" src="{{asset('website/img/vipright.png')}}"   /> </label>
@endif
</li>
<li class="seat">
@if(in_array('A1', $tables))
<label ><img type="image"  data-toggle="tooltip"   title="A1 @lang('site.reserved')" src="{{asset('website/img/a.png')}}"   /> </label>
<div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" >
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></div>
@else
<input type="checkbox" name="table[A1]" id="A1" />
<label for="A1"><img type="image" for="A1" data-toggle="tooltip"   title="A1" src="{{asset('website/img/a.png')}}"   /> </label>
<div class="centered"><b>A Class </b></div>
@endif
</li>

<li class="seat">
@if(in_array('B1', $tables))
<label ><img type="image"  data-toggle="tooltip"   title="B1 @lang('site.reserved')" src="{{asset('website/img/b.png')}}"   /> </label>
<div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" >
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></div>
@else
<input type="checkbox" name="table[B1]" id="B1" />
<label for="B1"><img type="image" for="B1" data-toggle="tooltip"   title="B1" src="{{asset('website/img/b.png')}}"   /> </label>
<div class="centered"><b>B Class </b></div>
@endif
</li>
</ul>

</li>
<li class="row row--1">
<ul class="seats" type="A">
<li class="seat">
@if(in_array('vip3', $tables))
<label ><img type="image"  data-toggle="tooltip"   title="vip3 @lang('site.reserved')" src="{{asset('website/img/vipleft.png')}}"   /> </label>
<div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" >
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></div>
@else
<input type="checkbox" name="table[vip3]"    id="vip3" />
<label for="vip3"><img type="image" for="vip3" data-toggle="tooltip"   title="VIP3" src="{{asset('website/img/vipleft.png')}}"   /> </label>
@endif
</li><br>
<li class="seat">
@if(in_array('vip4', $tables))
<label ><img type="image"  data-toggle="tooltip"   title="vip4 @lang('site.reserved')" src="{{asset('website/img/vipright.png')}}"   /> </label>
<div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" >
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></div>
@else
<input type="checkbox" name="table[vip4]" id="vip4" />
<label for="vip4"><img type="image" for="vip4" data-toggle="tooltip"   title="VIP4" src="{{asset('website/img/vipright.png')}}"   /> </label>
@endif
</li>

<li class="seat">
@if(in_array('A2', $tables))
<label ><img type="image"  data-toggle="tooltip"   title="A2 @lang('site.reserved')" src="{{asset('website/img/a.png')}}"   /> </label>
<div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" >
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></div>
@else
<input type="checkbox" name="table[A2]" id="A2" />
<label for="A2"><img type="image" for="A2" data-toggle="tooltip"   title="A2" src="{{asset('website/img/a.png')}}"   /> </label>
@endif
</li>
<li class="seat">
@if(in_array('B2', $tables))
<label ><img type="image"  data-toggle="tooltip"   title="B2 @lang('site.reserved')" src="{{asset('website/img/b.png')}}"   /> </label>
<div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" >
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></div>
@else
<input type="checkbox" name="table[B2]" id="B2" />
<label for="B2"><img type="image" for="B2" data-toggle="tooltip"   title="B2" src="{{asset('website/img/b.png')}}"   /> </label>
@endif
</li>
</ul>

</li>

<li class="row row--2">
<ol class="seats" type="A">
<li class="seat">
@if(in_array('A6', $tables))
<label ><img type="image"  data-toggle="tooltip"   title="A6 @lang('site.reserved')" src="{{asset('website/img/a.png')}}"   /> </label>
<div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" >
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></div>
@else
<input type="checkbox" name="table[A6]" id="A6" />
<label for="A6"><img type="image" for="A6" data-toggle="tooltip"   title="A6" src="{{asset('website/img/a.png')}}"   /> </label>
@endif
</li>
<li class="seat">
@if(in_array('A5', $tables))
<label ><img type="image"  data-toggle="tooltip"   title="A5 @lang('site.reserved')" src="{{asset('website/img/vipleft.png')}}"   /> </label>
<div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" >
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></div>
@else
<input type="checkbox" name="table[A5]" id="A5" />
<label for="A5"><img type="image" for="A5" data-toggle="tooltip"   title="A5" src="{{asset('website/img/a.png')}}"   /> </label>
@endif
</li>

<br>
<li class="seat">
@if(in_array('A4', $tables))
<label ><img type="image"  data-toggle="tooltip"   title="A4 @lang('site.reserved')" src="{{asset('website/img/a.png')}}"   /> </label>
<div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" >
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></div>
@else
<input type="checkbox" name="table[A4]" id="A4" />
<label for="A4"><img type="image" for="A4" data-toggle="tooltip"   title="A4" src="{{asset('website/img/a.png')}}"   /> </label>
@endif
</li>
<li class="seat">
@if(in_array('A3', $tables))
<label ><img type="image"  data-toggle="tooltip"   title="A3 @lang('site.reserved')" src="{{asset('website/img/a.png')}}"   /> </label>
<div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" >
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></div>
@else
<input type="checkbox" name="table[A3]" id="A3" />
<label for="A3"><img type="image" for="A3" data-toggle="tooltip"   title="A3" src="{{asset('website/img/a.png')}}"   /> </label>
@endif
</li>

<li class="seat">
@if(in_array('B3', $tables))
<label ><img type="image"  data-toggle="tooltip"   title="B3 @lang('site.reserved')" src="{{asset('website/img/b.png')}}"   /> </label>
<div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" >
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></div>
@else
<input type="checkbox" name="table[B3]" id="B3" />
<label for="B3"><img type="image" for="B3" data-toggle="tooltip"   title="B3" src="{{asset('website/img/b.png')}}"   /> </label>
@endif
</li>
</ol>
</li>
<li class="row row--3">
<ol class="seats" type="A">
<li class="seat">
@if(in_array('A10', $tables))
<label ><img type="image"  data-toggle="tooltip"   title="A10 @lang('site.reserved')" src="{{asset('website/img/a.png')}}"   /> </label>
<div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" >
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></div>
@else
<input type="checkbox" name="table[A10]" id="A10" />
<label for="A10"><img type="image" for="A10" data-toggle="tooltip"   title="A10" src="{{asset('website/img/a.png')}}"   /> </label>
@endif
</li>
<li class="seat">
@if(in_array('A9', $tables))
<label ><img type="image"  data-toggle="tooltip"   title="A9 @lang('site.reserved')" src="{{asset('website/img/a.png')}}"   /> </label>
<div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" >
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></div>
@else
<input type="checkbox" name="table[A9]" id="A9" />
<label for="A9"><img type="image" for="A9" data-toggle="tooltip"   title="A9" src="{{asset('website/img/a.png')}}"   /> </label>
@endif
</li>
<br>
<li class="seat">
@if(in_array('A8', $tables))
<label ><img type="image"  data-toggle="tooltip"   title="A8 @lang('site.reserved')" src="{{asset('website/img/a.png')}}"   /> </label>
<div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" >
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></div>
@else
<input type="checkbox" name="table[A8]" id="A8" />
<label for="A8"><img type="image" for="A8" data-toggle="tooltip"   title="A8" src="{{asset('website/img/a.png')}}"   /> </label>
@endif
</li>
<li class="seat">
@if(in_array('A7', $tables))
<label ><img type="image"  data-toggle="tooltip"   title="A7 @lang('site.reserved')" src="{{asset('website/img/a.png')}}"   /> </label>
<div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" >
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></div>
@else
<input type="checkbox" name="table[A7]" id="A7" />
<label for="A7"><img type="image" for="A7" data-toggle="tooltip"   title="A7" src="{{asset('website/img/a.png')}}"   /> </label>
@endif
</li>
<li class="seat">
@if(in_array('B4', $tables))
<label ><img type="image"  data-toggle="tooltip"   title="B4 @lang('site.reserved')" src="{{asset('website/img/b.png')}}"   /> </label>
<div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" >
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></div>
@else
<input type="checkbox" name="table[B4]" id="B4" />
<label for="B4"><img type="image" for="B4" data-toggle="tooltip"   title="B4" src="{{asset('website/img/b.png')}}"   /> </label>
@endif
</li>
</ol>
</li>

</ol>
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
@if(in_array('vipplus', $tables))
<label style="width: max-content;" ><img type="image" width="170" data-toggle="tooltip"   src="{{asset('website/img/vippuls.png')}}"   /> </label>
<div class="centered"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" >
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></div>
@else
<input type="checkbox" name="table[vipplus]" id="vipplus" />
<label style="width: max-content;" for="vipplus"><img type="image" width="170"  for="vipplus"  src="{{asset('website/img/vippuls.png')}}"   /> </label>
<div class="centered"><b>VIP +</b></div>
@endif
</li>
</ul>



</ul>

</li>

</div>
</div>

<div class="exit exit--back fuselage">

</div>
</div>

</div>

 <input type="submit" style="background: #e3cd71;" class="btn btn-warning btn-lg btn-block" value="@lang('site.send')" >
     </form>


                </div>
          <!-- booking table -->
        
        </div>

<!-- 
<div class="container-fluid text-center">

<div class="row">
<div class="col-md-12">
<div class="date_slide_subtitle">Outdoor</div>
</div>


</div> -->





</div>
      
       
       
<!--             

<div class="plane2">
<div class="cockpit2">
<h1>Please select a seat</h1>
</div>

<ol class="cabin2 fuselage2">
<li class="row row--1">
<ol class="seats" type="A">
<li class="seat">
<input type="checkbox" id="1A" />
<label for="1A">1A</label>
</li>
<li class="seat">
<input type="checkbox" id="1B" />
<label for="1B">1B</label>
</li>
<li class="seat">
<input type="checkbox" id="1C" />
<label for="1C">1C</label>
</li>
<li class="seat">
<input type="checkbox" disabled id="1D" />
<label for="1D">Occupied</label>
</li>
<li class="seat">
<input type="checkbox" id="1E" />
<label for="1E">1E</label>
</li>
<li class="seat">
<input type="checkbox" id="1F" />
<label for="1F">1F</label>
</li>
</ol>
</li>
<li class="row row--2">
<ol class="seats" type="A">
<li class="seat">
<input type="checkbox" id="2A" />
<label for="2A">2A</label>
</li>
<li class="seat">
<input type="checkbox" id="2B" />
<label for="2B">2B</label>
</li>
<li class="seat">
<input type="checkbox" id="2C" />
<label for="2C">2C</label>
</li>
<li class="seat">
<input type="checkbox" id="2D" />
<label for="2D">2D</label>
</li>
<li class="seat">
<input type="checkbox" id="2E" />
<label for="2E">2E</label>
</li>
<li class="seat">
<input type="checkbox" id="2F" />
<label for="2F">2F</label>
</li>
</ol>
</li>
<li class="row row--3">
<ol class="seats" type="A">
<li class="seat">
<input type="checkbox" id="3A" />
<label for="3A">3A</label>
</li>
<li class="seat">
<input type="checkbox" id="3B" />
<label for="3B">3B</label>
</li>
<li class="seat">
<input type="checkbox" id="3C" />
<label for="3C">3C</label>
</li>
<li class="seat">
<input type="checkbox" id="3D" />
<label for="3D">3D</label>
</li>
<li class="seat">
<input type="checkbox" id="3E" />
<label for="3E">3E</label>
</li>
<li class="seat">
<input type="checkbox" id="3F" />
<label for="3F">3F</label>
</li>
</ol>
</li>
<li class="row row--4">
<ol class="seats" type="A">
<li class="seat">
<input type="checkbox" id="4A" />
<label for="4A">4A</label>
</li>
<li class="seat">
<input type="checkbox" id="4B" />
<label for="4B">4B</label>
</li>
<li class="seat">
<input type="checkbox" id="4C" />
<label for="4C">4C</label>
</li>
<li class="seat">
<input type="checkbox" id="4D" />
<label for="4D">4D</label>
</li>
<li class="seat">
<input type="checkbox" id="4E" />
<label for="4E">4E</label>
</li>
<li class="seat">
<input type="checkbox" id="4F" />
<label for="4F">4F</label>
</li>
</ol>
</li>
<li class="row row--5">
<ol class="seats" type="A">
<li class="seat">
<input type="checkbox" id="5A" />
<label for="5A">5A</label>
</li>
<li class="seat">
<input type="checkbox" id="5B" />
<label for="5B">5B</label>
</li>
<li class="seat">
<input type="checkbox" id="5C" />
<label for="5C">5C</label>
</li>
<li class="seat">
<input type="checkbox" id="5D" />
<label for="5D">5D</label>
</li>
<li class="seat">
<input type="checkbox" id="5E" />
<label for="5E">5E</label>
</li>
<li class="seat">
<input type="checkbox" id="5F" />
<label for="5F">5F</label>
</li>
</ol>
</li>
<li class="row row--6">
<ol class="seats" type="A">
<li class="seat">
<input type="checkbox" id="6A" />
<label for="6A">6A</label>
</li>
<li class="seat">
<input type="checkbox" id="6B" />
<label for="6B">6B</label>
</li>
<li class="seat">
<input type="checkbox" id="6C" />
<label for="6C">6C</label>
</li>
<li class="seat">
<input type="checkbox" id="6D" />
<label for="6D">6D</label>
</li>
<li class="seat">
<input type="checkbox" id="6E" />
<label for="6E">6E</label>
</li>
<li class="seat">
<input type="checkbox" id="6F" />
<label for="6F">6F</label>
</li>
</ol>
</li>
<li class="row row--7">
<ol class="seats" type="A">
<li class="seat">
<input type="checkbox" id="7A" />
<label for="7A">7A</label>
</li>
<li class="seat">
<input type="checkbox" id="7B" />
<label for="7B">7B</label>
</li>
<li class="seat">
<input type="checkbox" id="7C" />
<label for="7C">7C</label>
</li>
<li class="seat">
<input type="checkbox" id="7D" />
<label for="7D">7D</label>
</li>
<li class="seat">
<input type="checkbox" id="7E" />
<label for="7E">7E</label>
</li>
<li class="seat">
<input type="checkbox" id="7F" />
<label for="7F">7F</label>
</li>
</ol>
</li>
<li class="row row--8">
<ol class="seats" type="A">
<li class="seat">
<input type="checkbox" id="8A" />
<label for="8A">8A</label>
</li>
<li class="seat">
<input type="checkbox" id="8B" />
<label for="8B">8B</label>
</li>
<li class="seat">
<input type="checkbox" id="8C" />
<label for="8C">8C</label>
</li>
<li class="seat">
<input type="checkbox" id="8D" />
<label for="8D">8D</label>
</li>
<li class="seat">
<input type="checkbox" id="8E" />
<label for="8E">8E</label>
</li>
<li class="seat">
<input type="checkbox" id="8F" />
<label for="8F">8F</label>
</li>
</ol>
</li>
<li class="row row--9">
<ol class="seats" type="A">
<li class="seat">
<input type="checkbox" id="9A" />
<label for="9A">9A</label>
</li>
<li class="seat">
<input type="checkbox" id="9B" />
<label for="9B">9B</label>
</li>
<li class="seat">
<input type="checkbox" id="9C" />
<label for="9C">9C</label>
</li>
<li class="seat">
<input type="checkbox" id="9D" />
<label for="9D">9D</label>
</li>
<li class="seat">
<input type="checkbox" id="9E" />
<label for="9E">9E</label>
</li>
<li class="seat">
<input type="checkbox" id="9F" />
<label for="9F">9F</label>
</li>
</ol>
</li>
<li class="row row--10">
<ol class="seats" type="A">
<li class="seat">
<input type="checkbox" id="10A" />
<label for="10A">10A</label>
</li>
<li class="seat">
<input type="checkbox" id="10B" />
<label for="10B">10B</label>
</li>
<li class="seat">
<input type="checkbox" id="10C" />
<label for="10C">10C</label>
</li>
<li class="seat">
<input type="checkbox" id="10D" />
<label for="10D">10D</label>
</li>
<li class="seat">
<input type="checkbox" id="10E" />
<label for="10E">10E</label>
</li>
<li class="seat">
<input type="checkbox" id="10F" />
<label for="10F">10F</label>
</li>
</ol>
</li>
</ol>
<div class="exit exit--back fuselage">

</div>
</div>
-->



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
@endsection
