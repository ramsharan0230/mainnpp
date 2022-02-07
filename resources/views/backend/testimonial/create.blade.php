@extends('backend.layouts.master')

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Add Testimonial</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin')}}"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">Testimonial</li>
                            <li class="breadcrumb-item active">Add Testimonial</li>
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
                            <form action="{{route('testimonial.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Full name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="eg. Full name" name="name" value="{{old('name')}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Designation </label>
                                            <input type="text" class="form-control" placeholder="eg. Designation" name="designation" value="{{old('designation')}}">
                                        </div>
                                    </div>

                                    {{--                                    <div class="col-lg-12 col-md-12">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="">Rating<span class="text-danger">*</span></label>--}}
{{--                                            <select name="rating" class="form-control show-tick">--}}
{{--                                                <option value="1" {{old('rating')=='1' ? 'selected' : ''}}>One Star</option>--}}
{{--                                                <option value="2" {{old('rating') == '2' ? 'selected' : ''}} >Two Star</option>--}}
{{--                                                <option value="3" {{old('rating') == '3' ? 'selected' : ''}} >Three Star</option>--}}
{{--                                                <option value="4" {{old('rating') == '4' ? 'selected' : ''}} >Four Star</option>--}}
{{--                                                <option value="5" {{old('rating') == '5' ? 'selected' : ''}} >Five Star</option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Profile</label>
                                            <input type="file" name="profile" class="dropify" id="input-file-now" data-height="100" data-default-file="{{old('profile')}}">
                                        </div>
                                    </div>


                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Review <span class="text-danger">*</span></label>
                                            <textarea type="text" class="form-control description" placeholder="Write review..." name="review">{{old('review')}}</textarea>
                                        </div>
                                    </div>


                                    <div class="col-lg-12 col-sm-12">
                                        <label for="status">Status</label>
                                        <select name="status" class="form-control show-tick">
                                            <option value="active" {{old('status')=='active' ? 'selected' : ''}}>Active</option>
                                            <option value="inactive" {{old('status') == 'inactive' ? 'selected' : ''}} >Inactive</option>
                                        </select>
                                    </div>


                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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
