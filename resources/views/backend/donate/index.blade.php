@extends('backend.layouts.master')

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Donated Funds
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
                            <h2><strong>Donated fund</strong> List</h2>

                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Gift Type</th>
                                        <th>Gift Amount</th>
                                        <th>Additional Amount</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Message</th>
                                        <th>Donate Type</th>
                                        <th>Honour Person</th>
                                        <th>Tribute Person</th>
                                        <th>Tribute Message</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($donate as $item)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$item->gift_type}}</td>
                                            <td>${{$item->gift_amount}}</td>
                                            <td>${{$item->additional_amount}}</td>
                                            <td>{{$item->first_name}} {{$item->last_name}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>{{$item->phone}}</td>
                                            <td>{{$item->message}}</td>
                                            <td>{{$item->donate_type}}</td>
                                            <td>{{$item->honour_person}}</td>
                                            <td>{{$item->tribute_person}}</td>
                                            <td>{{$item->tribute_message}}</td>
                                        </tr>
                                    @endforeach

<<<<<<< HEAD

=======
>>>>>>> 111445a8eccb8d196fdfbc26a3f003a348b2b4cf
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
