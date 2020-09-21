@extends('layouts.website')

@section('content')

        <div class="page-title-area item-bg-1">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <h2> {{ $service->title }}</h2>
                    </div>
                </div>
			</div>

            <div class="default-shape">
                <div class="shape-1">
                    <img src="{{ asset('images/shape/4.png') }}" alt="image">
                </div>

                <div class="shape-2 rotateme">
                    <img src="{{ asset('images/shape/5.svg') }}" alt="image">
                </div>

                <div class="shape-3">
                    <img src="{{ asset('images/shape/6.svg') }}" alt="image">
                </div>

                <div class="shape-4">
                    <img src="{{ asset('images/shape/7.png') }}" alt="image">
                </div>

                <div class="shape-5">
                    <img src="{{ asset('images/shape/8.png') }}" alt="image">
                </div>
            </div>
        </div>
        </div>
        <!-- End Page Title -->

        <!-- Start Services Details Area -->
		<section class="services-details-area ptb-80">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 services-details">
						<div class="services-details-desc">
                            <h3>{{ $service->title }}</h3>

                            {!! $service->body !!}

						</div>
					</div>

					<div class="col-lg-6 services-details-image">
						<img src="{{ asset('images/' . $service->avatar ) }}" class="wow fadeInUp" alt="image">
					</div>
				</div>

				<div class="separate"></div>

			</div>
		</section>


@endsection
