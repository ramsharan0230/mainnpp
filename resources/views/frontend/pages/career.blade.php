@extends('frontend.layouts.master')

@section('content')

    <!-- ======= Hero Section ======= -->
    <div id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="d-flex justify-content-center ">
                <h1 class="text-center">Career</h1>
            </div>

            <div class="breadcrumbs d-flex justify-content-center ">
                <div class="container">
                    <div class="d-flex align-items-center justify-content-center">
                        <ol>


                            <li><a href="{{route('home')}}">Home</a></li>
                            <li style="color: #fff;">career</li>
                        </ol>
                    </div>
                </div>
            </div>

        </div>
    </div><!-- End Hero -->


    <section class="career">
        <div class="container">
            <div class="section-title">
                <h2 class="">Career at Samata School</h2>
            </div>

            <div class="career-content">
                <p class="">
                    We at samata strongly believe success follows those who have the right motivation and guidance.
                    We also believe that motivation drives people to the limits and a coach / trainer is the best
                    motivator. At samata, we encourage our people to expand their knowledge & creativity in
                    samata training, providing them a supportive work environment to help achieve their
                    professional and personal growth.
                    If you believe you are suitable to fit into these shoes
<<<<<<< HEAD
                    kindly apply to <a href="" class=""> samata@career.com.np</a>
=======
                    kindly apply to <a href="" class=""> info@samatatrust.org.np</a>
>>>>>>> 111445a8eccb8d196fdfbc26a3f003a348b2b4cf
                </p>
            </div>
            <div class="row">
                <div class="col-12">
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
            </div>

            <div class="career-table">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Current Vacancies:</th>
                        <th scope="col">Post date</th>
                        <th scope="col">dateline</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(\App\Models\Vacancy::orderBy('id','DESC')->get() as $item)
                    <tr>
                        <td> <a href="" class="">
                                {{$item->title}}
                                <span>({{$item->opening}})</span>
                            </a>
                        </td>
                        </a>
                        <td>{{\Illuminate\Support\Carbon::parse($item->created_at)->format('d M, Y')}}</td>
                        <td>{{\Illuminate\Support\Carbon::parse($item->apply_before)->format('d M, Y')}}</td>
                        <td>
                            <a href="" data-toggle="modal" data-target="#apply-job{{$item->id}}" class="btn btn-info">Apply</a>
                            {{--apply model--}}
                            <div class="modal fade" id="apply-job{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Apply for the position of
                                                <strong class="text-info">{{$item->title}}</strong></h4>
                                            <button class="close" type="button" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">

                                            <form action="{{route('vacancy.application')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <input name="vacancy_id" type="hidden" class="uk-input" value="{{$item->id}}">

                                                <div class="form-group row">
                                                    <div class="col">
                                                        <label class="col-form-label" for="fullName">Full Name :</label>
                                                        <input name="name" class="form-control" type="text" placeholder="Full Name" required="required" value="{{old('name')}}">

                                                    </div>

                                                    <div class="col">
                                                        <label class="col-form-label" for="fullName">Date Of Birth (English) :</label>
                                                        <input class="form-control datePicker" type="date" name="dob" placeholder="DOB" required="required" value="{{old('dob')}}">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col">
                                                        <label class="col-form-label" for="fullName">Address (Current) :</label>
                                                        <input class="form-control" name="address" type="text" placeholder="current address" value="{{old('address')}}" required="required">

                                                    </div>
                                                    <div class="col">
                                                        <label class="col-form-label" for="fullName">Educational qualification :</label>
                                                        <div class="">
                                                            <input class="form-control mb-2" type="text" name="education" placeholder="Education Qualification" value="{{old('education')}}" required="required">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="is_completed" {{old('is_completed') ? 'checked' : ''}} value="completed"> Completed
                                                            </label>
                                                            <label class="radio-inline ml-2">
                                                                <input type="radio" name="is_completed" {{old('is_completed') ? 'checked' : ''}} value="running"> Running
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col">
                                                        <label class="col-form-label" for="fullName">Gender :</label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="gender" {{old('gender') ? 'checked' : ''}} value="male" required="required"> Male
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="gender" {{old('gender') ? 'checked' : ''}} value="female" required="required"> Female
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="form-group row">

                                                    <div class="col">
                                                        <label class="col-form-label" for="fullName">Institution(college/school) :</label>
                                                        <input class="form-control" type="text" name="institution" value="{{old('institution')}}" placeholder="Degree Obtained from" required="required">

                                                    </div>
                                                    <div class="col">
                                                        <label class="col-form-label" for="fullName">Total Experience (Years) :</label>
                                                        <input class="form-control" type="text" name="experience" value="{{old('experience')}}" placeholder="Experience (if not input 0)" required="required">

                                                    </div>

                                                </div>

                                                <div class="form-group row">
                                                    <div class="col">
                                                        <label class="col-form-label" for="fullName">Last/ Current Designation : </label>
                                                        <input class="form-control" type="text" value="{{old('last_designation')}}" name="last_designation" placeholder="Recent Designation (if not leave empty)">

                                                    </div>
                                                    <div class="col">
                                                        <label class="col-form-label" for="fullName">Last/ Current Organization : </label>
                                                        <input class="form-control" type="text" name="last_org" value="{{old('last_org')}}" placeholder="Recent Organization (if not leave empty)">

                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-md-6">
                                                        <label class="col-form-label" for="expectedSalary">Expected Salary : </label>
                                                        <input class="form-control" type="text" value="{{old('expected_salary')}}" name="expected_salary" placeholder="Your Expected Salary">

                                                    </div>

                                                </div>

                                                <div class="form-group row">
                                                    <div class="col">
                                                        <label class="col-form-label" for="fullName">Bike :</label>
                                                        <label class="radio-inline">
                                                            <input type="radio" {{old('bike') ? 'checked' : ''}} name="bike" required="required" value="yes">Yes
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="bike" {{old('bike') ? 'checked' : ''}} required="required" value="no" >No
                                                        </label>
                                                    </div>
                                                    <div class="col">
                                                        <label class="col-form-label" for="fullName">License :</label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="license" {{old('license') ? 'checked' : ''}} required="required" value="yes">Yes
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="license" {{old('license') ? 'checked' : ''}} required="required" value="no" >No
                                                        </label>
                                                    </div>
                                                </div>
                                                <!-- end added-->
                                                <div class="form-group row">
                                                    <div class="col">
                                                        <label class="col-form-label" for="emailAddress">Email Address :</label>
                                                        <input name="email" class="form-control"  value="{{old('email')}}" type="email" placeholder="Email" required="required">

                                                    </div>
                                                    <div class="col">
                                                        <label class="col-form-label" for="emailAddress">Contact Number :</label>
                                                        <input class="form-control" type="text" value="{{old('phone')}}"  name="phone" placeholder="Contact No." required="required">

                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col">
                                                        <label class="col-form-label" for="message">Message :</label>
                                                        <textarea class="form-control" placeholder="Message" name="message" rows="6">{{old('message')}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-danger" type="button" data-dismiss="modal">Close</button>
                                                    <button class="btn btn-success" type="submit">Submit</button>
                                                </div>
                                            </form>
                                        </div><!-- end modal body -->
                                    </div><!-- end modal content -->
                                </div><!-- end modal dialog -->
                            </div>

                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>




@endsection

@push('styles')
    <link href="{{asset('frontend/assets/css/header.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/about.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/donate.css')}}" rel="stylesheet">
@endpush

@push('scripts')
    <script>
        $('#location').change(function () {
            var location=$(this).val();

            $.ajax({
                url:'{{route('get.location')}}',
                data:{
                  _token:"{{csrf_token()}}",
                  location:location,
                },
                type:'post',
                dataType:'JSON',
                success:function (response) {
                    if(response.status){
                        $('#location').html(response['address_render']);
                    }
                    else{
                        alert('error');
                    }
                }

            })
        })

    </script>
@endpush
