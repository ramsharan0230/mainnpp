@extends('backend.layouts.master')

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Add Services</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin')}}"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">Services</li>
                            <li class="breadcrumb-item active">Add Serviec</li>
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
                            <form action="{{route('service.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Service Heading <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Heading" name="title" value="{{old('title')}}">
                                        </div>


                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Photo <span class="text-danger">*</span></label>
                                            <input type="file" name="icon" class="dropify" id="input-file-now" data-height="100" data-default-file="{{old('icon')}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Cover Image <span class="text-danger">*</span></label>
                                            <input type="file" name="cover_image" class="dropify" id="input-file-now" data-height="100" data-default-file="{{old('cover_image')}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Description</label>
                                            <textarea rows="3" class="form-control description" placeholder="Write some text..." name="description">{{old('description')}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Intro Description</label>
                                            <textarea rows="3" class="form-control description" placeholder="Write some text..." name="intro_description">{{old('intro_description')}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 py-3">
                                        <h3>Our Procedure</h3>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Procedure Title <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Procedure title" name="procedure_title" value="{{old('procedure_title')}}">
                                        </div>


                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Procedure Subtitle</label>
                                            <textarea rows="3" class="form-control" placeholder="Write some text..." name="procedure_subtitle">{{old('procedure_subtitle')}}</textarea>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Procedure Title1</label>
                                            <input type="text" class="form-control" placeholder="Heading" name="procedure_title1" value="{{old('procedure_title1')}}">
                                        </div>


                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Procedure Icon1 </label>
                                            <input type="file" name="procedure_icon_path1" class="dropify" id="input-file-now" data-height="100" data-default-file="{{old('procedure_icon_path1')}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Procedure content1</label>
                                            <textarea rows="3" class="form-control" placeholder="Write some text..." name="procedure_content1">{{old('procedure_content1')}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Procedure Title2</label>
                                            <input type="text" class="form-control" placeholder="" name="procedure_title2" value="{{old('procedure_title2')}}">
                                        </div>


                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Procedure Icon2 </label>
                                            <input type="file" name="procedure_icon_path2" class="dropify" id="input-file-now" data-height="100" data-default-file="{{old('procedure_icon_path2')}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Procedure content2</label>
                                            <textarea rows="3" class="form-control" placeholder="Write some text..." name="procedure_content2">{{old('procedure_content2')}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Procedure Title3</label>
                                            <input type="text" class="form-control" placeholder="" name="procedure_title3" value="{{old('procedure_title3')}}">
                                        </div>


                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Procedure Icon3</label>
                                            <input type="file" name="procedure_icon_path3" class="dropify" id="input-file-now" data-height="100" data-default-file="{{old('procedure_icon_path3')}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Procedure content3</label>
                                            <textarea rows="3" class="form-control" placeholder="Write some text..." name="procedure_content3">{{old('procedure_content3')}}</textarea>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Procedure Title4</label>
                                            <input type="text" class="form-control" placeholder="" name="procedure_title4" value="{{old('procedure_title4')}}">
                                        </div>


                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Procedure Icon4 </label>
                                            <input type="file" name="procedure_icon_path4" class="dropify" id="input-file-now" data-height="100" data-default-file="{{old('procedure_icon_path4')}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Procedure content4</label>
                                            <textarea rows="3" class="form-control" placeholder="Write some text..." name="procedure_content4">{{old('procedure_content4')}}</textarea>
                                        </div>
                                    </div>


                                    <div class="col-12 py-3">
                                        <h3>Why Select</h3>
                                    </div>


                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Select Title <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Select title" name="select_title" value="{{old('select_title')}}">
                                        </div>


                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Select Subtitle</label>
                                            <textarea rows="3" class="form-control" placeholder="Write some text..." name="select_subtitle">{{old('select_subtitle')}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Select Title1</label>
                                            <input type="text" class="form-control" placeholder="" name="select_title1" value="{{old('select_title1')}}">
                                        </div>


                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Select Icon1 </label>
                                            <input type="file" name="select_icon_path1" class="dropify" id="input-file-now" data-height="100" data-default-file="{{old('select_icon_path1')}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Select subtitle1</label>
                                            <textarea rows="3" class="form-control" placeholder="Write some text..." name="select_subtitle1">{{old('select_subtitle1')}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Select content1</label>
                                            <textarea rows="3" class="form-control" placeholder="Write some text..." name="select_content1">{{old('select_content1')}}</textarea>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Select Title2</label>
                                            <input type="text" class="form-control" placeholder="" name="select_title2" value="{{old('select_title2')}}">
                                        </div>


                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Select Icon2 </label>
                                            <input type="file" name="select_icon_path2" class="dropify" id="input-file-now" data-height="100" data-default-file="{{old('select_icon_path2')}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Select subtitle2</label>
                                            <textarea rows="3" class="form-control" placeholder="Write some text..." name="select_subtitle2">{{old('select_subtitle2')}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Select content2</label>
                                            <textarea rows="3" class="form-control" placeholder="Write some text..." name="select_content2">{{old('select_content2')}}</textarea>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Select Title3</label>
                                            <input type="text" class="form-control" placeholder="" name="select_title3" value="{{old('select_title3')}}">
                                        </div>


                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Select Icon3 </label>
                                            <input type="file" name="select_icon_path3" class="dropify" id="input-file-now" data-height="100" data-default-file="{{old('select_icon_path3')}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Select subtitle3</label>
                                            <textarea rows="3" class="form-control" placeholder="Write some text..." name="select_subtitle3">{{old('select_subtitle3')}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Select content3</label>
                                            <textarea rows="3" class="form-control" placeholder="Write some text..." name="select_content3">{{old('select_content3')}}</textarea>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Select Title4</label>
                                            <input type="text" class="form-control" placeholder="" name="select_title4" value="{{old('select_title4')}}">
                                        </div>


                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Select Icon4 </label>
                                            <input type="file" name="select_icon_path4" class="dropify" id="input-file-now" data-height="100" data-default-file="{{old('select_icon_path4')}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Select subtitle4</label>
                                            <textarea rows="3" class="form-control" placeholder="Write some text..." name="select_subtitle4">{{old('select_subtitle4')}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Select content4</label>
                                            <textarea rows="3" class="form-control" placeholder="Write some text..." name="select_content4">{{old('select_content4')}}</textarea>
                                        </div>
                                    </div>

                            <div class="col-12 py-3">
                                <h3>Inner services</h3>
                            </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Service Title1</label>
                                            <input type="text" class="form-control" placeholder="" name="service_title1" value="{{old('service_title1')}}">
                                        </div>


                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Service Icon1 </label>
                                            <input type="file" name="service_icon_path1" class="dropify" id="input-file-now" data-height="100" data-default-file="{{old('service_icon_path1')}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Service subtitle1</label>
                                            <textarea rows="3" class="form-control" placeholder="Write some text..." name="service_subtitle1">{{old('service_subtitle1')}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Service Title2</label>
                                            <input type="text" class="form-control" placeholder="" name="service_title2" value="{{old('service_title2')}}">
                                        </div>


                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Service Icon2 </label>
                                            <input type="file" name="service_icon_path2" class="dropify" id="input-file-now" data-height="100" data-default-file="{{old('service_icon_path2')}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Service subtitle2</label>
                                            <textarea rows="3" class="form-control" placeholder="Write some text..." name="service_subtitle2">{{old('service_subtitle2')}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Service Title3</label>
                                            <input type="text" class="form-control" placeholder="" name="service_title3" value="{{old('service_title3')}}">
                                        </div>


                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Service Icon3 </label>
                                            <input type="file" name="service_icon_path3" class="dropify" id="input-file-now" data-height="100" data-default-file="{{old('service_icon_path3')}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Service subtitle3</label>
                                            <textarea rows="3" class="form-control" placeholder="Write some text..." name="service_subtitle3">{{old('service_subtitle3')}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Service Title4</label>
                                            <input type="text" class="form-control" placeholder="" name="service_title4" value="{{old('service_title4')}}">
                                        </div>


                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Service Icon4 </label>
                                            <input type="file" name="service_icon_path4" class="dropify" id="input-file-now" data-height="100" data-default-file="{{old('service_icon_path4')}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Service subtitle4</label>
                                            <textarea rows="3" class="form-control" placeholder="Write some text..." name="service_subtitle4">{{old('service_subtitle4')}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Service Title5</label>
                                            <input type="text" class="form-control" placeholder="" name="service_title5" value="{{old('service_title5')}}">
                                        </div>


                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Service Icon5 </label>
                                            <input type="file" name="service_icon_path5" class="dropify" id="input-file-now" data-height="100" data-default-file="{{old('service_icon_path5')}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Service subtitle5</label>
                                            <textarea rows="3" class="form-control" placeholder="Write some text..." name="service_subtitle5">{{old('service_subtitle5')}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Service Title6</label>
                                            <input type="text" class="form-control" placeholder="" name="service_title6" value="{{old('service_title6')}}">
                                        </div>


                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Service Icon6 </label>
                                            <input type="file" name="service_icon_path6" class="dropify" id="input-file-now" data-height="100" data-default-file="{{old('service_icon_path6')}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Service subtitle6</label>
                                            <textarea rows="3" class="form-control" placeholder="Write some text..." name="service_subtitle6">{{old('service_subtitle6')}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Meta title</label>
                                            <input type="text" class="form-control"  placeholder="Meta title" name="meta_title" value="{{old('meta_title')}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Meta keywords</label>
                                            <input type="text" class="form-control" placeholder="Meta keywords" name="meta_keywords" value="{{old('meta_keywords')}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Meta Description</label>
                                            <textarea  class="form-control " placeholder="Meta description" rows="5" name="meta_description">{{old('meta_description')}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12" >
                                        <label for="status">Status <span class="text-danger">*</span></label>
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

@endsection
