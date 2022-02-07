@extends('backend.layouts.master')
@section('content')
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Blog Categories
                        <a class="btn btn-sm btn-outline-secondary" href="{{route('blog-category.create')}}"><i class="icon-plus"></i> Add Category Blog</a></h2>
                    <ul class="breadcrumb float-left">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active">Blog Category</li>
                    </ul>
                    <p class="float-right">Total Blog Category :{{\App\Models\BCategory::count()}}</p>
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
                        <h2><strong>Blog Category</strong> List</h2>

                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                <tr>
                                    <th>S.N.</th>
                                    <th>Category name</th>
                                    <th>Category slug</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($categories as $item)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>

                                        <td>{{ucfirst($item->title)}}</td>
                                        <td>{{$item->slug}}</td>

                                        <td>
                                            <input type="checkbox" id="onMenu" name="toogle" value="{{$item->id}}" data-toggle="switchbutton" data-size="sm" {{$item->status=='active' ? 'checked' : ''}}>
                                        </td>
                                        <td>
                                            <a href="{{route('blog-category.edit',$item->id)}}" class="float-left btn btn-sm btn-outline-warning mr-1" data-toggle="tooltip" data-placement="top" title="edit"><i class="fas fa-edit"></i></a>
                                            <form action="{{route('blog-category.destroy',$item->id)}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <a href="javascript:void(0);" class="dltBtn btn btn-sm btn-outline-danger" data-id='{{$item->id}}' title="delete "><i class="fas fa-trash-alt"></i></a>
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

@section('styles')
    @toastr_css
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

    <script>
        $('input[name=toogle]').change(function () {
            var mode=$(this).prop('checked');
            var id=$(this).val();
            // alert(id);
            $.ajax({
                url:"{{route('blog.category.status')}}",
                type:"POST",
                data:{
                    _token:'{{csrf_token()}}',
                    mode:mode,
                    id:id,
                },
                success:function (response) {
                    if(response.status){
                        $.notify({
                                title:'<strong>Success,</strong>',
                                message:response.msg
                            },
                            {
                                z_index: 9999,
                                animate: {
                                    enter: 'animated fadeInRight',
                                    exit: 'animated fadeOutRight'
                                },
                            },
                        );
                    }
                    else{
                        $.notify({
                                title:'<strong>Sorry,</strong>',
                                message:"Something went wrong, Please try again"
                            },
                            {
                                z_index: 9999,
                                animate: {
                                    enter: 'animated fadeInRight',
                                    exit: 'animated fadeOutRight'
                                },
                            },
                        );
                    }
                }
            })
        });
    </script>
@endsection
