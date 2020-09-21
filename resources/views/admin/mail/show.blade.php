@extends('layouts.admin')

@section('content')



<div class="page-body">
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <h3>  البريد</h3>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.')}}"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">الرئيسيه</li>
            <li class="breadcrumb-item">  البريد</li>
            <li class="breadcrumb-item active">  بريد من {{ $mail->name  }}</li>
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

        <div class="row">
        <div class="col-md-12">
            <div class="card mt-3 shadow-none border">
               <div class="card-body">
                 <div class="media mb-3">
                     <div class="media-body">
                        <span class="media-meta float-right">08:22 AM</span>
                        <h4 class="text-primary m-0">{{ $mail->name }}</h4>
                        <small class="text-muted">Email : {{ $mail->email }}</small> <br>
                        <small class="text-muted">Phone : {{ $mail->phone }}</small>
                      </div>
                  </div>
                  {!! $mail->body !!}

                  <hr>

        </div>

                    </div>

             </div>
                    </div>
        </div>
      </div>

    </div>

   </div>
   </div>
   </div>
   </div>


@endsection
