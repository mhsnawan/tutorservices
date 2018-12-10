<div class="side-navigation-scroll-pane">
    <div class="side-navigation-inner">
        <div class="side-navigation-header">
            <div class="navigation-hide side-nav-hide">
                <a href="#">
                    <span class="icon-cancel medium"></span>
                </a>
            </div>
        </div>
        <nav class="side-navigation center">
            <ul>
                <li>
                    <a href="/blog">Blog</a>
                </li>
                @guest

                <li>
                    <a href="{{ route('login') }}">Sign In</a>
                </li>
                <li>
                    <a href="{{ route('register') }}">Join</a>
                </li>
                @else

                <li><a href="{{ route('courses') }}">Courses</a></li>
                
                @if (Auth::user()->role == 1)
                <li><a href="{{ route('enrolledin') }}">Enrolled In</a></li>
                @endif
                @if(Auth::user()->role == 2)
                <li><a  href="{{ route('pending.request') }}" >Requests</a></li>
                <li>
                    <a class="contains-sub-menu">Enrolled Students</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ route('all-enrolled-students') }}">All Students</a>
                        </li>
                        <li>
                            <a href="{{ route('gigs.create') }}">Student by Course</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('gigs.index') }}">Tuitions</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ route('gigs.index') }}">Tuitions</a>
                        </li>
                        <li>
                            <a href="{{ route('gigs.create') }}">Create New</a>
                        </li>
                    </ul>
                </li>
                @endif
                <li><a href="/inbox">Messages</a></li>
                <li></li>
                <li>
                    <a style="" href="#" class="contains-sub-menu profile-image">
                        <img style="width:32px;height:32px;position:inline;top:25px;left:10px;border-radius:50%;" src="/storage/{{ Auth::user()->profile_img }}" class="img-circle special-img">
                        <i class="fa fa-btn fa-user"></i>{{ Auth::user()->name }}
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="/profile">My Profile</a>
                        </li>
                        <li>
                            <a href="/account">Account Setting</a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                            </form>
                        </li>
                    </ul>
                </li>
                <li></li>
                <li></li>
                @endguest
            </ul>
        </nav>
        <div class="side-navigation-footer center">
            <p class="copyright no-margin-bottom">&copy; 2018 ONLINE TUTOR.</p>
        </div>
    </div>
</div>