<nav class="nav-menu float-right d-none d-lg-block ">
    <ul>
        <li class="{{request()->is('/') ? 'active' : ''}}"><a href="{{route('home')}}">गृहपृष्ठ</a></li>
        <li class="drop-down {{request()->is('news-event') || request()->is('about-us') || request()->is('message-from-chairman') || request()->is('message-from-principle') ? 'active' : ''}}">
            <a href="{{route('about.us')}}">हाम्रो बारेमा </a>
            
            
            <ul>

{{--                <li><a href="{{route('our.team')}}">सांगठनिक संरचना</a></li>--}}
{{--                <li><a href="{{route('message.chairman')}}">केन्द्रीय विभाग प्रमुख</a></li>--}}
{{--                <!--<li><a href="{{route('message.principle')}}"> Message from Principal</a></li>-->--}}
                <li><a href="{{route('news.event')}}">प्रेस विज्ञप्ति</a></li>
                 <li><a href="press-release">सूचना/ समाचार</a></li>
                  <li><a href="rules">पार्टी नियमावली</a></li>
                   <li><a href="#">खुला बहस</a></li>
                   <li><a href="#">अनलाइन संग्रहालय</a></li>
                   <li><a href="#">अनलाइन लाइब्रेरी</a></li>

            </ul>
        </li>
        <li class="{{request()->is('office') ? 'active' : ''}}"><a href="{{route('office')}}">कार्यालय</a></li>
        <li class="{{request()->is('join/membership') ? 'active' : ''}}"><a href="{{route('join.membership')}}">सदस्य</a></li>
        

        <li class="drop-down"><a href="#">ग्यालरी </a>
            <ul>
                <li><a href="{{route('photo.gallery')}}">फोटो ग्यालरी</a></li>
                <li><a href="{{route('video.gallery')}}">भिडियो ग्यालरी </a></li>

            </ul>
        </li>

        <li class="{{request()->is('contact-us') ? 'active' : ''}}"><a href="{{route('contact.us')}}">सम्पर्क</a></li>

    </ul>
</nav><!-- .nav-menu -->
