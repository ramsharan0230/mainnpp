@extends('backend.layouts.master')

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header pt-4">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h4><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Founder Message</h4>
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
                            <form action="{{route('founder.update')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row clearfix">

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Founder Message</label>
                                            <textarea  class="form-control" placeholder="Founder Message" rows="8" name="founder_message">{{$founder->founder_message}}</textarea>
                                        </div>
                                    </div>


                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Founder Profile</label>
                                            <input type="file" class="dropify" name="founder_profile" data-height="100" data-default-file="{{($founder->founder_profile !=null) ? asset($founder->founder_profile) :old('founder_profile')}}">
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
