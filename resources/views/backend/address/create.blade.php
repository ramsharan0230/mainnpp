@extends('backend.layouts.master')

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Add Address</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin')}}"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">Address</li>
                            <li class="breadcrumb-item active">Add Address</li>
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
                            <form action="{{route('address.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Full Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Full name" name="name" value="{{old('name')}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Location</label>
                                            <input type="text" class="form-control" placeholder="Location" name="location" value="{{old('location')}}">
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="email" class="form-control" placeholder="Email" name="email" value="{{old('email')}}">
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Phone</label>
                                            <input type="text" class="form-control" placeholder="Phone" name="phone" value="{{old('phone')}}">
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Municipality</label>
                                            <input type="text" class="form-control" placeholder="Municipality" name="municipality" value="{{old('municipality')}}">
                                        </div>

                                    </div> <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Ward Number</label>
                                            <input type="number" class="form-control" placeholder="Ward No" name="ward_no" value="{{old('ward_no')}}">
                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">District</label>
                                            <input type="text" class="form-control" placeholder="District" name="district" value="{{old('district')}}">
                                        </div>

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
