@extends('layouts.admin')

@section('content')


  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Edit counter </h4>
	   </div>
     </div>
     </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <form id="personal-info" method="POST" action="{{ route('dashboard.updatecounter', $counter->id) }}" enctype="multipart/form-data">
                  @csrf


                @method('PUT')

                @foreach (config('translatable.locales') as $index=>$locale)

                <div class="form-group row">
                  <label for="input-1" class="col-sm-3 col-form-label">counter Title In {{ $locale }}</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="input-1" name="{{$locale}}[title]" value="{{ $counter->translate($locale)->title }}" required>
                  </div>
                </div>

                @endforeach

 

                <div class="form-group row">
                    <label for="input-1" class="col-sm-3 col-form-label">counter Value </label>
                    <div class="col-sm-6">
                      <input type="number" class="form-control" id="input-1" name="value" value="{{ $counter->value }}" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="input-1" class="col-sm-3 col-form-label">counter Status </label>
                    <div class="col-sm-6">
                      <select type="number" class="form-control" name="status" required>
                          <option value="1"> Visible </option>
                          <option value="0"> Hidden </option>
                      </select>
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
