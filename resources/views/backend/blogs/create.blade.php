@extends('backend.layouts.master')

@section('content')

<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Add Blog Category</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Blog Category</li>
                        <li class="breadcrumb-item active">Add Blog Category</li>
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
                    <form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label for="">Banner Heading </label>
                                    <input type="text" class="form-control" placeholder="Heading" name="title" value="{{old('title')}}" id="title">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label for="">URL</label>
                                    <input type="text" class="form-control" placeholder="URL" name="slug" value="{{old('slug')}}" id="slug">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label for="">Category <span class="text-danger">*</span></label>
                                    <select name="blog_cat[]" class="form-control multi-select" id="" multiple>
                                        @foreach($categories as $cat)
                                            <option value="{{$cat->id}}" {{in_array($cat->id,old('blog_cat') ?: []) ? 'selected' : ''}}>{{ucfirst($cat->title)}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label for="">Tag <span class="text-danger">*</span></label>
                                    <select name="blog_tag[]" class="form-control multi-select" id="" multiple>
                                        @foreach($tags as $tag)
                                            <option value="{{$tag->id}}" {{in_array($tag->id,old('blog_tag') ?: []) ? 'selected' : ''}}>{{ucfirst($tag->title)}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label for="">Quote</label>
                                    <textarea id="description" class="form-control description" placeholder="Write something.." name="quote">{{old('quote')}}</textarea>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label for="">Content</label>
                                    <textarea id="description" class="form-control description" placeholder="Write something.." name="content">{{old('content')}}</textarea>
                                </div>
                            </div>


                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label for="">Blog Image <span class="text-danger">*</span></label>
                                    <input type="file" name="image" class="dropify" id="input-file-now" data-height="100" data-default-file="{{old('image')}}">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label for="">Posted By</label>
                                    <input type="text" name="posted_by" class="form-control" value="{{old('posted_by')}}" placeholder="Posted By">
                                </div>
                            </div>


                            <div class="col-lg-12 col-md-12">
                                <h3 class=" text-secondary">SEO</h3>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label for="">Meta Title</label>
                                    <input type="text" class="form-control" name="meta_title" placeholder="Meta Title" value="{{old('meta_title')}}">
                                </div>
                            </div>


                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label for="">Meta Keywords</label>
                                    <input type="text" class="form-control" name="meta_keywords" placeholder="Meta Keyword" value="{{old('meta_keywords')}}">
                                </div>
                            </div>


                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label for="">Meta Description</label>
                                    <textarea rows="3" class="form-control description" placeholder="Write some meta description..." name="meta_descriptions">{{old('meta_descriptions')}}</textarea>
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
                               <div class="form-group">
                                   <button type="submit" class="btn btn-info">Create Blog</button>
                                   <button type="reset" class="btn btn-outline-danger">Cancel</button>
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

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" />
@endsection

@section('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous"></script>
    <script>
        $(".multi-select").select2({
            placeholder: "Select a state",
            allowClear: true
        });
    </script>

@endsection
