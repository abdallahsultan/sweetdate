@extends('layouts.admin')

@section('content')


  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Edit partner </h4>
	   </div>
     </div>
     </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <form id="personal-info" method="POST" action="{{ route('dashboard.partner.update', $partner->id ) }}" enctype="multipart/form-data">
                  @csrf
                @method('PUT')

                <div class="form-group row">
                  <label for="input-2" class="col-sm-2 col-form-label">partner Avatar</label>
                  <div class="col-sm-10">
                    <input type="file" name="avatar" class="form-control" id="input-2">
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
