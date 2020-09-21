@extends('layouts.admin')

@section('content')

<div class="page-body">
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <h3>  الخدمات</h3>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.')}}"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">الرئيسيه</li>
            <li class="breadcrumb-item">  الخدمات</li>
            <li class="breadcrumb-item active">  تعديل</li>
          </ol>
        </div>
        <div class="col-lg-6">

          <div class="bookmark pull-right">
                <a href="{{ route('dashboard.service.create') }}"  class="btn btn-primary"> اضافه جديد </a>
          </div>

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
              <div class="table-responsive">
                <table class="display dataTable" id="basic-3">
                <thead>


                    <tr>
                      <th>#</th>
                      <th>العنوان</th>
                      <th>الوصف</th>
                      <th>الصوره</th>
                      <th>تاريخ الاضافه</th>
                      <th>التحم</th>
                    </tr>


                </thead>
                <tbody>
                    @foreach ($services as $index=>$service)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $service->title  }}</td>
                        <td>{{ strip_tags($service->body)  }}</td>
                        <td> <img src="{{ asset('images/' . $service->avatar ) }}" style="max-width: 100px;"> </td>
                        <td>{{ $service->created_at->diffForHumans() }}</td>                        <td>
                            <div class="btn-group m-1">
                            <a href="{{ route('dashboard.service.edit', $service->id)}}" type="button" class="btn btn-outline-primary waves-effect waves-light"> <i class="fa fa-edit"></i> </a>
                            <form method="post" action="{{ route('dashboard.service.destroy', $service->id ) }}">

                                @method('DELETE')
                                @csrf

                                <button type="submit" class="delete-btn btn btn-outline-danger waves-effect waves-light"> <i class="fa fa fa-trash-o"></i> </button>
                             </form>

                         </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                      <th>#</th>
                      <th>العنوان</th>
                      <th>الوصف</th>
                      <th>الصوره</th>
                      <th>تاريخ الاضافه</th>
                      <th>التحم</th>
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
