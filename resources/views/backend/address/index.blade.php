@extends('backend.layouts.master')

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Address
                            <a class="btn btn-sm btn-outline-secondary" href="{{route('address.create')}}"><i class="icon-plus"></i> Add Address</a></h2>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    @include('backend.layouts.notification')
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Address</strong> List</h2>

                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Name</th>
                                        <th>Location</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Municipality</th>
                                        <th>Ward Num</th>
                                        <th>District</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($address as $item)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{ucfirst($item->name)}}</td>
                                            <td>{{ucfirst($item->location)}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>{{$item->phone}}</td>
                                            <td>{{$item->municipality}}</td>
                                            <td>{{$item->ward_no}}</td>
                                            <td>{{$item->district}}</td>
                                            <td>
                                                <a href="{{route('address.edit',$item->id)}}" data-toggle="tooltip" title="edit" class="float-left btn btn-sm btn-outline-warning" data-placement="bottom"><i class="fas fa-edit"></i> </a>
                                                <form class="float-left ml-1" action="{{route('address.destroy',$item->id)}}"  method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="" data-toggle="tooltip" title="delete" data-id="{{$item->id}}" class="dltBtn btn btn-sm btn-outline-danger" data-placement="bottom"><i class="fas fa-trash-alt"></i> </a>
                                                </form>

                                            </td>

                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.dltBtn').click(function (e) {
            var form=$(this).closest('form');
            var dataID=$(this).data('id');
            e.preventDefault();
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                        swal("Poof! Your imaginary file has been deleted!", {
                            icon: "success",
                        });
                    } else {
                        swal("Your imaginary file is safe!");
                    }
                });

        });
    </script>
@endsection
