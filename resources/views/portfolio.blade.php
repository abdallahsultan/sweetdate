@extends('layouts.website')

@section('content')
 
 
        <div class="page-title-area item-bg-1">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-title-content">
                            <h2>@lang('site.projects')</h2>
                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Protfolio Area -->
        <section class="protfolio-section pt-100 pb-100">
            <div class="container">
 

                <div class="row">

                    @foreach($projects as $project)

        <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-protfolio">
                            <div class="image">
                                <a href="{{ route('projectdetails', $project->id )}}">
                                    <img src="{{ asset('images/' . $project->avatar) }}" alt="image" style="width: 100%;max-height: 310px;">
                                </a>
                            </div>

                            <div class="content">
                                <a href="{{ route('projectdetails', $project->id )}}">
                                    <h3>{{ $project->title }}</h3>
                                </a>
                                <a href="{{ route('projectdetails', $project->id )}}">
                                    <span>{{ $project->category->title }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach

 
                </div>
            </div>
        </section>
 
@endsection
