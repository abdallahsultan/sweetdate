@extends('layouts.admin')

@section('content')


  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Edit seo </h4>
	   </div>
     </div>
     </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <form id="personal-info" method="POST" action="{{ route('dashboard.seo.update', $seo->id ) }}" enctype="multipart/form-data">
                  @csrf
                @method('PUT')

                @foreach (config('translatable.locales') as $index=>$locale)

                <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label">home Title In {{ $locale }}</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-1" name="{{$locale}}[home]" value="{{ $seo->translate($locale)->home }}" required>
                  </div>
                </div>

                <div class="form-group row">
                    <label for="input-1" class="col-sm-2 col-form-label">about Title In {{ $locale }}</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="input-1" name="{{$locale}}[about]" value="{{ $seo->translate($locale)->about }}" required>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="input-1" class="col-sm-2 col-form-label">services Title In {{ $locale }}</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="input-1" name="{{$locale}}[services]" value="{{ $seo->translate($locale)->services }}" required>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="input-1" class="col-sm-2 col-form-label">projects Title In {{ $locale }}</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="input-1" name="{{$locale}}[projects]" value="{{ $seo->translate($locale)->projects }}" required>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="input-1" class="col-sm-2 col-form-label">Blogs Title In {{ $locale }}</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="input-1" name="{{$locale}}[blogs]" value="{{ $seo->translate($locale)->blogs }}" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="input-1" class="col-sm-2 col-form-label">contact Title In {{ $locale }}</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="input-1" name="{{$locale}}[contact]" value="{{ $seo->translate($locale)->contact }}" required>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="input-1" class="col-sm-2 col-form-label">Meta tags  In {{ $locale }}</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="input-1" name="{{$locale}}[meta]" value="{{ $seo->translate($locale)->meta }}" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="input-1" class="col-sm-2 col-form-label">descreption  In {{ $locale }}</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="input-1" name="{{$locale}}[desc]" value="{{ $seo->translate($locale)->desc }}" required>
                    </div>
                  </div>

                  @endforeach

                <div class="form-footer">
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> SAVE</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div><!--End Row-->
@endsection
