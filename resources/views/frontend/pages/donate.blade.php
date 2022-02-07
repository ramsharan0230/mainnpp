@extends('frontend.layouts.master')

@section('content')


    <!-- ======= Hero Section ======= -->
    <div id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="d-flex justify-content-center ">
                <h1 class="text-center">Donate Us</h1>
            </div>

        </div>
    </div><!-- End Hero -->


    <section class="donate-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="form-box">
                        <form action="{{route('donate.submit')}}" method="post">
                            @csrf
                            <div class="information">
                                <h4 class="">Your impact: $1 = educated 1 students</h4>
                                <p class="">Every dollar you give can provide at least one student can be educated  through the samata foundation networks</p>
                                <hr>
                            </div>
                            <p class="">CHOOSE YOUR GIFT TYPE</p>
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <input type="radio" value="monthly" id="gift_type1" name="gift_type" required>
                                    <label for="gift_type1" class="nav-link gift-link " id="pills-monthly-tab" >Monthly</label>
                                </li>
                                <li class="nav-item">
                                    <input type="radio" value="onetime" name="gift_type" id="gift_type2" required>
                                        <label for="gift_type2" class="nav-link gift-link" id="pills-onetime-tab" >
                                                Onetime
                                        </label>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active " id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab">
                                    <div class="form-list mt-4">
                                        <p class="">CHOOSE YOUR GIFT AMOUNT </p>
                                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <input type="radio" name="gift_amount" id="gift_amount1"  value="10" {{old('gift_amount')=='10' ? 'checked' : ''}}>
                                                <label class="nav-link amount-link" for="gift_amount1" >$10</label>
                                            </li>
                                            <li class="nav-item">
                                                <input type="radio" name="gift_amount" value="20" id="gift_amount2" {{old('gift_amount')=='20' ? 'checked' : ''}}>

                                                <label class="nav-link amount-link " for="gift_amount2">$20</label>
                                            </li>
                                            <li class="nav-item">
                                                <input type="radio" name="gift_amount" value="40" id="gift_amount3" {{old('gift_amount')=='30' ? 'checked' : ''}}>

                                                <label class="nav-link amount-link " for="gift_amount3">$30</label>
                                            </li>
                                            <li class="nav-item">
                                                <input type="radio" name="gift_amount" value="40" id="gift_amount4" {{old('gift_amount')=='40' ? 'checked' : ''}}>

                                                <label class="nav-link amount-link " for="gift_amount4">$40</label>
                                            </li>
                                            <li class="nav-item">
                                                <input type="radio" name="gift_amount" value="50" id="gift_amount5" {{old('gift_amount')=='50' ? 'checked' : ''}}>

                                                <label class="nav-link amount-link " for="gift_amount5">$50</label>
                                            </li>
                                        </ul>
                                        <div class="form-group mt-4 ml-4">
                                            <label for="Name">Other</label>
                                            <input type="text" class="form-control" id="amount" name="additional_amount" value="{{old('additional_amount')}}" placeholder="$ 0.00">
                                        </div>


                                    </div>



                                </div>


                                <div class="information mt-4">
                                    <h5 class=""> ENTER YOUR BILLING INFORMATION</h5>
                                    <div class="form-row mt-3">
                                        <div class="form-group col-md-6">
                                            <label for="Name">FirstName</label>
                                            <input type="text" class="form-control" name="first_name" placeholder="John" value="{{old('first_name')}}" required id="Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="lname">LastName</label>
                                            <input type="text" class="form-control"  name="last_name" placeholder="Doe" value="{{old('last_name')}}" required  id="lname">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email"  name="email" placeholder="johndoe@gmail.com" value="{{old('email')}}" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="phonenumber">Phone No.</label>
                                            <input type="text" class="form-control" id="phonenumber"  name="phone" placeholder="+977-98**********" value="{{old('phone')}}" required>

                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label for="name">Message</label>
                                        <textarea class="form-control" name="message" rows="10" data-rule="required" placeholder="write something.." data-msg="Please write something for us">{{old('message')}}</textarea>
                                        <div class="validate"></div>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label bill-info" for="inlineCheckbox2">yes, I'll generously add $ 0.25 each month to cover the transaction fees so
                                            <br> samata school can keep 100% of my donation.</label>
                                    </div>
                                    <div class="personal-information mt-3">
                                        <div class="accordion-list ">
                                            <ul>
                                                <li>
                                                    <a data-toggle="collapse" href="#accordion-list-2" class="collapsed" aria-expanded="false">
                                                        <i class="icofont-caret-right"></i>
                                                        click here to give in honor of another person
                                                    </a>

                                                    <div id="accordion-list-2" class="collapse" data-parent=".accordion-list" >

                                                        <div class="form-check form-check-inline mt-4 ml-5">
                                                            <input class="form-check-input" type="radio" id="inlineCheckbox1" name="donate_type" value="honour" {{old('donate_type')=='honour' ? 'checked' : ''}}>
                                                            <label class="form-check-label" for="inlineCheckbox1">In honour</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" id="inlineCheckbox2" name="donate_type" value="memory" {{old('donate_type')=='memory' ? 'checked' : ''}}>
                                                            <label class="form-check-label" for="inlineCheckbox2">In Memory</label>
                                                        </div>

                                                        <div class="form-row mt-3">
                                                            <div class="form-group col-md-6">
                                                                <input type="text" class="form-control" id="name" value="{{old('honour_person')}}" name="honour_person"  placeholder="In honor of whom?">

                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <input type="text" class="form-control" id="name" value="{{old('tribute_person')}}" name="tribute_person"  placeholder="who is making this tribute?">

                                                            </div>


                                                        </div>

                                                        <div class="form-group">
                                                            <label for="name">Message</label>
                                                            <textarea class="form-control" name="tribute_message" rows="10" data-rule="required" data-msg="Please write something for us" placeholder="message to your tributes (optional)">{{old('tribute_message')}}</textarea>
                                                            <div class="validate"></div>
                                                        </div>


                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="payement-button mt-4 mb-3 d-flex justify-content-center">
                                            <button type="submit" class="btn-card " style="border: 0">Credit card</button>
                                            <a href="#" class="btn-paypal "> Bank transfer</a>
                                        </div>

                                        <p class="mt-5">By donating, you  agree to  our <a href="" class="term">Terms of service </a>  <a href="" class="term">Privacy policy</a></p>
                                    </div>

                                </div>




                            </div>
                        </form>
                    </div>

                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </section>




@endsection

@push('styles')
    <link href="{{asset('frontend/assets/css/header.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/about.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/donate.css')}}" rel="stylesheet">
    <style>
        .nav-item input[type="radio"]:checked+label{
        background:#1E4491;
        color: white}

        .nav-item input[type="radio"]{
            display: none;
        }
    </style>
@endpush
