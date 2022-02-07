@extends('backend.layouts.master')
@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2 class="mt-30 page-title">Contact Message
                    </div>
                </div>
            </div>
        </h2>
        <div class="row justify-content-between">
            <div class="col-lg-12 col-md-12">
                <div class="card card-static-2 mb-30">
                    <div class="card-body mt-3 ml-4">
                        <div class="row">
                            <div class=" col-md-9 col-lg-9 hidden-xs hidden-sm">
                                <table class="table table-bordered table-user-information">
                                    <tbody>
                                        <tr>
                                            <td>Full name:</td>
                                            <td>{{ucfirst($contact->name)}}</td>
                                        </tr>
                                        <tr>
                                            <td>Mobile No:</td>
                                            <td>{{$contact->phone}}</td>
                                        </tr>

                                        <tr>
                                            <td>Email:</td>
                                            <td>{{$contact->email}}</td>
                                        </tr>
                                        <tr>
                                            <td>Subject:</td>
                                            <td>{{$contact->subject}}</td>
                                        </tr>
                                        <tr>
                                            <td>Messages:</td>
                                            <td><p style="font-width:16px;">{{$contact->message}}</p></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }

            });
            $('.dltBtn').click(function(e){
                var form=$(this).closest('form');
                var dataID=$(this).data('id');
                e.preventDefault();
                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this data!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willDelete) => {
                        if (willDelete) {
                            form.submit();
                        } else {
                            swal({
                                title:"Your data is safe!",
                                icon:'info',
                            });
                        }
                    });
            })
        })
    </script>
@endsection
