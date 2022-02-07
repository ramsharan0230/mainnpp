@extends('backend.layouts.master')

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Gallery Media
                        <a class="btn btn-sm btn-outline-secondary" href="{{route('media.create', $slug)}}"><i class="icon-plus"></i> Add Media</a></h2>
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
                            <h2><strong>Media</strong> List</h2>

                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Gallery Title</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($data as $item)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{ $item->gallery->photo_title }}</td>
                                            
                                            <td>
                                                <img src="{{asset($item->title)}}" style="max-width: 100px">
                                            </td>

                                            <td>
                                                <form class="float-left ml-1" action="{{route('media.destroy',$item->id)}}"  method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="" data-toggle="tooltip" title="delete" data-id="{{$item->id}}" class="dltBtn btn btn-sm btn-outline-danger" data-placement="bottom"><i class="fas fa-trash-alt"></i> </a>
                                                </form>
                                                {{-- <a href="{{route('media.index',$item->slug)}}" data-toggle="tooltip" title="show" class="float-left btn btn-sm btn-outline-warning ml-1" data-placement="bottom"><i class="fas fa-eye"></i> </a> --}}
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
