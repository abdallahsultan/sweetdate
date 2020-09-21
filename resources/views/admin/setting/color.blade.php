@extends('layouts.admin')

@section('content')

  <div class="content-wrapper">
    <div class="container-fluid">
    <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Settings</h4>
	   </div>
     </div>

		  <div class="row">

			<div class="col-lg-12">

       <div class="card">
           <div class="card-body">
           <div class="card-title text-info">Website Main Color </div>
           <hr>
            <form method="POST" action="{{ route('dashboard.updateColor') }}">

                @csrf
                @include('partials.error')

           <div class="form-group row">
            <label for="input-26" class="col-sm-2 col-form-label">Site Name</label>
            <div class="col-sm-6">
            <input type="color" class="form-control form-control-rounded" id="input-26" name="color" value="{{ $color }}" required>
            </div>
          </div>

         </div>
         </div>


           <div class="form-group row">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-8">
            <button type="submit" class="btn btn-info shadow-info btn-round px-5"><i class="icon-lock"></i> Update Site Color </button>
            </div>
          </div>


           </form>
          </div>
          </div>

			</div>



@endsection
