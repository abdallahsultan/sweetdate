@extends('layouts.website')

@section('content')


        <div class="page-title-area item-bg-1">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <h2>{{ $project->title }}</h2>
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
        <!-- End Page Title -->

        <!-- Start Project Details Area -->
		<section class="project-details-area ptb-80">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="project-details-image">
                            <img src="{{ asset('images/' . $project->avatar) }}" alt="work">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">

                            <h3>{{ $project->title }}</h3>

                            {!!  $project->body  !!}

                    </div>
                    </div>


                    <div class="row">
                    @if ( $project->gallery)

                    <div class="portfolio wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">

                        @php $photos = explode('/', $project->gallery);  @endphp

                        <div class="row">
                        @foreach ($photos as $photo)

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="project-details-image">
                            <img src="{{ asset('images/' . $photo ) }}" alt="work">

                            <a href="{{ asset('images/' . $photo ) }}" class="popup-btn"><i data-feather="plus"></i></a>
                        </div>
                    </div>


                    @endforeach

            </div>
                    </div>

            @endif

                    </div>

                </div>
            </div>
        </section>









        @if ($project->video)

        <div class="section-full bg-white content-inner video-sction" style="background-image:url({{ asset('images/background/services.jpg') }}); background-size: cover;">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="head-title m-b10">Project Video </h2>

                </div>

                <div class="row">
                    <video width="620" height="420" controls style="margin: 0 auto;" poster="{{ asset('images/' . $project->avatar) }}">
                        <source src="{{ asset('images/' . $project->video ) }}" type="video/mp4">
                        <source src="{{ asset('images/' . $project->video ) }}" type="video/ogg">
                      </video>

                </div>
            </div>
        </div>
        @endif


@endsection
