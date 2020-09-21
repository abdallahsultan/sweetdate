@extends('layouts.admin')

@section('content')

<div class="page-body">
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <h3>اراء العملاء</h3>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.')}}"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">الرئيسيه</li>
            <li class="breadcrumb-item active">تصويتات العملاء</li>
          </ol>
        </div>

      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="row">


          <div class="col-sm-12">
            <div class="card">

          <div class="card-body">
            <div class="table-responsive">
              <table class="display dataTable" id="basic-3">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>الاسم</th>
                    <th>الهاتف</th>
                    <th>الخدمات</th>
                    <th>وقت الانتظار</th>
                    <th>طريقه التقديم</th>
                    <th> طاقم العمل</th>
                    <th>  نظافه المكان</th>
                    <th>   الرساله</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach ($tests as $index=>$test)
                  <tr>
                      <td>{{ $index + 1 }}</td>
                      <td>{{ $test->name  }}</td>
                      <td>{{ $test->phone  }}</td>
                      <td>{{ $test->services  }}</td>
                      <td>{{ $test->waiting  }}</td>
                      <td>{{ $test->foodserve  }}</td>
                      <td>{{ $test->team  }}</td>
                      <td>{{ $test->sanitization  }}</td>
                      <td>{{ $test->message  }}</td>
                  </tr>
                  @endforeach



                </tbody>
                <tfoot>
                  <tr>
                    <th>#</th>
                    <th>الاسم</th>
                    <th>الهاتف</th>
                    <th>الخدمات</th>
                    <th>وقت الانتظار</th>
                    <th>طريقه التقديم</th>
                    <th> طاقم العمل</th>
                    <th>  نظافه المكان</th>
                    <th>   الرساله</th>
                  </tr>
                </tfoot>
              </table>
            </div>

        </div>
      </div>
    </div>

    </div>
    </div>
    </div>

@endsection
@push('js')

<script src="{{ asset('main/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('main/js/datatable/datatables/datatable.custom.js') }}"></script>
<script src="{{ asset('main/js/tooltip-init.js') }}"></script>

@endpush
