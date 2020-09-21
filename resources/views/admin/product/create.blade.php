@extends('layouts.admin')

@section('content')


<div class="page-body">
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <h3>المنتجات</h3>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.')}}"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">الرئيسيه</li>
            <li class="breadcrumb-item">المنتجات</li>
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

              <form id="personal-info" method="POST" action="{{ route('dashboard.product.store') }}" enctype="multipart/form-data">

                @csrf

                  @include('partials.error')

 

                @foreach (config('translatable.locales') as $index=>$locale)

                <div class="form-group row">
                    <label for="input-1" class="col-sm-3 col-form-label"> العنوان {{ $locale }}</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="input-1" name="{{$locale}}[title]" value="{{ old('title') }}" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="input-4" class="col-sm-3 col-form-label">الوصف {{ $locale }}</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="{{$locale}}[body]" value="{{ old($locale . '.body') }}"> 
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
          </div>
          </div>
        </div>
      </div><!--End Row-->
@endsection
 