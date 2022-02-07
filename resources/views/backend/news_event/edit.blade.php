@extends('backend.layouts.master')

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Edit News/Event</h2>
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
                            <form action="{{route('news.update',$news->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">News/Event <span class="text-danger">*</span></label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="news" id="flexRadioDefault1" value="1" @if($news->news ==1 )checked @endif>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                News
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="news" id="flexRadioDefault2" @if($news->news ==0 )checked @endif value="0">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Events                                                </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Title <span class="text-danger">*</span></label>
                                            <textarea type="text" class="form-control" placeholder="News title" name="title">{{$news->title}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Date<span class="text-danger">*</span></label>
                                            <textarea type="text" class="form-control" placeholder="News date" name="start_date">{{$news->start_date}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Description</label>
                                            <textarea id="ckeditor6" class="form-control " placeholder="Write something.." name="description">{{$news->news_detail}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">News Image <span class="text-danger">*</span></label>
                                            <input type="file" name="image" class="dropify" id="input-file-now" data-height="100" data-default-file="{{asset($news->banner)}}">
                                        </div>
                                    </div>l

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
    <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'ckeditor6' );
    </script>
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
