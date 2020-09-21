@extends('layouts.admin')

@section('content')

<div class="page-body">
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <h3>الاعدادات</h3>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.')}}"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">الرئيسيه</li>
            <li class="breadcrumb-item active">الاعدادات</li>
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
           <div class="card-title text-info"> الاعدادات العامه </div>
           <hr>
            <form method="POST" action="{{ route('dashboard.setting.update', $setting->id ) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                @include('partials.error')

           <div class="form-group row">
            <label for="input-26" class="col-sm-2 col-form-label">اسم الموقع</label>
            <div class="col-sm-6">
            <input type="text" class="form-control form-control-rounded" id="input-26" name="name" value="{{ $setting->name }}" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="input-27" class="col-sm-2 col-form-label">الوصف</label>
            <div class="col-sm-6">
            <textarea type="file" class="form-control form-control-rounded" id="input-27" name="meta" required>{{ $setting->meta }}</textarea>
            </div>
          </div>

         </div>
         </div>


         <div class="card">
            <div class="card-body">
            <div class="card-title text-info">تعديل اللوجو </div>
            <hr>
            <div class="form-group row">
             <label for="input-26" class="col-sm-2 col-form-label">اللوجو</label>
             <div class="col-sm-6">
             <input type="file" class="form-control form-control-rounded" id="input-26" name="logo">
             </div>
             <img src="{{ asset('images/' . $setting->logo) }}" style="width: 90px;">
           </div>

           <div class="form-group row">
             <label for="input-27" class="col-sm-2 col-form-label">لوجو العنوان</label>
             <div class="col-sm-6">
             <input type="file" class="form-control form-control-rounded" id="input-27" name="favicon">
             </div>
             <img src="{{ asset('images/' . $setting->favicon) }}" style="width: 90px;">
           </div>

          </div>
          </div>


         <div class="card">
            <div class="card-body">
            <div class="card-title text-info">السوشيال ميديا </div>
            <hr>

            <div class="form-group row">
             <label for="input-26" class="col-sm-2 col-form-label">Facebook</label>
             <div class="col-sm-8">
             <input type="text" class="form-control form-control-rounded" id="input-26" required name="facebook" value="{{ $setting->facebook }}">
             </div>
           </div>
           <div class="form-group row">
             <label for="input-27" class="col-sm-2 col-form-label">Twitter</label>
             <div class="col-sm-8">
             <input type="text" class="form-control form-control-rounded" id="input-27" required name="twitter" value="{{ $setting->twitter }}">
             </div>
           </div>
           <div class="form-group row">
             <label for="input-28" class="col-sm-2 col-form-label">youtube</label>
             <div class="col-sm-8">
             <input type="text" class="form-control form-control-rounded" id="input-28" name="linkedin" required value="{{ $setting->linkedin }}">
             </div>
           </div>
           <div class="form-group row">
             <label for="input-29" class="col-sm-2 col-form-label">Instagram</label>
             <div class="col-sm-8">
             <input type="text" class="form-control form-control-rounded" id="input-29" required name="instagram" value="{{ $setting->instagram }}" >
             </div>
           </div>

          </div>
          </div>


          <div class="card">
            <div class="card-body">
            <div class="card-title text-info">معلومات التواصل </div>
            <hr>

            <div class="form-group row">
             <label for="input-26" class="col-sm-2 col-form-label"> رقم الهاتف</label>
             <div class="col-sm-8">
             <input type="text" class="form-control form-control-rounded" id="input-26" required name="itphone" value="{{ $setting->itphone }}">
             </div>
           </div>
           <div class="form-group row">
             <label for="input-27" class="col-sm-2 col-form-label"> البريد الالكتروني</label>
             <div class="col-sm-8">
             <input type="text" class="form-control form-control-rounded" id="input-27" required name="itemail" value="{{ $setting->itemail }}">
             </div>
           </div>



          <div class="form-group row">
            <label for="input-29" class="col-sm-2 col-form-label">العنوان</label>
            <div class="col-sm-8">
            <textarea class="form-control form-control-rounded" id="input-29" required name="address">{{ $setting->address }}</textarea>
            </div>
          </div>

 

           <div class="form-group row">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-8">
            <button type="submit" class="btn btn-info shadow-info btn-round px-5"><i class="fa fa-edit"></i> حفظ التعديلات </button>
            </div>
          </div>


           </form>
          </div>
          </div>

			</div>
		  </div>

    </div>

   </div>


@endsection
