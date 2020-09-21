@extends('layouts.website')

@section('content')


        <div class="page-title-area item-bg-1">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <h2>{{ $product->title }}</h2>
                    </div>
                </div>
			</div>

            <div class="shape1"><img src="{{ asset('images/shape1.png') }}" alt="shape"></div>
            <div class="shape2 rotateme"><img src="{{ asset('images/shape2.svg') }}" alt="shape"></div>
            <div class="shape3"><img src="{{ asset('images/shape3.svg') }}" alt="shape"></div>
            <div class="shape4"><img src="{{ asset('images/shape4.svg') }}" alt="shape"></div>
            <div class="shape5"><img src="{{ asset('images/shape5.png') }}" alt="shape"></div>
            <div class="shape6 rotateme"><img src="{{ asset('images/shape4.svg') }}" alt="shape"></div>
            <div class="shape7"><img src="{{ asset('images/shape4.svg') }}" alt="shape"></div>
            <div class="shape8 rotateme"><img src="{{ asset('images/shape2.svg') }}" alt="shape"></div>
        </div>
        <!-- End Page Title -->

        <!-- Start Shop Details Area -->
        <section class="shop-details-area ptb-80">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="products-details-image ">
							<div class="single-image-box">
								<img src="{{ asset('images/'. $product->avatar ) }}" alt="img">
							</div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="products-details">
                            <h3{{ $product->title }}</h3>

                           {!! $product->body !!}


                    </div>
                </div>
            </div>
        </section>
        <!-- End Shop Details Area -->



@endsection
