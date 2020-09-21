@extends('layouts.admin')

@section('content')

<div class="page-body">
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <h3>المقالات</h3>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.')}}"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">الرئيسيه</li>
            <li class="breadcrumb-item active">المقالات</li>
          </ol>
        </div>
        <div class="col-lg-6">

          <div class="bookmark pull-right">
                <a href="{{ route('dashboard.blog.create') }}"  class="btn btn-primary"> اضافه جديد </a>
          </div>

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
                    <th>العنوان</th>
                    <th>الصوره</th>
                    <th>تاريخ  الاضافه</th>
                    <th>التحكم</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach($blogs as $index=>$blog)
                    <tr>
                    <td>{{ $index + 1}}</td>
                    <td>{{ $blog->title }}</td>
                    <td> <img src="{{ asset('images/'. $blog->avatar )}} " style="width: 85px;height: 85px;margin: 0 auto;display: block;"></td>
                    <td>{{ $blog->created_at->diffForHumans() }}</td>
                    <td>
                        <div class="btn-group m-1">
                            <a href="{{ route('dashboard.blog.edit', $blog->id)}}" type="button" class="btn btn-outline-primary waves-effect waves-light"> <i class="fa fa-edit"></i> </a>
                            <form method="post" action="{{ route('dashboard.blog.destroy', $blog->id ) }}">

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
                    <th>الصوره</th>
                    <th>تاريخ  الاضافه</th>
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
    </div>
  </div>
  <!-- Container-fluid Ends-->
</div>

@endsection


@push('js')

<script src="{{ asset('main/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('main/js/datatable/datatables/datatable.custom.js') }}"></script>
<script src="{{ asset('main/js/tooltip-init.js') }}"></script>

@endpush
