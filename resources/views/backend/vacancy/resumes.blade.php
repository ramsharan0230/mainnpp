@extends('backend.layouts.master')

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Vacancy
                            <a class="btn btn-sm btn-outline-secondary" href="{{route('vacancy.create')}}"><i class="icon-plus"></i> Add Vacancy</a></h2>
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
                            <h2><strong>Vacancy</strong> List</h2>

                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Salary</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($resumes as $item)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{ucfirst($item->name)}}</td>
                                            <td>{{$item->email}} Yrs</td>
                                            <td>{{$item->phone}}</td>
                                            <td>Rs {{number_format($item->expected_salary,2)}}</td>
                                            <td>
                                                <a href="javascript:;"  data-toggle="modal" data-target="#detail-view" title="view" class="float-left btn btn-sm btn-outline-warning" data-placement="bottom"><i class="fas fa-eye"></i> </a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="detail-view" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Resume</h4>
                                                                <button class="close" type="button" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                    <div class="form-group row">
                                                                        <div class="col">
                                                                            <label class="col-form-label" for="fullName">Full Name : </label>
                                                                            <span>{{$item->name}}</span>
                                                                        </div>

                                                                        <div class="col">
                                                                            <label class="col-form-label" for="fullName">Date Of Birth (English) :</label><span>{{$item->dob}}</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <div class="col">
                                                                            <label class="col-form-label" for="fullName">Address (Current) :</label><span>{{$item->address}}</span>

                                                                        </div>
                                                                        <div class="col">
                                                                            <label class="col-form-label" for="fullName">Educational qualification : </label> <span>{{$item->education}} ({{$item->is_completed}})</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <div class="col">
                                                                            <label class="col-form-label" for="fullName">Gender : </label><span> {{$item->gender}}</span>

                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">

                                                                        <div class="col">
                                                                            <label class="col-form-label" for="fullName">Institution(college/school) : </label><span> {{$item->institution}}</span>

                                                                        </div>
                                                                        <div class="col">
                                                                            <label class="col-form-label" for="fullName">Total Experience (Years) :</label><span> {{$item->experience}}</span>

                                                                        </div>

                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <div class="col">
                                                                            <label class="col-form-label" for="fullName">Last/ Current Designation : </label><span>{{$item->last_designation}}</span>

                                                                        </div>
                                                                        <div class="col">
                                                                            <label class="col-form-label" for="fullName">Last/ Current Organization : </label><span>{{$item->last_org}}</span>

                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <div class="col-md-6">
                                                                            <label class="col-form-label" for="expectedSalary">Expected Salary : </label><span>Rs. {{number_format($item->expected_salary,2)}}</span>

                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label class="col-form-label" for="expectedSalary">Preferred Department : </label><span>{{$item->preferred_dep}}</span>

                                                                        </div>

                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <div class="col">
                                                                            <label class="col-form-label" for="fullName">Bike : </label><span>{{$item->bike}}</span>

                                                                        </div>
                                                                        <div class="col">
                                                                            <label class="col-form-label" for="fullName">License : </label><span>{{$item->license}}</span>

                                                                        </div>
                                                                    </div>
                                                                    <!-- end added-->
                                                                    <div class="form-group row">
                                                                        <div class="col">
                                                                            <label class="col-form-label" for="emailAddress">Email Address : </label> <span>{{$item->email}}</span>

                                                                        </div>
                                                                        <div class="col">
                                                                            <label class="col-form-label" for="emailAddress">Contact Number : </label> <span>{{$item->phone}}</span>

                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <div class="col">
                                                                            <label class="col-form-label" for="message">Attachment : </label> <a href="{{url('/'.$item->attachment)}}" target="_blank" class="btn btn-sm btn-info">CV Download</a>
                                                                        </div>
                                                                    </div>

                                                                <div class="form-group row">
                                                                    <div class="col">
                                                                        <label class="col-form-label" for="message">Message : </label> <span>{{$item->message}}</span>
                                                                    </div>
                                                                </div>
                                                                    <div class="modal-footer">
                                                                        <button class="btn btn-danger" type="button" data-dismiss="modal">Close</button>
                                                                    </div>
                                                            </div><!-- end modal body -->
                                                        </div><!-- end modal content -->
                                                    </div><!-- end modal dialog -->
                                                </div>

                                                <form class="float-left ml-1" action="{{route('resume.delete',$item->id)}}"  method="post">
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
