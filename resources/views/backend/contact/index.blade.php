@extends('backend.layouts.master')

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Contact message
                         </h2>
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
                            <h2><strong>Contact Message</strong> List</h2>

                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                    <tr>
                                        <th style="width:60px">S.N.</th>
                                        <th style="width:100px">Full name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($contacts as $key=>$item)
                                        <tr style="{{$item->seen=='no' ? 'background: #ddd;' : ''}}">
                                            <td>{{$loop->index+1}}</td>
                                            <td>
                                                {{ucfirst($item->name)}}
                                            </td>
                                            <td>{{$item->email}}</td>
                                            <td>
                                                {{$item->phone}}
                                            </td><td>
                                                {{$item->subjectZ}}
                                            </td>
                                            <td>{{$item->message}}</td>
                                            <td class="d-flex">
                                                <a href="{{route('contact.view',$item->id)}}" class="edit-btn btn btn-sm btn-info" data-toggle="tooltip" data-placement="left" title="eye"><i class="fas fa-eye text-white"></i></a>
                                                <form action="{{route('contact.destroy',$item->id)}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="javascript:void(0);" class="view-shop-btn dltBtn btn btn-sm btn-danger" data-id='{{$item->id}}' title="delete" data-toggle="tooltip" data-placement="right" title="delete"><i class="fas fa-trash-alt text-white"></i></a>
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
    <script>
        $('input[name=toogle]').change(function () {
            var mode=$(this).prop('checked');
            var id=$(this).val();
            // alert(id);
            $.ajax({
                url:"{{route('banner.status')}}",
                type:"POST",
                data:{
                    _token:'{{csrf_token()}}',
                    mode:mode,
                    id:id,
                },
                success:function (response) {
                    if(response.status){
                        console.log(response.msg);
                    }
                    else{
                        alert('Please try again!');
                    }
                }
            })
        });
    </script>
@endsection
