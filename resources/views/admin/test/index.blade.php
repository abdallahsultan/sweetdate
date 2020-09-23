@extends('layouts.admin')

@section('content')
<style>
.checked {
  color: #FFD700;
}
.color_rat{
  color: black;
}
}
</style>

<div class="page-body">
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <h3>اراء العملاء</h3>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.')}}"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">الرئيسيه</li>
            <li class="breadcrumb-item active">الاراء</li>
          </ol>
        </div>
        <div class="col-lg-6">

          <div class="bookmark pull-right">
                <a href="{{ route('dashboard.test.create') }}"  class="btn btn-primary"> اضافه جديد </a>
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
                    <th>الهاتف</th>
                    <th>تاريخ  الاضافه</th>
                    <th style="text-align:center">التقيم</th>
                    <th>الحاله</th>
                   
                    <th>التحكم</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach ($test as $index=>$test)
                  <tr>
                      <td>{{ $index + 1 }}</td>
                      <td>{{ $test->title  }}</td>
                      <td> <img src="{{ asset('images/' . $test->avatar ) }}" style="max-width: 100px;"> </td>
                      <td>{{ $test->phone  }}</td>
                      <td>{{ date('Y M d', strtotime($test->created_at))  }}</td>
                      <td>
                    
                    <table>
                        <tr>
                      <th>  الخدمة</th>
                    <th>  الإنتظار</th>
                    <th>  الطعام</th>
                    <th>   الطاقم</th>
                    <th>  الجودة</th>
                        </tr>
                        <tr>
                        <td>  <span class="fa fa-star checked"></span> <br> <b class="color_rat">{{ $test->services  }} </b>  </td>
                        <td>  <span class="fa fa-star checked"></span> <br> <b class="color_rat">{{ $test->waiting_time  }} </b>  </td>
                        <td>  <span class="fa fa-star checked"></span> <br> <b class="color_rat">{{ $test->food_srevice  }} </b>  </td>
                        <td>  <span class="fa fa-star checked"></span> <br> <b class="color_rat">{{ $test->team  }} </b>  </td>
                        <td>  <span class="fa fa-star checked"></span> <br> <b class="color_rat">{{ $test->sanitization  }} </b></td>
                        </tr>
                        
                      </table>
                      </td>
                     
                      <td> @if($test->status == 0)
                             <a href="{{ route('dashboard.test.show', $test->id)}}" class="btn btn-info"> تفعيل </a>
                        @else
                        <a href="{{ route('dashboard.test.show', $test->id)}}" class="btn btn-success"> اخفاء </a>
                        @endif
                      </td>
                      <td>
                          <div class="btn-group m-1">
                          <a href="{{ route('dashboard.test.edit', $test->id)}}" type="button" class="btn btn-outline-primary waves-effect waves-light"> <i class="fa fa-edit"></i> </a>
                          <form method="post" action="{{ route('dashboard.test.destroy', $test->id ) }}">

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
                    <th>الهاتف</th>
                    <th>تاريخ  الاضافه</th>
                    <th style="text-align:center">التقيم</th>
                    
                    <th >الحاله</th>
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
