@extends('backend.layouts.master')

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header pt-4">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h4><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Our Mission & Vision</h4>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-md-12">
                    @include('backend.layouts.notification')

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
                        <div class="body p-4">
                            <form action="{{route('mission.vision.update')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row clearfix">

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Mission & Vision Cover Image</label>
                                            <input type="file" class="dropify" name="our_mission_image_path" data-height="100" data-default-file="{{($about->our_mission_image_path !=null) ? asset($about->our_mission_image_path) :old('our_mission_image_path')}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Content 1</label>
                                            <textarea  class="form-control" placeholder="Content" rows="5" name="content1">{{$about->content1}}</textarea>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Icon 1</label>
                                            <input type="file" class="dropify" name="icon_path1" data-height="100" data-default-file="{{($about->icon_path1 !=null) ? asset($about->icon_path1) :old('icon_path1')}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Content 2</label>
                                            <textarea  class="form-control" placeholder="Content" rows="5" name="content2">{{$about->content2}}</textarea>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Icon 2</label>
                                            <input type="file" class="dropify" name="icon_path2" data-height="100" data-default-file="{{($about->icon_path2 !=null) ? asset($about->icon_path2) :old('icon_path2')}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Content 3</label>
                                            <textarea  class="form-control" placeholder="Content" rows="5" name="content3">{{$about->content3}}</textarea>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Icon 3</label>
                                            <input type="file" class="dropify" name="icon_path3" data-height="100" data-default-file="{{($about->icon_path3 !=null) ? asset($about->icon_path3) :old('icon_path3')}}">
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                       <div class="form-group">
                                           <button type="submit" class="btn btn-info">Update</button>
                                       </div>
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
        $('#description').summernote({
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']],
            ],
        });
    </script>
@endsection
