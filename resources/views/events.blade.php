@extends('layouts.website')

@section('content')

<div class="date_slider date_slider_inside date_image_bck date_fixed date_wht_txt" data-stellar-background-ratio="0.3" data-image="{{ asset('images/slider/sl5.jpg') }}">

    <div class="date_slider_firefly" data-total="30" data-min="1" data-max="3"></div>

    <div class="date_over" data-color="#000" data-opacity="0.8"></div>

    <div class="container">
        <div class="date_slide_txt date_slide_center_middle text-center">
            <img src="{{ asset('images/' . $setting->logo ) }}" alt="" height="180"><br>
            <div class="date_gold">{{ $setting->name }}</div>
            <div class="date_slide_subtitle"> @lang('site.events')</div>
        </div>
    </div>
</div>
    <section id="date_content" class="date_content">

        <section class="date_section date_section_no_overlay">


            <div class="container text-center">

                <div class="row">

                    @foreach ($blogs as $blog)

                    <div class="col-md-4">
                    <div class="date_news_block text-center">
                        <a href="{{ route('eventdetails', $blog->id ) }}">
                        <span class="date_news_img_parent"><span class="date_news_img date_image_bck" data-image="{{ asset('images/' . $blog->avatar ) }}"></span></span>
                        <span class="date_news_title date_gold_subtitle" style="margin-top: 13px;">{{ $blog->title }}</span>
                        <p>{{ strip_tags(substr($blog->body,0,90)) }}</p>
                        </a>
                    </div>
                    </div>

                    @endforeach
                    <div class="col-lg-12 col-md-12">
                        <div class="pagination-area">

                           {{ $blogs->links() }}
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </section>




@endsection
