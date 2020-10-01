@extends('layouts.admin')

@section('content')

<div class="page-body">
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <h3>قائمة الطعام</h3>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.')}}"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">الرئيسيه</li>
            <li class="breadcrumb-item active">قائمة الطعام</li>
          </ol>
        </div>
        <div class="col-lg-6">

          <div class="bookmark pull-right">
                <a href="{{ route('dashboard.product.create') }}"  class="btn btn-primary"> اضافه جديد </a>
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
                      <th>القسم</th>
                      <th>الوصف</th>
                      <th>السعرات الحرارية </th>
                      <th>السعر</th>
                      <th>الصوره</th>
                      <th>تاريخ الاضافه</th>
                      <th>التحكم</th>
                    </tr>


                </thead>
                <tbody>
              
                    @foreach ($projects as $index=>$project)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $project->title  }}</td>
                  
                        <td>{{ $project->category->translate('ar')->title  }}</td>
                      
                        <td>{{ $project->body  }}</td>
                        <td>{{ $project->calory  }}</td>
                        <td>{{ $project->price  }}</td>
                        <td> <img src="{{ asset('images/' . $project->avatar ) }}" style="max-width: 100px;"> </td>
                        <td>{{ date('Y M d', strtotime($project->created_at))  }}</td>
                        <td>
                            <div class="btn-group m-1">
                                <a href="{{ route('dashboard.product.edit', $project->id)}}" type="button" class="btn btn-outline-primary waves-effect waves-light"> <i class="fa fa-edit"></i> </a>

                            <form method="post" action="{{ route('dashboard.product.destroy', $project->id ) }}">

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
                      <th>القسم</th>
                      <th>الوصف</th>
                      <th>السعرات الحرارية </th>
                      <th>السعر</th>
                      <th>الصوره</th>
                      <th>تاريخ الاضافه</th>
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
