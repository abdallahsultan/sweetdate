@extends('layouts.admin')

@section('content')

<div class="page-body">
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <div class="col-lg-6">
            <h3>البريد</h3>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('dashboard.')}}"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item">الرئيسيه</li>
              <li class="breadcrumb-item active">البريد</li>
            </ol>
          </div>
 
        </div>
      </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">

        <div class="col-md-12">
            <div class="card mt-3 shadow-none border">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display dataTable" id="basic-3">
                            <tbody>
                                @foreach ($mails as $index=>$mail)

                                <tr>
                                    <td> {{ $index + 1 }} </td>
                                    <td>
                                        <a href="{{ route('dashboard.mail.show', $mail->id)}}">{{ $mail->name }}</a>
                                    </td>
                                    <td>{{ $mail->phone }}</td>
                                    <td>
                                        <a href="{{ route('dashboard.mail.show', $mail->id)}}"><i class="fa fa-circle text-info mr-2"></i> {{ substr($mail->body, 0, 30) }}</a>
                                    </td>
                                    <td class="text-right">
                                        {{ date("Y_M_d", strtotime($mail->created_at)) }}
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <hr>

                </div>
            </div>
        </div>

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
