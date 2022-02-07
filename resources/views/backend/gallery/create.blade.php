@extends('backend.layouts.master')

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Add Gallery</h2>
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
                            <form action="{{route('gallery.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row clearfix">

                                    <div class="col-lg-12 col-sm-12">
                                        <label for="status">Gallery Type <span class="text-danger">*</span></label>
                                        <select name="gallery_type" id="gallery_type" class="form-control show-tick">
                                            <option value="">Choose Gallery Type</option>
                                            <option value="photo" {{old('gallery_type')=='photo' ? 'selected' : ''}}>Photo</option>
                                            <option value="video" {{old('gallery_type') == 'video' ? 'selected' : ''}} >Video</option>

                                        </select>
                                    </div>
                                    <div class="col-lg-12 col-md-12 photo">
                                        <div class="form-group">
                                            <label for="">Photo title </label>
                                            <input type="text" id="title_input" class="form-control" placeholder="Title" name="photo_title" value="{{old('photo_title')}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 video">
                                        <div class="form-group">
                                            <label for="">Video Iframe</label>
                                            <input type="text" id="video_input" class="form-control" placeholder="Video Iframe Url" name="video_url" value="{{old('video_url')}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 photo">
                                        <div class="form-group">
                                            <label for="">Photo <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                   <span class="input-group-btn">
                                                     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                                       <i class="fa fa-picture-o"></i> Choose
                                                     </a>
                                                   </span>
                                                <input id="thumbnail" class="form-control" type="text" name="photo">
                                            </div>
                                            <div id="holder" style="margin-top:15px;max-height:100px;margin-right:4px;"></div>
                                        </div>
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
    <script src="{{asset('/vendor/laravel-filemanager/js/stand-alone-button.js')}}"></script>

    <script>
        $('#lfm').filemanager('image');
    </script>

    <script>
        $(document).ready(function() {
            $('#description').summernote();
        });
    </script>
    <script>
        $('#gallery_type').change(function(e){
            e.preventDefault();
            var is_checked=$(this).val();
            if(is_checked=="photo"){
                $('.video').addClass('d-none');
                $('.photo').removeClass('d-none');
                $('#video_input').val('');
            }
            else{
                $('.video').removeClass('d-none');
                $('.photo').addClass('d-none');
                $('#title_input').val(' ');
                $('#thumbnail').val(' ');
            }
        })
    </script>
@endsection
