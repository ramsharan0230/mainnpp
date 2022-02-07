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
                        <form action="{{route('blog-category.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Category Heading </label>
                                        <input type="text" class="form-control" placeholder="Heading" name="title" value="{{old('title')}}" id="title">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">URL</label>
                                        <input type="text" class="form-control" placeholder="URL" name="slug" value="{{old('slug')}}" id="slug">
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
                                       <button type="submit" class="btn btn-info">Create Category</button>
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

@section('scripts')
    <script>
        $('#description').summernote({
            placeholder:'Write something'
        });
    </script>
@endsection
