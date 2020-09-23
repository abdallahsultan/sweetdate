@extends('layouts.admin')

@section('content')
<link rel="stylesheet"  href="{{ asset('main/summernote.css')}}">
<div class="page-body">
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <h3>اراء العملاء</h3>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.')}}"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">الرئيسيه</li>
            <li class="breadcrumb-item active">الاراء</li>
          </ol>
        </div>
 
      </div>
    </div>
  </div>
 
  <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">

                @include('partials.error')

              <form id="personal-info" method="POST" action="{{ route('dashboard.test.store') }}" enctype="multipart/form-data">
                  @csrf
                  @foreach (config('translatable.locales') as $index=>$locale)
                <div class="form-group row">
                  <label for="input-1" class="col-sm-3 col-form-label"> {{ $locale }}الاسم الكامل</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="input-1" name="{{$locale}}[title]" value="{{ old('title') }}" required>
                  </div>
                </div>


                <div class="form-group row">
                  <label for="input-4" class="col-sm-3 col-form-label">الرأي {{ $locale }}</label>
                  <div class="col-sm-8">
                    <textarea class="summernote" style="height: 300px;" cols="70" name="{{$locale}}[body]">{{ old('body') }}</textarea>
                  </div>
                </div>

                @endforeach

                <div class="form-group row">
                    <label for="input-2" class="col-sm-3 col-form-label"> الصوره</label>
                    <div class="col-sm-6">
                      <input type="file" name="avatar" class="form-control" id="input-2" required>
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

@push('js')

<script src="{{ asset('main/summernote.js') }}"></script>
<script src="{{ asset('main/summernote.custom.js') }}"></script>
    
@endpush