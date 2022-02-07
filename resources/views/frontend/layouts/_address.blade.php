@foreach($address as $item)
    <!--col-->
    <div class="col-lg-4 mt-4 mb-5 ">
        <div class="contact-information">
            <h4>{{$item->location}}</h4>

            <h5 class="">{{$item->name}}</h5>
            <p>
                <i class="icofont-location-pin"></i>
                {{$item->municipality}}, Ward No. {{$item->ward_no}}, {{$item->district}}
            </p>

            <p class="">
                <i class="icofont-phone"></i>
                {{$item->phone}}
            </p>

            <p class="">
                <i class="icofont-email"></i>
                {{$item->email}}
            </p>
        </div>
    </div>
@endforeach
