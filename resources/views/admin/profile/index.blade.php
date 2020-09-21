@extends('layouts.admin')

@section('content')

<div class="page-body">
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <div class="col-lg-6">
            <h3>{{ $user->name }}</h3>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('dashboard.')}}"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item">الرئيسيه</li>
              <li class="breadcrumb-item active">الصفحه الشخصيه</li>
 
            </ol>
          </div>
   
        </div>
      </div>
    </div>

      <div class="row">
        <div class="col-lg-4">
           <div class="card profile-card-2">
            <div class="card-img-block" style="height: 280px;">
                <img class="img-fluid" src="{{ asset('images/' . $user->avatar ) }}" alt="Card image cap" style="height: 100%;">
            </div>
        </div>

        </div>

        <div class="col-lg-8">
           <div class="card">
            <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#profile" data-toggle="pill" class="nav-link active"><i class="icon-user"></i> <span class="hidden-xs">البيانات</span></a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs">التعديل</span></a>
                </li>
            </ul>
            <div class="tab-content p-3">
                <div class="tab-pane active" id="profile">
                    <h5 class="mb-3">User Profile</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <h6> الاسم </h6>
                            <p>
                                {{ $user->name }}
                            </p>
                            <h6> البريد الالكتروني </h6>
                            <p>
                                {{ $user->email }}
                            </p>
                        </div>
                    </div>
                    <!--/row-->
                </div>
                <div class="tab-pane" id="edit">
                    <form method="POST" action="{{ route('dashboard.profile.update', $user->id) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"> الاسم </label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="{{ $user->name }}" name="name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">البريد الالكتروني</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="email" value="{{ $user->email }}" name="email" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"> الصوره</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="file" name="avatar">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">كلمه المرور</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="password" name="password" autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label" autocomplete="new-password">تأكيد كلمه المرور</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="password"  name="password_confirmation">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
 
                                <input type="submit" class="btn btn-primary" value="حفظ">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
      </div>

    </div>

    </div>
@endsection
