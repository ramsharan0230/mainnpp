@extends('backend.layouts.master')

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Edit Success Story</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin')}}"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">Success Story</li>
                            <li class="breadcrumb-item active">Edit Success Story</li>
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
                            <form action="{{route('success-story.update',$success->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Full name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Full name" name="name" value="{{$success->name}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Profile<span class="text-danger">*</span></label>
                                            <input type="file" class="form-control dropify" data-height="100" name="profile" value="{{$success->profile}}" data-default-file="{{asset($success->profile)}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Summary <span class="text-danger">*</span></label>
                                            <textarea name="summary" id="" cols="30" rows="4" class="form-control">{{$success->summary}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Description <span class="text-danger">*</span></label>
                                            <textarea name="description" id="" cols="30" rows="8" class="form-control">{{$success->description}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-success">Update</button>
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
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        $('#lfm').filemanager('image');
    </script>

    <script>
        $(document).ready(function() {
            $('#description').summernote();
        });
    </script>
    <script>
        $('#is_parent').change(function(e){
            e.preventDefault();
            var is_checked=$('#is_parent').prop('checked');
            // alert(is_checked);
            if(is_checked){
                $('#parent_cat_div').addClass('d-none');
                $('#parent_cat').val('');
            }
            else{
                $('#parent_cat_div').removeClass('d-none');
            }
        })
    </script>
@endsection
