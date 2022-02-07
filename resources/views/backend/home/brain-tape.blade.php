@extends('backend.layouts.master')

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header pt-4">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h4><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Brain Tape</h4>
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
                            <form action="{{route('brain.tape.update')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="row clearfix">

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Content</label>
                                            <textarea  class="form-control" placeholder="Bio-well content" rows="5" name="content">{{$brain_tape->content}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Cover Image <span class="text-danger">*</span></label>
                                            <input type="file" name="cover_image" class="dropify" id="input-file-now" data-height="100" data-default-file="{{asset($brain_tape->cover_image)}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Brain Tape Description Image <span class="text-danger">*</span></label>
                                            <input type="file" name="brain_tape_description_image" class="dropify" id="input-file-now" data-height="100" data-default-file="{{asset($brain_tape->brain_tape_description_image)}}">
                                        </div>
                                    </div>


                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Brain Tape Headset Image <span class="text-danger">*</span></label>
                                            <input type="file" name="brain_tape_headset_image" class="dropify" id="input-file-now" data-height="100" data-default-file="{{asset($brain_tape->brain_tape_headset_image)}}">
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
