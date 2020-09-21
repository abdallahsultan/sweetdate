@extends('layouts.admin')

@section('content')


<div class="page-body">
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <h3>الجزء العلوي</h3>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">الرئيسيه</li>
            <li class="breadcrumb-item active">الجزء العلوي</li>
          </ol>
        </div>
 
      </div>
 
  <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">

                @include('partials.error')

              <form id="personal-info" method="POST" action="{{ route('dashboard.slider.update', $slider->id) }}" enctype="multipart/form-data">
                  @csrf

                @csrf
                @method('PUT')




                  @foreach (config('translatable.locales') as $index=>$locale)
                <div class="form-group row">
                  <label for="input-1" class="col-sm-3 col-form-label">slider Title in  {{ $locale }}</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="input-1" name="{{$locale}}[title]" value="{{ $slider->translate($locale)->title }}" required>
                  </div>
                </div>


                <div class="form-group row">
                  <label for="input-4" class="col-sm-3 col-form-label">slider Body in  {{ $locale }}</label>
                  <div class="col-sm-6">
                    <input  class="form-control" name="{{$locale}}[body]" value="{{ $slider->translate($locale)->body }}"> 
                  </div>
                </div>

                @endforeach

                <div class="form-group row">
                    <label for="input-2" class="col-sm-3 col-form-label">slider Avatar</label>
                    <div class="col-sm-6">
                      <input type="file" name="avatar" class="form-control" id="input-2">
                    </div>
                  </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> حفظ</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div><!--End Row-->
@endsection
