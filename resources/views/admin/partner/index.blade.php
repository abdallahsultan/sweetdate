@extends('layouts.admin')

@section('content')

<div class="page-body">
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <h3>شركاء النجاح</h3>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.')}}"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">الرئيسيه</li>
            <li class="breadcrumb-item active">شركاء النجاح</li>
          </ol>
        </div>
        <div class="col-lg-6">

          <div class="bookmark pull-right">
                <a href="{{ route('dashboard.partner.create') }}"  class="btn btn-primary"> اضافه جديد </a>
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
                    <th>اللوجو</th>
                    <th>تاريخ  الاضافه</th>
                    <th>التحكم</th>
                  </tr>
                </thead>
                <tbody>
                 
                    @foreach($partners as $index=>$partner)
                    <tr>
                    <td>{{ $index + 1}}</td>
                    <td>{{ $partner->title }}</td>
                    <td> <img src="{{ asset('images/'. $partner->avatar )}} " style="width: 85px;height: 85px;margin: 0 auto;display: block;"></td>
                    <td>{{ $partner->created_at->diffForHumans() }}</td>
                    <td>
                      <div class="btn-group m-1">
                         <form method="post" action="{{ route('dashboard.partner.destroy', $partner->id ) }}">

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
                    <th>اللوجو</th>
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
