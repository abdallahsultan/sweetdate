
@extends('layouts.admin')

@section('content')

<div class="page-body">
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <h3>الجزء العلوي</h3>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">الرئيسيه</li>
            <li class="breadcrumb-item active">الجزء العلوي</li>
          </ol>
        </div>
 
      </div>
 
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
                    <th>الوصف</th>
                    <th>الصوره</th>
                    <th>تاريخ  الاضافه</th>
                    <th>التحكم</th>
                  </tr>
                </thead>
                <tbody>
              
                    @foreach ($sliders as $index=>$slider)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $slider->title  }}</td>
                        <td>{{ $slider->body  }}</td>
                        <td> <img src="{{ asset('images/' . $slider->avatar ) }}" style="max-width: 100px;"> </td>
                        <td>{{ date('Y M d', strtotime($slider->created_at))  }}</td>
                        <td>
                            <div class="btn-group m-1">
                                <a href="{{ route('dashboard.slider.edit', $slider->id)}}" type="button" class="btn btn-outline-primary waves-effect waves-light"> <i class="fa fa-edit"></i> </a>
                            
            
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
 