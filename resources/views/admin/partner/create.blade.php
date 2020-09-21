@extends('layouts.admin')

@section('content')


<div class="page-body">
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <h3>شركاء النجاح</h3>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.')}}"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">الرئيسيه</li>
            <li class="breadcrumb-item ">شركاء النجاح</li>
            <li class="breadcrumb-item active"> اضافه جديد</li>
          </ol>
        </div>
 
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="row">
 
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <form id="personal-info" method="POST" action="{{ route('dashboard.partner.store') }}" enctype="multipart/form-data">
                  @csrf

                <div class="form-group row">
                  <label for="input-2" class="col-sm-2 col-form-label"> صوره الشريك</label>
                  <div class="col-sm-10">
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
      </div> 
      </div> 
      </div> 
@endsection
