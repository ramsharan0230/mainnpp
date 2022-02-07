@extends('backend.layouts.master')

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Edit Services</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin')}}"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">Services</li>
                            <li class="breadcrumb-item active">Edit Services</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-md-12">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="body">
                        
                            <form action="{{route('staff.update',$staff->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Full Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Full name" name="full_name" value="{{$staff->full_name}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Designation</label>
                                            <input type="text" class="form-control" placeholder="Designation" name="designation" value="{{$staff->designation}}">
                                        </div>

                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Profile <span class="text-danger">*</span></label>
                                            <input type="file" name="profile" class="dropify" id="input-file-now" data-height="100" data-default-file="{{asset($staff->profile_path)}}">
                                        </div>
                                    </div>

                                    <!--<div class="col-lg-12 col-md-12">-->
                                    <!--    <div class="form-group">-->
                                    <!--        <label for="">Description <span class="text-danger">*</span></label>-->
                                    <!--        <textarea name="description" id="" rows="5" class="form-control" >{{$staff->description}}</textarea>-->
                                    <!--    </div>-->
                                    <!--</div>-->

                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#description').summernote();
        });
    </script>
    <script>
        $('#condition').change(function () {
            var condition=$(this).val();
            if(condition !='promo'){
                $('#position_div').addClass('d-none');
                $('#position').val('');
            }
            else{
                $('#position_div').removeClass('d-none');
            }
        });
    </script>
    <script>
        $('#position').change(function () {
            var position=$(this).val();
            if(position !='middle'){
                $('#inner_position_div').addClass('d-none');
                $('#inner_position').val('');
            }
            else{
                $('#inner_position_div').removeClass('d-none');
            }
        });
    </script>
@endsection
