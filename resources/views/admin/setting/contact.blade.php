@extends('layouts.admin')

@section('content')


  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Edit contact </h4>
	   </div>
     </div>
     </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <form id="personal-info" method="POST" action="{{ route('dashboard.updatecontact', $contact->id) }}" enctype="multipart/form-data">
                  @csrf


                @method('PUT')

                @foreach (config('translatable.locales') as $index=>$locale)

                <div class="form-group row">
                  <label for="input-1" class="col-sm-3 col-form-label">contact Title In {{ $locale }}</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="input-1" name="{{$locale}}[title]" value="{{ $contact->translate($locale)->title }}" required>
                  </div>
                </div>

                @endforeach

                <div class="form-group row">
                    <label for="input-1" class="col-sm-3 col-form-label">contact background </label>
                    <div class="col-sm-6">
                      <input type="file" class="form-control" id="input-1" name="avatar">
                    </div>
                  </div>

                  <img src="{{ asset('images/' . $contact->avatar) }}" class="img-fluid">

                <div class="form-footer">
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> SAVE</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div><!--End Row-->
@endsection
