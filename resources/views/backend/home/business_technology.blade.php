@extends('backend.layouts.master')

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header pt-4">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h4><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Business Technology</h4>
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
                            <form action="{{route('business.technology.update')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Business Technology Title</label>
                                            <input type="text" class="form-control" placeholder="Business Technology title" name="business_technology_title" value="{{$section_title->business_technology_title}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Business Technology Subtitle</label>
                                            <textarea  class="form-control" placeholder="Business technology subtitle" rows="5" name="business_technology_subtitle">{{$section_title->business_technology_subtitle}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                       <div class="form-group">
                                           <button type="submit" class="btn btn-info">Update</button>
                                       </div>
                                    </div>
                                </div>

                            </form>

                            <form action="{{route('business.technology.content.update')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row clearfix">



                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Title1</label>
                                            <input type="text" name="title1" class="form-control" placeholder="Title1" value="{{$business_technology->title1}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Subtitle1</label>
                                            <input type="text" name="subtitle1" class="form-control" placeholder="Subtitle1" value="{{$business_technology->subtitle1}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Content1</label>
                                            <textarea  class="form-control" placeholder="Content1" rows="5" name="content1">{{$business_technology->content1}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Icon1</label>
                                            <input type="file" name="icon_path1" class="dropify" id="input-file-now" data-height="80" data-default-file="{{$business_technology->icon_path1 ==null ? '' : asset($business_technology->icon_path1)}}" value="{{asset($business_technology->icon_path1)}}">
                                        </div>
                                    </div>

                                </div>

                                <div class="row clearfix">


                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Title2</label>
                                            <input type="text" name="title2" class="form-control" placeholder="Title2" value="{{$business_technology->title2}}">
                                        </div>

                                    </div>


                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Subtitle2</label>
                                            <input type="text" name="subtitle2" class="form-control" placeholder="Subtitle2" value="{{$business_technology->subtitle2}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Content2</label>
                                            <textarea  class="form-control" placeholder="Content2" rows="5" name="content2">{{$business_technology->content2}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Icon2</label>
                                            <input type="file" name="icon_path2" class="dropify" id="input-file-now" data-height="80" data-default-file="{{$business_technology->icon_path2 ==null ? '' : asset($business_technology->icon_path2)}}" value="{{asset($business_technology->icon_path2)}}">
                                        </div>
                                    </div>

                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Title3</label>
                                            <input type="text" name="title3" class="form-control" placeholder="Title3" value="{{$business_technology->title3}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Subtitle3</label>
                                            <input type="text" name="subtitle3" class="form-control" placeholder="Subtitle3" value="{{$business_technology->subtitle3}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Content3</label>
                                            <textarea  class="form-control" placeholder="Content3" rows="5" name="content3">{{$business_technology->content3}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Icon3</label>
                                            <input type="file" name="icon_path3" class="dropify" id="input-file-now" data-height="80" data-default-file="{{$business_technology->icon_path3 ==null ? '' : asset($business_technology->icon_path3)}}" value="{{asset($business_technology->icon_path3)}}">
                                        </div>
                                    </div>

                                </div>

                                <div class="row clearfix">

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Title4</label>
                                            <input type="text" name="title4" class="form-control" placeholder="Title4" value="{{$business_technology->title4}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Subtitle4</label>
                                            <input type="text" name="subtitle4" class="form-control" placeholder="Subtitle4" value="{{$business_technology->subtitle4}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Content4</label>
                                            <textarea  class="form-control" placeholder="Content4" rows="5" name="content4">{{$business_technology->content4}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Icon4</label>
                                            <input type="file" name="icon_path4" class="dropify" id="input-file-now" data-height="80" data-default-file="{{$business_technology->icon_path4 ==null ? '' : asset($business_technology->icon_path4)}}" value="{{asset($business_technology->icon_path4)}}">
                                        </div>
                                    </div>


                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-info">Update</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Title5</label>
                                            <input type="text" name="title5" class="form-control" placeholder="Title5" value="{{$business_technology->title5}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Subtitle5</label>
                                            <input type="text" name="subtitle5" class="form-control" placeholder="Subtitle5" value="{{$business_technology->subtitle5}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Content5</label>
                                            <textarea  class="form-control" placeholder="Content5" rows="5" name="content5">{{$business_technology->content5}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Icon5</label>
                                            <input type="file" name="icon_path5" class="dropify" id="input-file-now" data-height="80" data-default-file="{{$business_technology->icon_path5 ==null ? '' : asset($business_technology->icon_path5)}}" value="{{asset($business_technology->icon_path5)}}">
                                        </div>
                                    </div>


                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-info">Update</button>
                                        </div>
                                    </div>
                                </div>


                                <div class="row clearfix">

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Title6</label>
                                            <input type="text" name="title6" class="form-control" placeholder="Title6" value="{{$business_technology->title6}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Subtitle6</label>
                                            <input type="text" name="subtitle6" class="form-control" placeholder="Subtitle6" value="{{$business_technology->subtitle6}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Content6</label>
                                            <textarea  class="form-control" placeholder="Content6" rows="5" name="content6">{{$business_technology->content6}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Icon6</label>
                                            <input type="file" name="icon_path6" class="dropify" id="input-file-now" data-height="80" data-default-file="{{$business_technology->icon_path6 ==null ? '' : asset($business_technology->icon_path6)}}" value="{{asset($business_technology->icon_path6)}}">
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
            placeholder:'Write something'
        });
    </script>
@endsection
