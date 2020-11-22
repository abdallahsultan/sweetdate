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
            <li class="breadcrumb-item active">قائمة الطاولات</li>
          </ol>
        </div>
        <!-- <div class="col-lg-6">

          <div class="bookmark pull-right">
                <a href="{{ route('dashboard.tables.create') }}"  class="btn btn-primary"> اضافه جديد </a>
          </div>

        </div> -->
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="display dataTable" id="basic-3">
                <thead>

                    <tr>
                      <th>#</th>
                      <th>الاسم </th>
                      <th>الأشخاص  حد ادنى </th>
                      <th>الأشخاص  حد اقصى </th>
                     
                      <th>السعر</th>
                     
                      <th>التحكم</th>
                    </tr>


                </thead>
                <tbody>
                @foreach($tables as $key=>$value)
                    <tr>
                    <td>{{ $key + 1}}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->minperson }}</td>
                    <td>{{ $value->maxperson }}</td>
                    <td>{{ $value->price }} SAR</td>
                   
                   
                    <td>
                        <div class="btn-group m-1">
                        <a href="{{ route('dashboard.tables.edit', $value->id)}}" type="button" class="btn btn-outline-primary waves-effect waves-light"> <i class="fa fa-edit"></i> </a>
                            <!-- <form method="post" action="{{ route('dashboard.tables.destroy', $value->id ) }}">

                               @method('DELETE')
                               @csrf

                               <button type="submit" class="delete-btn btn btn-outline-danger waves-effect waves-light"> <i class="fa fa fa-trash-o"></i> </button>
                            </form> -->

                        </div>
                    </td>
                  </tr>
                    @endforeach
                   
                </tbody>
                <tfoot>
                    <tr>
                      <th>#</th>
                      <th>الاسم</th>
                      <th>الأشخاص  حد ادنى </th>
                      <th>الأشخاص  حد اقصى </th>
                     
                      <th>السعر</th>
                     
                      <th>التحكم</th>
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
