@extends('layouts.admin')

@section('content')

<div class="page-body">
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <h3>قائمة الطاولات</h3>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.')}}"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">الرئيسيه</li>
            <li class="breadcrumb-item">قائمة الطاولات</li>
            <li class="breadcrumb-item active"> تعديل</li>
          </ol>
        </div>
 
      </div>
    </div>
  </div>

  <div class="container-fluid">

      <div class="row">
        <div class="col-lg-12" style="margin:10px">
          <div class="card">
            <div class="card-body">
              <form id="personal-info" method="POST" action="{{ route('dashboard.tables.update', $table->id) }}" enctype="multipart/form-data">
                  @csrf
                @method('PUT')
                  @include('partials.error')
                 
                  

 

            
                  <div class="form-group row">
                    <label for="input-5" class="col-sm-3 col-form-label">الاسم </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="name" readonly value="{{ $table->name }}"> 
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="input-6" class="col-sm-3 col-form-label">السعر </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="input-6" name="price" value="{{ $table->price }}"> 
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="input-5" class="col-sm-3 col-form-label">حد ادنى  الأشخاص  </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="minperson" value="{{ $table->minperson }}"> 
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="input-5" class="col-sm-3 col-form-label">حد اقصى  الأشخاص  </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="maxperson" value="{{ $table->maxperson }}"> 
                    </div>
                  </div>

<!-- 
                <div class="form-group row">
                  <label for="input-2" class="col-sm-3 col-form-label"> الصوره</label>
                  <div class="col-sm-6">
                    <input type="file" name="avatar" class="form-control" id="input-2">
                  </div>
                </div> -->



                <div class="form-footer">
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i>  حفظ</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div><!--End Row-->
@endsection
 