@extends('layouts.website')

@section('content')


        <div class="page-title-area item-bg-1">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-title-content">
                            <h2>@lang('site.services')</h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="agency-services-section pt-100 pb-100">
            <div class="container">

                <div class="row">

                     @foreach ($services as $service)


                    <div class="col-lg-4 col-md-6">
                        <div class="single-services">
                            <div class="icon bg-deb0fe">
                              <img src="{{ asset('images/' . $service->avatar )}}" style="width: 82px;border: 2px dashed #e6138b;border-radius: 50%;">
                            </div>
                            <h3>{{ $service->title }}</h3>
                            <p>{{ strip_tags(substr($service->body,0,100)) }}</p>
                            <a href="{{ route('service', $service->id)}}" class="read-btn">@lang('site.view_more')</a>
                        </div>
                    </div>


                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Agency Services Area -->

@endsection
