@extends('backend.layouts.master')

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>General Settings</h2>
                        <ul class="breadcrumb float-left">
                            <li class="breadcrumb-item"><a href="{{route('admin')}}"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">General Settings</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @include('backend.layouts.notification')
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>General</strong> Settings</h2>

                        </div>
                        <div class="body">
                            <form action="{{route('settings.update',$setting->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Title <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Title" name="title" value="{{$setting->title}}">
                                        </div>


                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Meta keywords</label>
                                            <input type="text" class="form-control" placeholder="URL" name="meta_keywords" value="{{$setting->meta_keywords}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Meta Description</label>
                                            <textarea   class="form-control" placeholder="Write some meta description..." rows="4" name="meta_description">{{$setting->meta_description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Logo</label>
                                            <input type="file" name="logo" class="dropify" id="input-file-now" data-height="80" data-default-file="{{$setting->logo ==null ? '' : asset($setting->logo)}}" value="{{asset($setting->logo)}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Favicon</label>
                                            <input type="file" name="favicon" class="dropify" id="input-file-now" data-height="80" data-default-file="{{$setting->favicon_path ==null ? '' : asset('storage/frontend/images/settings/'.$setting->favicon)}}" value="{{asset('storage/frontend/images/settings/'.$setting->favicon)}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="email" class="form-control" placeholder="Email address" name="email" value="{{$setting->email}}">
                                        </div>
                                    </div>
                                     <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Website</label>
                                            <input type="text" class="form-control" placeholder="Website Url" name="website" value="{{$setting->website}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Phone</label>
                                            <input type="text" class="form-control" placeholder="Phone Number" name="phone" value="{{$setting->phone}}">
                                        </div>
                                    </div>
                                   
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Address</label>
                                            <textarea type="text" class="form-control "  placeholder="Address" name="address" >{{$setting->address}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Footer</label>
                                            <input type="text" class="form-control" placeholder="Footer text" name="footer" value="{{$setting->footer}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label >Facebook</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fab fa-facebook-f"></i></div>
                                                </div>
                                                <input type="text" name="facebook_url" value="{{$setting->facebook_url}}" class="form-control" id="inlineFormInputGroup" placeholder="Facebook URL">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label >Instagram</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fab fa-instagram"></i></div>
                                                </div>
                                                <input type="text" name="instagram_url" value="{{$setting->instagram_url}}" class="form-control" id="inlineFormInputGroup" placeholder="Instagram URL">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label >Twitter</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fab fa-twitter"></i></div>
                                                </div>
                                                <input type="text" name="twitter_url" value="{{$setting->twitter_url}}" class="form-control" id="inlineFormInputGroup" placeholder="Twitter URL">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label >Linkedin</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fab fa-linkedin"></i></div>
                                                </div>
                                                <input type="text" name="linkedin_url" value="{{$setting->linkedin_url}}" class="form-control" id="inlineFormInputGroup" placeholder="Linkedin URL">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-info create-btn">Update Settings</button>
                                            <button type="reset" class="btn btn-outline-danger cancel-btn">Reset</button>
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
        $(document).ready(function() {
            $('#description').summernote(
                {
                    height:100
                }
            );
        });
    </script>
@endsection
