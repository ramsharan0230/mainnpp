@extends('backend.layouts.master')

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Edit Office</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin')}}"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">Office</li>
                            <li class="breadcrumb-item active">Edit Office</li>
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
                            <form action="{{route('offices.update', $office->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="province_id">Province <span class="text-danger">*</span></label>
                                            <select name="province_id" id="province_id" class="form-control">
                                                <option value=""> Choose Province</option>
                                                @forelse ($provinces as $province)
                                                    <option value="{{ $province->id }}" {{ $office->province_id == $province->id?"selected":""}}>{{$province->name}}</option>
                                                @empty
                                                    
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="district">District</label>
                                            <input type="text" class="form-control" placeholder="District" name="district" value="{{ $office->district??old('district')}}">
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="municipality">Municipality</label>
                                            <input type="text" class="form-control" placeholder="Municipality" name="municipality" value="{{ $office->municipality??old('municipality')}}">
                                        </div>

                                    </div> 

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="ward">Ward Number</label>
                                            <input type="number" class="form-control" placeholder="Ward No" name="ward" value="{{ $office->ward??old('ward')}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="name">Office Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Office name ..." name="name" value="{{ $office->name??old('name')}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input type="text" class="form-control" placeholder="Address ..." name="address" value="{{ $office->address??old('address')}}">
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="telephone">Telephone</label>
                                            <input type="text" class="form-control" placeholder="Telephone ..." name="telephone" value="{{ $office->telephone??old('telephone')}}">
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="president">President</label>
                                            <input type="text" class="form-control" placeholder="President ..." name="president" value="{{ $office->president??old('president')}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="fax">Fax</label>
                                            <input type="text" class="form-control" placeholder="Fax ..." name="fax" value="{{ $office->fax??old('fax')}}">
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="email" class="form-control" placeholder="Email" name="email" value="{{ $office->email??old('email')}}">
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
