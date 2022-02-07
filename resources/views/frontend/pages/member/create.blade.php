@extends('frontend.layouts.master')

@section('content')

    <style>
        .form-pad{
            padding-left: 10px;
            padding-right: 30px;
        }
        .formmargin{
            margin-bottom: 10px;
        }
        ul>li{
            list-style-type:none
        }
    </style>

    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1 class="text-center">सदस्यता फारम </h1>
            
            

        </div>
    </section><!-- End Hero -->

    <section class="col-md-12">
        <div class="row container">
            <div class="row">
                <div class="col-sm-12">
                    @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li class="alert alert-danger">
                            {{$error}}
                        </li>
                        @endforeach
                    </ul>
                    @endif

                    @if (\Session::has('success'))
                        <div class="alert alert-success">
                            <ul>
                                <li>{!! \Session::get('success') !!}</li>
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
            
            <div class="col-md-2"></div>
                <form action="{{route('member.store')}}" class="col-md-8" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-check formmargin">
                        <label class="col-md-3" for="language">भाषा छान्नुहोस्<span style="color: #c14949">*</span></label>
                        <div class="col-md-8 offset-sm-3">
                            <div class="row">
                                <select name="language" class="form-select form-control" id="inputGroupSelect01" >
                                    <option value="" selected disabled>छान्नुहोस्</option>
                                    <option value="en">अंग्रेजी</option>
                                    <option value="np">नेपाल</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="form-check formmargin">
                        <div class="row">
                            <label class="col-md-3" >पुरा नाम<span style="color: #c14949">*</span></label>
                            <input class="col-md-8" type="text" name="name" placeholder="आफ्नो नाम भर्नुहोस्" value="{{ old('name') }}">
                        </div>
                        <div class="row">
                            <div class="col-sm-8 offset-sm-3">
                                @if ($errors->has('name')) 
                                <p style="color:red;">
                                    @foreach ($errors->get('name') as $errormessage) 
                                    {{ $errormessage }}<br>
                                    @endforeach
                                </p> 
                                @endif
                            </div>
                        </div>
                       
                    </div>
                    <div class="form-check formmargin">
                        <div class="row">
                            <label class="col-md-3" >फोन नम्बर<span style="color: #c14949">*</span></label>
                            <input class="col-md-8" type="text" name="phone" placeholder="आफ्नो फोन नम्बर" value="{{ old('phone') }}">
                        </div>
                        <div class="row">
                            <div class="col-sm-8 offset-sm-3">
                                @if ($errors->has('phone')) 
                                <p style="color:red;">
                                    @foreach ($errors->get('phone') as $errormessage) 
                                    {{ $errormessage }}<br>
                                    @endforeach
                                </p> 
                                @endif
                            </div>
                        </div>
                       
                    </div>
                    <div class="form-check formmargin">
                        <div class="row">
                            <label class="col-md-3" >ईमेल</label>
                            <input class="col-md-8" type="email" name="email" placeholder="आफ्नो ईमेल" value="{{ old('email') }}">
                        </div>
                        <div class="row">
                            <div class="col-sm-8 offset-sm-3">
                                @if ($errors->has('email')) 
                                <p style="color:red;">
                                    @foreach ($errors->get('email') as $errormessage) 
                                    {{ $errormessage }}<br>
                                    @endforeach
                                </p> 
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="form-check formmargin">
                        <div class="form-check ">
                            <div class="row">
                                <label class="col-md-3">लिङ्ग<span style="color: #c14949">*</span></label>
                                <div class="row col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input " type="radio" name="gender" value="female">
                                        <label class="form-check-label form-pad " for="female">महिला </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" value="male" checked>
                                        <label class="form-check-label form-pad" for="male"> पुरूष </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" value="other">
                                        <label class="form-check-label form-pad" for="other"> अन्य </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8 offset-sm-3">
                                    @if ($errors->has('gender')) 
                                    <p style="color:red;">
                                        @foreach ($errors->get('gender') as $errormessage) 
                                        {{ $errormessage }}<br>
                                        @endforeach
                                    </p> 
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-check formmargin">
                        <div class="form-check ">
                            <div class="row">
                                <label class="col-md-3">अपांगता<span style="color: #c14949">*</span></label>
                                <div class="row col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input " type="radio" name="disabled" value="1">
                                        <label class="form-check-label form-pad " for="disabled1">छ </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="disabled" value="0" checked>
                                        <label class="form-check-label form-pad" for="disabled2"> छैन </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8 offset-sm-3">
                                    @if ($errors->has('disabled')) 
                                    <p style="color:red;">
                                        @foreach ($errors->get('disabled') as $errormessage) 
                                        {{ $errormessage }}<br>
                                        @endforeach
                                    </p> 
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-check formmargin">
                    <div class="form-check ">
                        <div class="row">

                        <label class="col-md-3" >जन्म मिति<span style="color: #c14949">*</span></label>
                        <div class="form-check row " >
                            <select name="birth_year" class="form-select" id="inputGroupSelect01">
                                <option value="" selected>Year</option>

                                @php($currentyear = date('Y'))
                                @php($last = $currentyear -80)

                                @for ($i = $currentyear; $i >= $last; $i--)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                                @if ($errors->has('birth_year')) 
                                <p style="color:red;">
                                    @foreach ($errors->get('birth_year') as $errormessage) 
                                    {{ $errormessage }}<br>
                                    @endforeach
                                </p> 
                                @endif
                            </select>
                            

                            <select name="birth_month" class="form-select" id="inputGroupSelect02">
                                <option disabled selected>Month</option>

                                @for ($j = 1; $j <= 12; $j++)
                                    <option value="{{ $j }}">{{ $j }}</option>
                                @endfor

                                @if ($errors->has('birth_month')) 
                                <p style="color:red;">
                                    @foreach ($errors->get('birth_month') as $errormessage) 
                                    {{ $errormessage }}<br>
                                    @endforeach
                                </p> 
                                @endif

                            </select>
                            <select name="birth_date" class="form-select" id="inputGroupSelect03">
                                <option disabled selected>Date</option>

                                @for ($k = 1; $k <= 31; $k++)
                                    <option value="{{ $k }}">{{ $k }}</option>
                                @endfor

                                @if ($errors->has('birth_date')) 
                                <p style="color:red;">
                                    @foreach ($errors->get('birth_date') as $errormessage) 
                                    {{ $errormessage }}<br>
                                    @endforeach
                                </p> 
                                @endif

                            </select>
                        </div>
                        </div>
                        </div>
                    </div>

                    <div class="form-check formmargin">
                        <div class="form-check ">
                            <div class="row">
                                <label class="col-md-3" >परिचय पत्र<span style="color: #c14949">*</span></label>
                                <div class="form-check row " >
                                    <select name="identity_card" class="form-select" id="inputGroupSelect01">
                                        <option value="" selected disabled>छान्नुहोस्</option>
                                        <option value="election card">मतदाता परिचय पत्र</option>
                                        <option value="driving liscence">सवारी चालक अनुमती पत्र</option>
                                        <option value="passport">राहादानी</option>
                                        <option value="citizenship">नगरिकता</option>
                                    </select>

                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8 offset-sm-3">
                                    @if ($errors->has('identity_card')) 
                                    <p style="color:red;">
                                        @foreach ($errors->get('identity_card') as $errormessage) 
                                        {{ $errormessage }}<br>
                                        @endforeach
                                    </p> 
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-check formmargin">
                        <div class="row">
                            <label class="col-md-3" >परिचय पत्र नम्बर<span style="color: #c14949">*</span></label>
                            <input class="col-md-8" type="text" name="id_number" placeholder="परिचय पत्र नम्बर" value="{{ old('id_number')}}">
                        </div>
                        <div class="row">
                            <div class="col-sm-8 offset-sm-3">
                                @if ($errors->has('id_number')) 
                                <p style="color:red;">
                                    @foreach ($errors->get('id_number') as $errormessage) 
                                    {{ $errormessage }}<br>
                                    @endforeach
                                </p> 
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="form-check formmargin">
                        <div class="form-check ">
                            <div class="row">
                                <label class="col-md-3">तपाईंले के उद्देश्यका लागी यो फारम भर्न लाग्नु भएको हो?<span style="color: #c14949">*</span></label>
                                <div class="row col-md-9">
                                    <div class="form-check">
                                        <input class="form-check-input " type="radio" name="form_reason"  value="membership" id="reason1" checked>
                                        <label class="form-check-label form-pad " for="reason1" >सदस्यता </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="form_reason" id="reason2" value="volunteer" >
                                        <label class="form-check-label form-pad" for="reason2"> स्वयंसेवा </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="form_reason" id="reason3" value="all">
                                        <label class="form-check-label form-pad" for="reason3"> उल्लेखित सबै </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8 offset-sm-3">
                                    @if ($errors->has('form_reason')) 
                                    <p style="color:red;">
                                        @foreach ($errors->get('form_reason') as $errormessage) 
                                        {{ $errormessage }}<br>
                                        @endforeach
                                    </p> 
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-check formmargin">
                        <div class="form-check ">
                            <div class="row">
                                <label class="col-md-3" >हाल रहनुभएको देश<span style="color: #c14949">*</span></label>
                                <div class="form-check row " >
                                    @php(config('country'))
                                    <select name="current_country" class="select2 form-select" >
                                        @foreach(config('country') as $country)
                                            <option value="{{$country}}">{{$country}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8 offset-sm-3">
                                    @if ($errors->has('current_country')) 
                                    <p style="color:red;">
                                        @foreach ($errors->get('current_country') as $errormessage) 
                                        {{ $errormessage }}<br>
                                        @endforeach
                                    </p> 
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>अस्थायी ठेगाना (स्वदेश) </p>
                    <div class="form-check formmargin">
                        <div class="form-check ">
                            <div class="row">
                                <label class="col-md-3">अस्थायी ठेगाना छ?<span style="color: #c14949">*</span></label>
                                <div class="row col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input temp_address " type="radio" name="tem_address" value="1">
                                        <label class="form-check-label form-pad " for="tem_address1" >छ </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input temp_address" type="radio" name="tem_address" value="0" >
                                        <label class="form-check-label form-pad" for="tem_address2"> छैन </label>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8 offset-sm-3">
                                    @if ($errors->has('tem_address')) 
                                    <p style="color:red;">
                                        @foreach ($errors->get('tem_address') as $errormessage) 
                                        {{ $errormessage }}<br>
                                        @endforeach
                                    </p> 
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-check formmargin temp_address_select" style="display: none">
                        <div class="form-check ">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="form-group">
                                        <label>प्रदेश</label>
                                        <select class="form-control province" name="temp_province">
                                            <option value="" selected>Select</option>
                                        </select>
                                        @if ($errors->has('temp_province')) 
                                        <p style="color:red;">
                                            @foreach ($errors->get('temp_province') as $errormessage) 
                                            {{ $errormessage }}<br>
                                            @endforeach
                                        </p> 
                                        @endif
                                    </div>


                                    <div class="form-group">
                                        <label>जिल्ला</label>
                                        <select class="form-control district" name="temp_district">
                                            <option value="" selected>Select</option>
                                        </select>
                                        @if ($errors->has('temp_district')) 
                                        <p style="color:red;">
                                            @foreach ($errors->get('temp_district') as $errormessage) 
                                            {{ $errormessage }}<br>
                                            @endforeach
                                        </p> 
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label>गाउँ/नगर</label>
                                        <select class="form-control municipality" name="temp_municipality">
                                            <option value="" selected>Select</option>
                                        </select>
                                        @if ($errors->has('temp_municipality')) 
                                        <p style="color:red;">
                                            @foreach ($errors->get('temp_municipality') as $errormessage) 
                                            {{ $errormessage }}<br>
                                            @endforeach
                                        </p> 
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label>वार्ड नं.</label>
                                        <select class="form-control ward" name="temp_ward">
                                            <option value="" selected>Select</option>
                                        </select>
                                        @if ($errors->has('temp_ward')) 
                                        <p style="color:red;">
                                            @foreach ($errors->get('temp_ward') as $errormessage) 
                                            {{ $errormessage }}<br>
                                            @endforeach
                                        </p> 
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>टोल</label>
                                        <input class="col-md-8" type="text" name="temp_tole" placeholder="टोल">
                                        @if ($errors->has('temp_tole')) 
                                        <p style="color:red;">
                                            @foreach ($errors->get('temp_tole') as $errormessage) 
                                            {{ $errormessage }}<br>
                                            @endforeach
                                        </p> 
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <p>स्थायी ठेगाना (स्वदेश)</p>
                    </div>

                    <div class="form-check formmargin " >
                        <div class="form-check ">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="form-group">
                                            <label>प्रदेश</label>
                                            <select class="form-control perm-province" name="perm_province">
                                                <option value="">Select</option>
                                            </select>
                                            @if ($errors->has('perm_province')) 
                                            <p style="color:red;">
                                                @foreach ($errors->get('perm_province') as $errormessage) 
                                                {{ $errormessage }}<br>
                                                @endforeach
                                            </p> 
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label>जिल्ला</label>
                                            <select class="form-control perm-district" name="perm_district">
                                                <option value="">Select</option>
                                            </select>

                                            @if ($errors->has('perm_district')) 
                                            <p style="color:red;">
                                                @foreach ($errors->get('perm_district') as $errormessage) 
                                                {{ $errormessage }}<br>
                                                @endforeach
                                            </p> 
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group">
                                            <label>गाउँ/नगर</label>
                                            <select class="form-control perm-municipality" name="perm_municipality">
                                                <option value="">Select</option>
                                            </select>

                                            @if ($errors->has('perm_municipality')) 
                                            <p style="color:red;">
                                                @foreach ($errors->get('perm_municipality') as $errormessage) 
                                                {{ $errormessage }}<br>
                                                @endforeach
                                            </p> 
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label>वार्ड नं.</label>
                                            <select class="form-control perm-ward" name="perm_ward">
                                                <option value="">Select</option>
                                            </select>

                                            @if ($errors->has('perm_ward')) 
                                            <p style="color:red;">
                                                @foreach ($errors->get('perm_ward') as $errormessage) 
                                                {{ $errormessage }}<br>
                                                @endforeach
                                            </p> 
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>टोल</label>
                                            <input class="col-md-8" type="text" name="perm_tole" placeholder="टोल" value="{{ old('perm_tole') }}">
                                            @if ($errors->has('perm_tole')) 
                                            <p style="color:red;">
                                                @foreach ($errors->get('perm_tole') as $errormessage) 
                                                {{ $errormessage }}<br>
                                                @endforeach
                                            </p> 
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


               {{--     <div class="form-check formmargin">
                        <div class="form-check ">
                            <div class="row">
                                <label class="col-md-3">समावेशी समूह<span style="color: #c14949">*</span></label>
                                <div class="row col-md-9">
                                    <div class="form-check formmargin ">
                                        <input class="form-check-input " type="checkbox" name="samabesi"  value="mahila" id="reason1" checked>
                                        <label class="form-check-label form-pad " for="reason1" >महिला </label>
                                    </div>
                                    <div class="form-check formmargin">
                                        <input class="form-check-input" type="checkbox" name="samabesi" id="reason2" value="tharu" >
                                        <label class="form-check-label form-pad" for="reason2"> थारू </label>
                                    </div>
                                    <div class="form-check formmargin">
                                        <input class="form-check-input" type="checkbox" name="samabesi" id="reason3" value="dalit">
                                        <label class="form-check-label form-pad" for="reason3"> दलित</label>
                                    </div>
                                    <div class="form-check formmargin">
                                        <input class="form-check-input" type="checkbox" name="samabesi" id="reason3" value="madhesi">
                                        <label class="form-check-label form-pad" for="reason3"> मधेशी</label>
                                    </div>
                                    <div class="form-check formmargin">
                                        <input class="form-check-input" type="checkbox" name="samabesi" id="reason3" value="khasarya">
                                        <label class="form-check-label form-pad" for="reason3"> खसआर्य</label>
                                    </div>
                                    <div class="form-check formmargin">
                                        <input class="form-check-input" type="checkbox" name="samabesi" id="reason3" value="muslim">
                                        <label class="form-check-label form-pad" for="reason3"> मुस्लिम</label>
                                    </div>
                                    <div class="form-check formmargin">
                                        <input class="form-check-input" type="checkbox" name="samabesi" id="reason3" value="adibasi">
                                        <label class="form-check-label form-pad" for="reason3"> आदिवासी जनजाति</label>
                                    </div>
                                    <div class="form-check formmargin">
                                        <input class="form-check-input" type="checkbox" name="samabesi" id="reason3" value="pichadiyeko">
                                        <label class="form-check-label form-pad" for="reason3">पिछडिएको क्षेत्र</label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>--}}

                    <div class="form-check formmargin">
                        <div class="form-check ">
                            <div class="row">
                                <label class="col-md-3">पेशा<span style="color: #c14949">*</span></label>
                                <div class="row col-md-9">
                                    <div class="form-check form-pad ">
                                        <input class="form-check-input " type="radio" name="occupation" value="krishi" checked>
                                        <label class="form-check-label form-pad " for="reason1" >कृषि </label>
                                    </div>

                                    <div class="form-check form-pad">
                                        <input class="form-check-input" type="radio" name="occupation" value="gharbebastha">
                                        <label class="form-check-label form-pad" for="reason3"> घर-व्यवस्था</label>
                                    </div>
                                    <div class="form-check form-pad">
                                        <input class="form-check-input" type="radio" name="occupation" value="byapar">
                                        <label class="form-check-label form-pad" for="reason3"> उद्यम/व्यापार</label>
                                    </div>
                                    <div class="form-check form-pad">
                                        <input class="form-check-input" type="radio" name="occupation" value="majadur" >
                                        <label class="form-check-label form-pad" for="reason2"> मजदुर </label>
                                    </div>
                                    <div class="form-check form-pad">
                                        <input class="form-check-input" type="radio" name="occupation" value="samaj sewa">
                                        <label class="form-check-label form-pad" for="reason3"> सेवा / समाज सेवा</label>
                                    </div>
                                    <div class="form-check form-pad">
                                        <input class="form-check-input" type="radio" name="occupation" value="bidhyarthi">
                                        <label class="form-check-label form-pad" for="reason3"> बिद्यार्थी</label>
                                    </div>
                                    <div class="form-check form-pad">
                                        <input class="form-check-input" type="radio" name="occupation" value="baidesik rojgar">
                                        <label class="form-check-label form-pad" for="reason3"> वैदेशिक रोजगार</label>
                                    </div>
                                    <div class="form-check form-pad">
                                        <input class="form-check-input" type="radio" name="occupation" value="berojgar">
                                        <label class="form-check-label form-pad" for="reason3">बेरोजगार</label>
                                    </div>
                                    <div class="form-check form-pad">
                                        <input class="form-check-input" type="radio" name="occupation" value="retired">
                                        <label class="form-check-label form-pad" for="reason3">रीटायर्ड / पेन्सन</label>
                                    </div>
                                    <div class="form-check form-pad">
                                        <input class="form-check-input" type="radio" name="occupation" value="other">
                                        <label class="form-check-label form-pad" for="reason3">अन्य</label>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8 offset-sm-3">
                                    @if ($errors->has('occupation')) 
                                    <p style="color:red;">
                                        @foreach ($errors->get('occupation') as $errormessage) 
                                        {{ $errormessage }}<br>
                                        @endforeach
                                    </p> 
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-check formmargin">
                        <div class="row">
                            <label class="col-md-3" >दक्षताको क्षेत्र<span style="color: #c14949">*</span></label>
                            <input class="col-md-8" type="text" name="specialist" placeholder="दक्षताको क्षेत्र" value="{{ old('specialist') }}">
                        </div>
                        <div class="row">
                            <div class="col-sm-8 offset-sm-3">
                                @if ($errors->has('specialist')) 
                                <p style="color:red;">
                                    @foreach ($errors->get('specialist') as $errormessage) 
                                    {{ $errormessage }}<br>
                                    @endforeach
                                </p> 
                                @endif
                            </div>
                        </div>
                        
                    </div>

                    <div class="form-check formmargin">
                        <div class="form-check ">
                            <div class="row">
                                <label class="col-md-3">तपाईंलाई पार्टीको कुन  तहमा रुची छ?<span style="color: #c14949">*</span></label>
                                <div class="row col-md-9">
                                    <div class="form-check formmargin">
                                        <input class="form-check-input" type="checkbox" name="party_level"  value="pradesh">
                                        <label class="form-check-label form-pad" for="reason3">प्रदेश</label>
                                    </div>
                                    <div class="form-check formmargin">
                                        <input class="form-check-input" type="checkbox" name="party_level"  value="jilla">
                                        <label class="form-check-label form-pad" for="reason3"> जिल्ला</label>
                                    </div>
                                    <div class="form-check formmargin">
                                        <input class="form-check-input" type="checkbox" name="party_level"  value="sthaniye">
                                        <label class="form-check-label form-pad" for="reason3">स्थानिय</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8 offset-sm-3">
                                    @if ($errors->has('party_level')) 
                                    <p style="color:red;">
                                        @foreach ($errors->get('party_level') as $errormessage) 
                                        {{ $errormessage }}<br>
                                        @endforeach
                                    </p> 
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-check formmargin " >
                        <div class="form-check ">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="form-group">
                                            <label>तपाईं पार्टीमा कतिको समय दिन सक्नु हुन्छ?</label>
                                            <select class="form-control" name="time_duration">
                                                <option selected disabled value="">Select</option>
                                                <option value="dainik">दैनिक</option>
                                                <option value="haptama keisamaye">हप्तामा केही समय</option>
                                                <option value="15 dinma keisamaye">१५ दिनमा केही समय</option>
                                                <option value="mahinama keisamaye">महिनामा केही समय</option>
                                                <option value="nirnaye garekochaina">अहिले निर्णय गरेको छैन</option>
                                                <option value="samaye dinasakdina">समय दिन सक्दिन</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8 offset-sm-3">
                                    @if ($errors->has('time_duration')) 
                                    <p style="color:red;">
                                        @foreach ($errors->get('time_duration') as $errormessage) 
                                        {{ $errormessage }}<br>
                                        @endforeach
                                    </p> 
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-check formmargin">
                        <div class="row">
                            <label class="col-md-3" >फोटो छान्नुहोस्<span style="color: #c14949">*</span></label>
                            <input class="col-md-8" type="file" name="picture" placeholder="फोटो छान्नुहोस्" value="{{ old('picture') }}">
                        </div>
                        <div class="row">
                            <div class="col-sm-8 offset-sm-3">
                                @if ($errors->has('picture')) 
                                <p style="color:red;">
                                    @foreach ($errors->get('picture') as $errormessage) 
                                    {{ $errormessage }}<br>
                                    @endforeach
                                </p> 
                                @endif
                            </div>
                        </div>
                    </div>



                    <br/>
                    <br/>
                    <br/>
                    <button type="submit" value="सदस्यता लिनुहोस्">सदस्यता लिनुहोस्</button>
                </form>
            <div class="col-md-2"></div>

        </div>
    </section>


@endsection

@push('styles')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/press.css')}}" class="">
@endpush

@push('scripts')

{{--    location--}}
<script type="text/javascript">

    $("input[type='radio']").click(function(){
        var radioValue = $("input[name='tem_address']:checked").val();
        if(radioValue == 1){
            $('.temp_address_select').css('display','block');
        }
        if(radioValue == 0){
            $('.temp_address_select').css('display','none');

        }
    });

        $('.province').find("option:gt(0)").remove();
        $('.district').find("option:gt(0)").remove();
        $('.municipality').find("option:gt(0)").remove();
        $('.ward').find("option:gt(0)").remove();

        $.ajax({
            url: '{{route('province')}}',
            type: 'GET',
            dataType: 'json',
        }).done(function (data) {
            var select = $('.province');
            var perm_select = $('.perm-province');
            $.each(data, function (key, value) {
                select.append('<option value=' + key + '>' + value + '</option>');
                perm_select.append('<option value=' + key + '>' + value + '</option>');
            });
        });

        $('.province').on('change', function () {
            $('.district').find("option:gt(0)").remove();
            $('.municipality').find("option:gt(0)").remove();
            $('.ward').find("option:gt(0)").remove();
            var selected = $(this).find(":selected").attr('value');
            $.ajax({
                url: '{{route('district')}}?province_id='+ selected,
                // url: '/district?province_id='+ selected,
                type: 'GET',
                dataType: 'json',
            }).done(function (data) {
                var select = $('.district');
                $.each(data, function (key, value) {
                    select.append('<option value=' + key + '>' + value + '</option>');
                });
            })
        });

        $('.district').on('change', function () {
            $('.municipality').find("option:gt(0)").remove();
            $('.ward').find("option:gt(0)").remove();
            var selected = $(this).find(":selected").attr('value');
            $.ajax({
                url: '{{route('municipality')}}?district_id=' + selected,
                type: 'GET',
                dataType: 'json',
            }).done(function (data) {
                var select = $('.municipality');
                $.each(data, function (key, value) {
                    select.append('<option value=' + key + '>' + value + '</option>');
                });
            })
        });

        $('.municipality').on('change', function () {
            var selected = $(this).find(":selected").attr('value');
            $('.ward').find("option:gt(0)").remove();
            $.ajax({
                url: '{{route('ward')}}?municipality_id=' + selected,
                type: 'GET',
                dataType: 'json',
            }).done(function (data) {
                var select = $('.ward');
                $.each(data, function (key, value) {
                    select.append('<option value=' + key + '>' + value + '</option>');
                });
            })
        });

        //permanent address

    $('.perm-province').on('change', function () {
        $('.perm-district').find("option:gt(0)").remove();
        $('.perm-municipality').find("option:gt(0)").remove();
        $('.perm-ward').find("option:gt(0)").remove();
        var selected = $(this).find(":selected").attr('value');
        $.ajax({
            url: '{{route('district')}}?province_id='+ selected,
            type: 'GET',
            dataType: 'json',
        }).done(function (data) {
            var select = $('.perm-district');
            $.each(data, function (key, value) {
                select.append('<option value=' + key + '>' + value + '</option>');
            });
        })
    });

    $('.perm-district').on('change', function () {
        $('.perm-municipality').find("option:gt(0)").remove();
        $('.perm-ward').find("option:gt(0)").remove();
        var selected = $(this).find(":selected").attr('value');
        $.ajax({
            url: '{{route('municipality')}}?district_id=' + selected,
            type: 'GET',
            dataType: 'json',
        }).done(function (data) {
            var select = $('.perm-municipality');
            $.each(data, function (key, value) {
                select.append('<option value=' + key + '>' + value + '</option>');
            });
        })
    });

    $('.perm-municipality').on('change', function () {
        var selected = $(this).find(":selected").attr('value');
        $('.perm-ward').find("option:gt(0)").remove();
        $.ajax({
            url: '{{route('ward')}}?municipality_id=' + selected,
            type: 'GET',
            dataType: 'json',
        }).done(function (data) {
            var select = $('.perm-ward');
            $.each(data, function (key, value) {
                select.append('<option value=' + key + '>' + value + '</option>');
            });
        })
    });
</script>
{{--end ocation--}}




@endpush
