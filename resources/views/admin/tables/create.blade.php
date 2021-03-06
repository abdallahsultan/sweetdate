@extends('layouts.admin')

@section('content')


<div class="page-body">
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <h3>قائمة الطاولات </h3>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.')}}"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">الرئيسيه</li>
            <li class="breadcrumb-item">قائمة الطاولات </li>
            <li class="breadcrumb-item active">اضافه جديد</li>
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

              <form id="personal-info" method="POST" action="{{ route('dashboard.tables.store') }}" enctype="multipart/form-data">

                @csrf

                  @include('partials.error')


              
                  <div class="form-group row">
                    <label for="input-5" class="col-sm-3 col-form-label">الأسم </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="name" value="{{ old('name') }}"> 
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="input-6" class="col-sm-3 col-form-label">السعر </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="input-6" name="price" value="{{ old('price') }}"> 
                    </div>
                  </div>


                <!-- <div class="form-group row">
                  <label for="input-2" class="col-sm-3 col-form-label"> الصوره</label>
                  <div class="col-sm-6">
                    <input type="file" name="avatar" class="form-control" id="input-2" >
                  </div>
                </div> -->



                <div class="form-footer">
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> حفظ</button>
                </div>
              </form>
            </div>
          </div>
          </div>
          </div>
          </div>
        </div>
      </div><!--End Row-->
@endsection
 