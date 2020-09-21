@extends('layouts.website')

@section('content')

<div class="date_slider date_slider_inside date_image_bck date_fixed date_wht_txt" data-stellar-background-ratio="0.3" data-image="{{ asset('images/slider/sl5.jpg') }}">

    <div class="date_slider_firefly" data-total="30" data-min="1" data-max="3"></div>

    <div class="date_over" data-color="#000" data-opacity="0.8"></div>

    <div class="container">
        <div class="date_slide_txt date_slide_center_middle text-center">
            <img src="{{ asset('images/' . $setting->logo ) }}" alt="" height="180"><br>
            <div class="date_gold">{{ $setting->name }}</div>
            <div class="date_slide_subtitle">@lang('site.reserve')</div>
        </div>
    </div>
</div>


    <section id="date_content" class="date_content">


        <section class="date_section">

                <div class="container text-center">


                    <div class="row">
                        <form method="POST" action="{{ route('makereservation') }}">
                            @csrf
                        <div class="col-md-5 col-md-offset-1">
                            <label> @lang('site.date') </label>
                            <input type="date" placeholder="Date" class="form-control" name="date" required>
                            <label> @lang('site.time') </label>
                            <input type="time" placeholder="Time" class="form-control" name="time" required >
                            <label> @lang('site.tnumber') </label>
                            <input type="number" placeholder="Table Number" class="form-control" name="number" required>
                        </div>

                        <div class="col-md-5">

                            <label> @lang('site.name') </label>
                            <input type="text" placeholder="Name" class="form-control"  name="name" required>
                            <label> @lang('site.email') </label>
                            <input type="email" class="form-control" placeholder="Email" name="email" required>
                            <label> @lang('site.phone') </label>
                            <input type="number" placeholder="Phone" class="form-control" name="phone" required>
                        </div>

                        <div class="col-md-10 col-md-offset-1">
                            <textarea class="form-control" placeholder="Message" name="message" rows="6"></textarea>
                        </div>
                        <div class="col-md-4 col-md-offset-4">
                            <input type="submit" class="btn" value="@lang('site.send')" >
                        </div>
                    </div>


                </div>


        </section>



    </section>
    <!-- Content End -->



@endsection
