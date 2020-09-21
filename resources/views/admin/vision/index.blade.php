@extends('layouts.admin')

@section('content')


<div class="page-body">
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <div class="col-lg-6">
            <h3>من نحن</h3>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item">الرئيسيه</li>
              <li class="breadcrumb-item">من نحن</li>
              <li class="breadcrumb-item active"> تعديل </li>
            </ol>
          </div>

        </div>
      </div>
    </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <form id="personal-info" method="POST" action="{{ route('dashboard.about.update', $about->id ) }}" enctype="multipart/form-data">
                  @csrf
                @method('PUT')

                @foreach (config('translatable.locales') as $index=>$locale)

                <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label"> عنوان من نحن</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-1" name="{{$locale}}[title]" value="{{ $about->translate($locale)->title }}" required>
                  </div>
                </div>

                <div class="form-group row">
                    <label for="input-4" class="col-sm-2 col-form-label"> الوصف الصغير {{ $locale }}</label>
                    <div class="col-sm-10">
                      <textarea class="summernote" name="{{$locale}}[small_title]">{{ $about->translate($locale)->small_title }}</textarea>
                    </div>
                  </div>


                <div class="form-group row">
                  <label for="input-4" class="col-sm-2 col-form-label"> وصف من نحن</label>
                  <div class="col-sm-10">
                    <textarea class="summernote" id="summernoteEditor" name="{{$locale}}[body]">{{ $about->translate($locale)->body }}</textarea>
                  </div>
                </div>

                @endforeach
                <div class="row">
                    <div class="col-md-6">
                <div class="form-group row">
                    <label for="input-2" class="col-sm-2 col-form-label">صوره من نحن</label>
                    <div class="col-sm-10">
                      <input type="file" name="avatar" class="form-control" id="input-2">
                    </div>
                  </div>
                    </div>
                    <div class="col-md-6">
                        <img style="max-width: 100%;" src="{{ asset('images/'. $about->avatar ) }}" class="img-responsive">
                    </div>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i>  حفظ</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div><!--End Row-->
@endsection
@push('js')

<script src="{{ asset('main/summernote.js') }}"></script>
<script src="{{ asset('main/summernote.custom.js') }}"></script>

@endpush
