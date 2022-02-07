@extends('backend.layouts.master')

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Edit Services</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin')}}"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">Services</li>
                            <li class="breadcrumb-item active">Edit Services</li>
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
                            <form action="{{route('service.update',$service->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Service Heading <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Service heading" name="title" value="{{$service->title}}">
                                        </div>
                                    </div>


                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Icon <span class="text-danger">*</span></label>
                                            <input type="file" name="icon" class="dropify" id="input-file-now" data-height="100" data-default-file="{{asset($service->icon_path)}}" value="{{asset($service->icon_path)}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Cover Image <span class="text-danger">*</span></label>
                                            <input type="file" name="cover_image" class="dropify" id="input-file-now" data-height="100" data-default-file="{{asset($service->cover_image)}}" value="{{asset($service->cover_image)}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Description</label>
                                            <textarea  class="form-control description" placeholder="Write some text..." name="description" rows="3">{{$service->description}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Intro Description</label>
                                            <textarea rows="3" class="form-control description" placeholder="Write some text..." name="intro_description">{{$service->intro_description}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-12 py-3">
                                        <h3>Our Procedure</h3>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Procedure Title <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Procedure title" name="procedure_title" value="{{$service->procedure_title}}">
                                        </div>


                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Procedure Subtitle</label>
                                            <textarea rows="3" class="form-control" placeholder="Write some text..." name="procedure_subtitle">{{$service->procedure_subtitle}}</textarea>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Procedure Title1</label>
                                            <input type="text" class="form-control" placeholder="" name="procedure_title1" value="{{$service->procedure_title1}}">
                                        </div>


                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Procedure Icon1 </label>
                                            <input type="file" name="procedure_icon_path1" class="dropify" id="input-file-now" data-height="100" data-default-file="{{asset($service->procedure_icon_path1)}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Procedure content1</label>
                                            <textarea rows="3" class="form-control" placeholder="Write some text..." name="procedure_content1">{{$service->procedure_content1}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Procedure Title2</label>
                                            <input type="text" class="form-control" placeholder="" name="procedure_title2" value="{{$service->procedure_title2}}">
                                        </div>


                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Procedure Icon2 </label>
                                            <input type="file" name="procedure_icon_path2" class="dropify" id="input-file-now" data-height="100" data-default-file="{{asset($service->procedure_icon_path2)}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Procedure content2</label>
                                            <textarea rows="3" class="form-control" placeholder="Write some text..." name="procedure_content2">{{$service->procedure_content2}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Procedure Title3</label>
                                            <input type="text" class="form-control" placeholder="" name="procedure_title3" value="{{$service->procedure_title3}}">
                                        </div>


                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Procedure Icon3</label>
                                            <input type="file" name="procedure_icon_path3" class="dropify" id="input-file-now" data-height="100" data-default-file="{{asset($service->procedure_icon_path3)}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Procedure content3</label>
                                            <textarea rows="3" class="form-control" placeholder="Write some text..." name="procedure_content3">{{$service->procedure_content3}}</textarea>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Procedure Title4</label>
                                            <input type="text" class="form-control" placeholder="" name="procedure_title4" value="{{$service->procedure_title4}}">
                                        </div>


                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Procedure Icon4 </label>
                                            <input type="file" name="procedure_icon_path4" class="dropify" id="input-file-now" data-height="100" data-default-file="{{asset($service->procedure_icon_path4)}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Procedure content4</label>
                                            <textarea rows="3" class="form-control" placeholder="Write some text..." name="procedure_content4">{{$service->procedure_content4}}</textarea>
                                        </div>
                                    </div>


                                    <div class="col-12 py-3">
                                        <h3>Why Select</h3>
                                    </div>


                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Select Title <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Select title" name="select_title" value="{{$service->select_title}}">
                                        </div>


                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Select Subtitle</label>
                                            <textarea rows="3" class="form-control" placeholder="Write some text..." name="select_subtitle">{{$service->select_subtitle}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Select Title1</label>
                                            <input type="text" class="form-control" placeholder="" name="select_title1" value="{{$service->select_title1}}">
                                        </div>


                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Select Icon1 </label>
                                            <input type="file" name="select_icon_path1" class="dropify" id="input-file-now" data-height="100" data-default-file="{{asset($service->select_icon_path1)}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Select subtitle1</label>
                                            <textarea rows="3" class="form-control" placeholder="Write some text..." name="select_subtitle1">{{$service->select_subtitle1}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Select content1</label>
                                            <textarea rows="3" class="form-control" placeholder="Write some text..." name="select_content1">{{$service->select_content1}}</textarea>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Select Title2</label>
                                            <input type="text" class="form-control" placeholder="" name="select_title2" value="{{$service->select_title2}}">
                                        </div>


                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Select Icon2 </label>
                                            <input type="file" name="select_icon_path2" class="dropify" id="input-file-now" data-height="100" data-default-file="{{asset($service->select_icon_path2)}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Select subtitle2</label>
                                            <textarea rows="3" class="form-control" placeholder="Write some text..." name="select_subtitle2">{{$service->select_subtitle2}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Select content2</label>
                                            <textarea rows="3" class="form-control" placeholder="Write some text..." name="select_content2">{{$service->select_content2}}</textarea>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Select Title3</label>
                                            <input type="text" class="form-control" placeholder="" name="select_title3" value="{{$service->select_title3}}">
                                        </div>


                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Select Icon3 </label>
                                            <input type="file" name="select_icon_path3" class="dropify" id="input-file-now" data-height="100" data-default-file="{{asset($service->select_icon_path3)}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Select subtitle3</label>
                                            <textarea rows="3" class="form-control" placeholder="Write some text..." name="select_subtitle3">{{$service->select_subtitle3}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Select content3</label>
                                            <textarea rows="3" class="form-control" placeholder="Write some text..." name="select_content3">{{$service->select_content3}}</textarea>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Select Title4</label>
                                            <input type="text" class="form-control" placeholder="" name="select_title4" value="{{$service->select_title4}}">
                                        </div>


                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Select Icon4 </label>
                                            <input type="file" name="select_icon_path4" class="dropify" id="input-file-now" data-height="100" data-default-file="{{asset($service->select_icon_path4)}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Select subtitle4</label>
                                            <textarea rows="3" class="form-control" placeholder="Write some text..." name="select_subtitle4">{{$service->select_subtitle4}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Select content4</label>
                                            <textarea rows="3" class="form-control" placeholder="Write some text..." name="select_content4">{{$service->select_content4}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-12 py-3">
                                        <h3>Inner services</h3>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Service Title1</label>
                                            <input type="text" class="form-control" placeholder="" name="service_title1" value="{{$service->service_title1}}">
                                        </div>


                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Service Icon1 </label>
                                            <input type="file" name="service_icon_path1" class="dropify" id="input-file-now" data-height="100" data-default-file="{{asset($service->service_icon_path1)}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Service subtitle1</label>
                                            <textarea rows="3" class="form-control" placeholder="Write some text..." name="service_subtitle1">{{$service->service_subtitle1}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Service Title2</label>
                                            <input type="text" class="form-control" placeholder="" name="service_title2" value="{{$service->service_title2}}">
                                        </div>


                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Service Icon2 </label>
                                            <input type="file" name="service_icon_path2" class="dropify" id="input-file-now" data-height="100" data-default-file="{{asset($service->service_icon_path2)}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Service subtitle2</label>
                                            <textarea rows="3" class="form-control" placeholder="Write some text..." name="service_subtitle2">{{$service->service_subtitle2}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Service Title3</label>
                                            <input type="text" class="form-control" placeholder="" name="service_title3" value="{{$service->service_title3}}">
                                        </div>


                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Service Icon3 </label>
                                            <input type="file" name="service_icon_path3" class="dropify" id="input-file-now" data-height="100" data-default-file="{{asset($service->service_icon_path3)}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Service subtitle3</label>
                                            <textarea rows="3" class="form-control" placeholder="Write some text..." name="service_subtitle3">{{$service->service_subtitle3}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Service Title4</label>
                                            <input type="text" class="form-control" placeholder="" name="service_title4" value="{{$service->service_title4}}">
                                        </div>


                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Service Icon4 </label>
                                            <input type="file" name="service_icon_path4" class="dropify" id="input-file-now" data-height="100" data-default-file="{{asset($service->service_icon_path4)}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Service subtitle4</label>
                                            <textarea rows="3" class="form-control" placeholder="Write some text..." name="service_subtitle4">{{$service->service_subtitle4}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Service Title5</label>
                                            <input type="text" class="form-control" placeholder="" name="service_title5" value="{{$service->service_title5}}">
                                        </div>


                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Service Icon5 </label>
                                            <input type="file" name="service_icon_path5" class="dropify" id="input-file-now" data-height="100" data-default-file="{{asset($service->service_icon_path5)}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Service subtitle5</label>
                                            <textarea rows="3" class="form-control" placeholder="Write some text..." name="service_subtitle5">{{$service->service_subtitle5}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Service Title6</label>
                                            <input type="text" class="form-control" placeholder="" name="service_title6" value="{{$service->service_title6}}">
                                        </div>


                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Service Icon6 </label>
                                            <input type="file" name="service_icon_path6" class="dropify" id="input-file-now" data-height="100" data-default-file="{{asset($service->service_icon_path6)}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Service subtitle6</label>
                                            <textarea rows="3" class="form-control" placeholder="Write some text..." name="service_subtitle6">{{$service->service_subtitle6}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Meta title</label>
                                            <input type="text" class="form-control"  placeholder="Meta title" name="meta_title" value="{{$service->meta_title}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Meta keywords</label>
                                            <input type="text" class="form-control" placeholder="Meta keywords" name="meta_keywords" value="{{$service->meta_keywords}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Meta Description</label>
                                            <textarea  class="form-control " placeholder="Meta description" rows="5" name="meta_description">{{$service->meta_description}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary">Update</button>
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
    <script>
        $(document).ready(function() {
            $('#description').summernote();
        });
    </script>
    <script>
        $('#condition').change(function () {
            var condition=$(this).val();
            if(condition !='promo'){
                $('#position_div').addClass('d-none');
                $('#position').val('');
            }
            else{
                $('#position_div').removeClass('d-none');
            }
        });
    </script>
    <script>
        $('#position').change(function () {
            var position=$(this).val();
            if(position !='middle'){
                $('#inner_position_div').addClass('d-none');
                $('#inner_position').val('');
            }
            else{
                $('#inner_position_div').removeClass('d-none');
            }
        });
    </script>
@endsection
