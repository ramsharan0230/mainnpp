@extends('frontend.layouts.master')

@section('content')


    <!-- ======= Hero Section ======= -->
    <div id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="d-flex justify-content-center">
                <h1 class="">सम्पर्क</h1>
            </div>
        </div>
    </div><!-- End Hero -->

    <main id="main">

        <section class="contact-location">
            <div class="container">
                <div><h4>नेश्नलिस्ट पिपल्स पार्टी
</h4></div>
                <div class="row" id="location" style="margin-left: 16px;">
                    
                    <p>
केन्द्रीय कार्यालय,
काठमाडौं, नेपाल<br>
<strong>फोन: </strong>+977-1-4425877 <br>
<strong>मोबाइल </strong>: +977 9869086311 <br>
<strong>ईमेल:</strong> info@nppnepal.org<br>
 <strong>वेबसाईट:</strong> www.nppnepal.org<br>
</p>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <form class="contact-form border p-4">
                            <h3 class="text-secondary">Send us a Message</h3>
                            <h5 class="mb-4 text-secondary">
                                Write in to us if you have anything to ask to us or any suggestions
                            </h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="sr-only" for="inlineFormInputGroupUsername">Full name</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend ">
                                                <div class="input-group-text icon-prepend">
                                                    <i class="ri-user-line"></i>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" id="inlineFormInputGroupUsername"
                                                   placeholder="Full name">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="sr-only" for="inlineFormInputGroupUsername">Email</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend ">
                                                <div class="input-group-text icon-prepend">
                                                    <i class="ri-mail-line"></i>
                                                </div>
                                            </div>
                                            <input type="email" class="form-control" id="inlineFormInputGroupUsername"
                                                   placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="sr-only" for="inlineFormInputGroupUsername">Phone</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend ">
                                                <div class="input-group-text icon-prepend">
                                                    <i class="ri-mail-line"></i>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" id="inlineFormInputGroupUsername"
                                                   placeholder="Phone">
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="sr-only" for="inlineFormInputGroupUsername">Subject</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend ">
                                                <div class="input-group-text icon-prepend">
                                                    <i class="ri-mail-line"></i>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" id="inlineFormInputGroupUsername"
                                                   placeholder="Subject">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">

                <textarea class="form-control" name="message" rows="5" data-rule="required"
                          data-msg="Please write something for us" placeholder="Message"></textarea>

                            </div>

                            <button type="submit" class="btn submit-btn btn-info">
                                Send
                                <i class="ri-send-plane-fill"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>


@endsection

@push('styles')
    <link href="{{asset('frontend/assets/css/base.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/history.css')}}" rel="stylesheet">
    {{--    <link href="{{asset('frontend/assets/css/home.css')}}" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{asset('frontend/assets/css/contactus.css')}}" class="">
@endpush

@push('scripts')
    <script>
        $('#location').change(function () {
            var location = $(this).val();

            $.ajax({
                url: '{{route('get.location')}}',
                data: {
                    _token: "{{csrf_token()}}",
                    location: location,
                },
                type: 'post',
                dataType: 'JSON',
                success: function (response) {
                    if (response.status) {
                        $('#location').html(response['address_render']);
                    } else {
                        alert('error');
                    }
                }

            })
        })

    </script>
@endpush
