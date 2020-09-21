@extends('layouts.admin')

@section('content')


<div class="page-body">
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <h3> الفيديو</h3>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">الرئيسيه</li>
            <li class="breadcrumb-item"> الفيديو</li>
            <li class="breadcrumb-item active"> تعديل </li>
          </ol>
        </div>
 
      </div>
    </div>
  </div>


      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <form id="personal-info" method="POST" action="{{ route('dashboard.video.update', $video->id ) }}" enctype="multipart/form-data">
                  @csrf
                @method('PUT')



                <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label">رابط الفيديو من اليوتيوب </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-1" name="link" value="{{ $video->link }}" required>
                  </div>
                </div>

                <div class="form-footer">
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> حفظ الرابط</button>
                    @if($video->status == 0)
                    <a href="{{ route('dashboard.video.show', $video->id)}}" class="btn btn-info"> تفعيل </a>
               @else
               <a href="{{ route('dashboard.video.show', $video->id)}}" class="btn btn-success"> اخفاء </a>
               @endif
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
