@extends('layouts.admin')

@section('content')


  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Add New Slider </h4>
	   </div>
     </div>
     </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">

                @include('partials.error')

              <form id="personal-info" method="POST" action="{{ route('dashboard.slider.store') }}" enctype="multipart/form-data">
                  @csrf
                  @foreach (config('translatable.locales') as $index=>$locale)
                <div class="form-group row">
                  <label for="input-1" class="col-sm-3 col-form-label">slider Title in  {{ $locale }}</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="input-1" name="{{$locale}}[title]" value="{{ old('title') }}" required>
                  </div>
                </div>


                <div class="form-group row">
                  <label for="input-4" class="col-sm-3 col-form-label">slider Body in  {{ $locale }}</label>
                  <div class="col-sm-8">
                    <textarea style="height: 300px;" cols="70" name="{{$locale}}[body]">{{ old('body') }}</textarea>
                  </div>
                </div>

                @endforeach

                <div class="form-group row">
                    <label for="input-2" class="col-sm-3 col-form-label">slider Avatar</label>
                    <div class="col-sm-6">
                      <input type="file" name="avatar" class="form-control" id="input-2" required>
                    </div>
                  </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> SAVE</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div><!--End Row-->
@endsection
