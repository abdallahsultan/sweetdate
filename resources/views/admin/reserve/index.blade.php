@extends('layouts.admin')

@section('content')

<div class="page-body">
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <h3>الحجوزات</h3>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.')}}"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">الرئيسيه</li>
            <li class="breadcrumb-item active">الحجوزات</li>
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
                    <th>  رقم الطاوله </th>
                   
                    <th>  تاريخ الحجز</th>
                    <th>  الوقت الحجز</th>
                    
                    <th>التحكم</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach($reservs as $key=>$value)
                    <tr>
                    <td>{{ $key + 1}}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->phone }}</td>
                    @php
                    $table=$value->table; 
                     $table=str_replace(",","  ","$table") @endphp
                    <td>{{$table}} </td>
                    @php 
                    $splitTimeStamp= explode(" ",$value->created_at);
                    $date = $splitTimeStamp[0];
                    $time = $splitTimeStamp[1];
                    @endphp
                 
                    <td>{{ $date }}</td>
                    <td>{{ $time }}</td>
                   
                    <td>
                        <div class="btn-group m-1">
                            <form method="post" action="{{ route('dashboard.reservation.destroy', $value->id ) }}">

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
                    <th>الاسم</th>
                    <th>الهاتف</th>
                    <th>  رقم الطاوله </th>
                    <th>  تاريخ الحجز</th>
                    <th>  الوقت الحجز</th>
                   
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
