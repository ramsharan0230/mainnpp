@extends('backend.layouts.master')

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header pt-4">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h4><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>About Us</h4>
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
                            <form action="{{route('about.update')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row clearfix">

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">About Us Content</label>
                                            <textarea  class="form-control" placeholder="About Content" rows="8" name="about_us_content">{{$about->about_us_content}}</textarea>
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
