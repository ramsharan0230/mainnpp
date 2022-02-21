<div id="left-sidebar" class="sidebar">
    <div class="sidebar-scroll">
        <div class="user-account">
            <img src="{{asset('backend/assets/images/user.png')}}" class="rounded-circle user-photo" alt="User Profile Picture">
            <div class="dropdown">
                <span>Welcome,</span>
                <a href="javascript:void(0);" class="user-name" ><strong>{{Auth('admin')->user()->name}}</strong></a>

            </div>
        </div>

        <nav class="sidebar-nav">
            <ul class="main-menu metismenu">
                <li class="{{(\Illuminate\Support\Facades\Request::is('admin')==1) ? 'active' : ''}}"><a href="{{route('admin')}}"><i class="icon-grid"></i><span>Dashboard</span></a></li>


                <li class="{{(\Illuminate\Support\Facades\Request::is('admin/banner*')==1) ? 'active' : ''}}"><a href="javascript:void(0);" class="has-arrow"><i class="icon-picture"></i><span>Banner Management</span> </a>
                    <ul>
                        <li><a href="{{route('banner.index')}}">All Banners</a></li>
                        <li><a href="{{route('banner.create')}}">Add Banner</a></li>
                    </ul>
                </li>

                <li class="{{request()->is('admin/principle-message') || request()->is('admin/chairman-message') ? 'active' : ''}}"><a href="javascript:void(0);" class="has-arrow"><i class="icon-home"></i><span>Home Section</span> </a>
                    <ul>
                        <li><a href="{{route('welcome')}}">Welcome Section</a></li>
{{--                        <li><a href="{{route('principle.message')}}">Principle Message</a></li>--}}
                        <li><a href="{{route('chairman.message')}}">Chairman Message</a></li>
                         <li><a href="{{route('goal.index')}}">Press Bigyapti</a></li>
                         <li><a href="{{route('rule.index')}}">Niyam</a></li>
{{--                         <li><a href="{{route('our_affilation.index')}}">Our Affilation </a></li>--}}
{{--                        <li><a href="{{route('our_concern.index')}}">Our Concern </a></li>--}}


                    </ul>
                </li>

                {{-- office section --}}
                <li class="{{request()->is('admin/offices') ? 'active' : ''}}"><a href="javascript:void(0);" class="has-arrow"><i class="icon-home"></i><span>Office Section</span> </a>
                    <ul>
                        <li><a href="{{route('offices.index')}}">Offices</a></li>
                        <li><a href="{{route('offices.create')}}">Add Office</a></li>
                    </ul>
                </li>
                {{-- office section endd --}}

                {{-- Online Library --}}
                <li class="{{request()->is('admin/online-libraries') ? 'active' : ''}}"><a href="javascript:void(0);" class="has-arrow"><i class="icon-home"></i><span>Online Library</span> </a>
                    <ul>
                        <li><a href="{{route('online-libraries.index')}}">Lists</a></li>
                        <li><a href="{{route('online-libraries.create')}}">Add Library</a></li>
                    </ul>
                </li>
                {{-- end Online Library --}}

                 {{-- Online Library --}}
                 <li class="{{request()->is('admin/history') ? 'active' : ''}}"><a href="javascript:void(0);" class="has-arrow"><i class="icon-home"></i><span>History</span> </a>
                    <ul>
                        <li><a href="{{route('history.index')}}">Index</a></li>
                    </ul>
                </li>
                {{-- end Online Library --}}

{{--                <li class="{{request()->is('admin/news*') || request()->is('admin/event') ? 'active' : ''}}"><a href="javascript:void(0);" class="has-arrow"><i class="icon-home"></i><span>News And Events</span> </a>--}}
{{--                    <ul>--}}
{{--                        <li><a href="{{route('news.index')}}">News</a></li>--}}
{{--                        <li><a href="{{route('events.index')}}">Events</a></li>--}}


{{--                    </ul>--}}
{{--                </li>--}}


                <li  class="{{request()->is('admin/news/*') ?'active':''}} "><a href="{{route('news.index')}}"><i class="icon-paper-clip"></i><span>News</span> </a></li>


                <li class="{{ request()->is('admin/about') || request()->is('admin/founder-message') || request()->is('admin/history*') || request()->is('admin/mission-vision') ? 'active' : ''}}"><a href="javascript:void(0);" class="has-arrow"><i class="icon-info"></i><span>About Us Section</span> </a>
                    <ul>
                        <li><a href="{{route('about')}}">About us Section</a></li>
{{--                        <li><a href="{{route('success-story.index')}}">Success Story Section</a></li>--}}
{{--                        <li><a href="{{route('why.samata.school')}}">Why Samata School</a></li>--}}


                    </ul>
                </li>

{{--                <li class="{{ request()->is('admin/admission') || request()->is('admin/founder-message') || request()->is('admin/history*') || request()->is('admin/mission-vision') ? 'active' : ''}}"><a href="javascript:void(0);" class="has-arrow"><i class="icon-info"></i><span>Admission Section</span> </a>--}}
{{--                    <ul>--}}
{{--                        <li><a href="{{route('about')}}">About Us Section</a></li>--}}
{{--                        <li><a href="{{route('admission.edit')}}">Admission Section</a></li>--}}

{{--                    </ul>--}}
{{--                </li>--}}

                <li class="{{(\Illuminate\Support\Facades\Request::is('admin/address*')==1) ? 'active' : ''}}"><a href="javascript:void(0);" class="has-arrow"><i class="icon-users"></i><span>Address Management</span> </a>
                    <ul>
                        <li><a href="{{route('address.index')}}">All Address</a></li>
                        <li><a href="{{route('address.create')}}">Add Address</a></li>
                    </ul>
                </li>

                <li class="{{(\Illuminate\Support\Facades\Request::is('admin/gallery*')==1) ? 'active' : ''}}"><a href="javascript:void(0);" class="has-arrow"><i class="icon-picture"></i><span>Gallery</span> </a>
                    <ul>
                        <li><a href="{{route('gallery.index')}}">All Gallery</a></li>
                        <li><a href="{{route('photo.index')}}">All Photo</a></li>

                        <li><a href="{{route('video.index')}}">All Video</a></li>
                    </ul>
                </li>



{{--                <li class="{{(\Illuminate\Support\Facades\Request::is('admin/product*')==1) ? 'active' : ''}}"><a href="javascript:void(0);" class="has-arrow"><i class="icon-star"></i><span>Testimonial</span> </a>--}}
{{--                    <ul>--}}
{{--                        <li><a href="{{route('testimonial.index')}}">All Testimonials</a></li>--}}
{{--                        <li><a href="{{route('testimonial.create')}}">Add Testimonial</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                  <li class="{{(\Illuminate\Support\Facades\Request::is('admin/staff*')==1) ? 'active' : ''}}"><a href="javascript:void(0);" class="has-arrow"><i class="icon-user"></i><span>Team</span> </a>--}}
{{--                    <ul>--}}
{{--                        <li><a href="{{route('staff.index')}}">All Team</a></li>--}}
{{--                        <li><a href="{{route('staff.create')}}">Add Team</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li class="{{(\Illuminate\Support\Facades\Request::is('admin/faq*')==1) ? 'active' : ''}}"><a href="javascript:void(0);" class="has-arrow"><i class="icon-question"></i><span>FAQ</span> </a>--}}
{{--                    <ul>--}}
{{--                        <li><a href="{{route('faq.index')}}">All FAQs</a></li>--}}
{{--                        <li><a href="{{route('faq.create')}}">Add FAQ</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li class=""><a href="javascript:void(0);" class="has-arrow"><i class="icon-user-follow"></i><span>Vacancy Management</span> </a>--}}
{{--                    <ul>--}}
{{--                        <li><a href="{{route('vacancy.index')}}">All Vacancies</a></li>--}}
{{--                        <li><a href="{{route('applicants.index')}}">All Vacancy Applications</a></li>--}}
{{--                        <li><a href="{{route('resume.index')}}">All Resumes</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
                <li class=""><a href="{{route('member.list')}}" class="has-arrow"><i class="icon-user-follow"></i><span>Members</span> </a>

                </li>

{{--                <li class="{{(\Illuminate\Support\Facades\Request::is('admin/shipping*')==1) ? 'active' : ''}}"><a href="javascript:void(0);" class="has-arrow"><i class="icon-picture"></i><span>Blog Management</span> </a>--}}
{{--                    <ul>--}}
{{--                        <li><a href="{{route('blog-category.index')}}">All Blog Categories</a></li>--}}
{{--                        <li><a href="{{route('blog-tag.index')}}">All Blog Tags</a></li>--}}
{{--                        <li><a href="{{route('blog.index')}}">All Blogs</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

                <li class="mb-5 {{(\Illuminate\Support\Facades\Request::is('admin/setting*')==1) ? 'active' : ''}}"><a href="javascript:void(0);" class="has-arrow"><i class="icon-settings"></i><span>Setup & Configuration</span> </a>
                    <ul>
                        <li><a href="{{route('settings')}}">General Setting</a></li>
                        <li><a href="{{route('smtp.settings')}}">SMTP Setting</a></li>
                        <li><a href="{{route('donate.fund')}}">Donated Fund</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
