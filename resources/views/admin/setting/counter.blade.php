@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Counters</h4>
       </div>

     </div>
     </div>


      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>


                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Value</th>
                        <th>Status</th>
                        <th>Control</th>
                    </tr>


                </thead>
                <tbody>
                    @foreach ($counters as $index=>$category)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $category->title  }}</td>
                        <td>{{ $category->value  }}</td>
                        <td> @if( $category->status == 1) <span class="text-success"> Visible </span> @else <span class="text-danger"> Hidden </span> @endif </td>
                        <td>
                            <div class="btn-group m-1">
                            <a href="{{ route('dashboard.editcounter', $category->id)}}" type="button" class="btn btn-outline-primary waves-effect waves-light"> <i class="fa fa-edit"></i> </a>
                         </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Value</th>
                        <th>Status</th>
                        <th>Control</th>
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
