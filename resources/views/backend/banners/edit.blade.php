@extends('backend.layouts.master')

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Edit Banner</h2>
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
                            <form action="{{route('banner.update',$banner->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Banner title <span class="text-danger">*</span></label>
                                            <textarea type="text" class="form-control" placeholder="Banner title" name="title">{{$banner->title}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Banner Subtitle <span class="text-danger">*</span></label>
                                            <textarea type="text" class="form-control" placeholder="Banner subtitle" name="subtitle">{{$banner->subtitle}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Description</label>
                                            <textarea id="" class="form-control " placeholder="Write something.." name="description">{{$banner->description}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Banner Image <span class="text-danger">*</span></label>
                                            <input type="file" name="image" class="dropify" id="input-file-now" data-height="100" data-default-file="{{asset($banner->image)}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12">
                                        <label for="status">Banner Type</label>
                                        <select name="type" class="form-control show-tick">
                                            <option value="home" {{$banner->type=='home' ? 'selected' : ''}}>Home</option>
                                            <option value="service" {{$banner->type == 'service' ? 'selected' : ''}} >Service</option>
                                            <option value="blog" {{$banner->type == 'blog' ? 'selected' : ''}} >Blog</option>
                                            <option value="product" {{$banner->type == 'product' ? 'selected' : ''}} >Product</option>
                                            <option value="industry" {{$banner->type == 'industry' ? 'selected' : ''}} >Industry</option>
                                            <option value="testimonial" {{$banner->type == 'testimonial' ? 'selected' : ''}} >Testimonial</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-12 col-sm-12">
                                        <label for="status">Status</label>
                                        <select name="status" class="form-control show-tick">
                                            <option value="active" {{$banner->status=='active' ? 'selected' : ''}}>Active</option>
                                            <option value="inactive" {{$banner->status == 'inactive' ? 'selected' : ''}} >Inactive</option>
                                        </select>
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
