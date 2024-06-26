@extends('backend.body.master')
@section('master')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Services</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">all</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{ route('backend.add.service') }}" type="button" class="btn btn-primary">Add Service</a>
            </div>
        </div>
    </div>
    <!--end breadcrumb-->
    <h6 class="mb-0 text-uppercase">Services</h6>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Icon</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $key => $item)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->icon }}</td>

                            <td>
                                <a href="{{ route('edit.services', $item->id) }}" class="btn btn-success btn-xs"><i class="bx bx-edit"></i></a>
                                <a href="{{ route('delete.services', $item->id) }}" class="btn btn-danger btn-xs"><i class="bx bx-trash"></i></a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>


</div>
@endsection
@section('data_table_css')
<link href="{{ asset('backend/assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
@endsection
@section('data_table_js')
<script src="{{ asset('backend/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('backend/assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
      } );
</script>
<script>
    // $(document).ready(function() {
    //     var table = $('#example2').DataTable( {
    //         lengthChange: false,
    //         buttons: [ 'copy', 'excel', 'pdf', 'print']
    //     } );

    //     table.buttons().container()
    //         .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
    // } );
</script>
@endsection
