<div class="js-cookie-consent cookie-consent">
    <div class="container">
        <div class="row mt-1">
            <div class="col-lg-8">
                <span class="cookie-consent__message">
       <div class="row">
          <div class="col-lg-2 pr-0">
            <img src="{{asset('frontend/assets/img/cookies image2.PNG')}}" alt="" class="img-fluid ml-3">
          </div>
          <div class="col-lg-10 pl-0">
            <p class="" style="line-height: 26px;">

              We use cookies on this website to distinguish you from other users.<br>
              For more information, please see our
                <a href="" target="_blank">Cookie Policy</a>.

            </p>


          </div>
        </div>
    </span>
            </div>
            <div class="col-lg-4">
                <button class="js-cookie-consent-agree cookie-consent__agree btn btn-primary">
                    {{ trans('cookieConsent::texts.agree') }}
                </button>
                <button type="button" style="font-size: 40px ; color: blue;" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>

</div>
