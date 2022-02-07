<nav class="navbar navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-btn">
            <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
        </div>

        <div class="navbar-brand p-1" style="margin:auto">
            <a href="{{route('admin')}}">
                @if(get_setting('logo') !=null)
                    <img src="{{ asset(get_setting('logo')) }}" alt="Logo" class="img-responsive logo"></a>
                @else
                    <img src="{{ asset(Helper::defaultLogo()) }}" alt="Logo" class="img-responsive logo"></a>
                @endif
        </div>

        <div class="navbar-right">
            <div id="navbar-menu">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{route('home')}}" target="_blank" class="icon-menu d-none d-sm-block d-md-none d-lg-block" data-toggle="tooltip" data-title="Home" data-placement="bottom"><i class="icon-home"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="{{route('contact.message')}}" style="position: relative"  class=" icon-menu" ><i class="icon-envelope"></i>
                                 @if(\App\Models\ContactMessage::where('seen','no')->count()>0)
                                    <span style="position: absolute;top:4px;" class="badge badge-danger">{{\App\Models\ContactMessage::where('seen','no')->count()}}</span>
                                @endif
                            </a>
                    </li>
                    <li class="dropdown">
                        <a href="{{route('settings')}}" class=" icon-menu" ><i class="icon-settings"></i></a>
                    </li>
                    <li>
                        <a class="dropdown-item icon-menu" href="{{ route('admin.logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="icon-login"></i>
                        </a>

                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
