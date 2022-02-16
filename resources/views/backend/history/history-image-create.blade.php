@extends('backend.layouts.master')

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Create History</h2>
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
                            <form action="{{route('history-image.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row clearfix">

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Title </label>
                                            <input type="text" id="title_input" class="form-control" placeholder="Title ..." name="title" value="{{old('title')}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 thumbnail">
                                        <div class="form-group">
                                            <label for="">Thumbnail <span class="text-danger">*</span></label>
                                            <input id="thumbnail" class="form-control" type="file" name="thumbnail">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-sm-12" >
                                        <div class="form-group">
                                            <label for="status">Status <span class="text-danger">*</span></label>
                                            <select name="status" class="form-control show-tick">
                                                <option value="active" {{old('status')=='active' ? 'selected' : ''}}>Active</option>
                                                <option value="inactive" {{old('status') == 'inactive' ? 'selected' : ''}} >Inactive</option>
                                            </select>
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
