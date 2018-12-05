<header class="header header-fixed header-fixed-on-mobile" data-bkg-threshold="100" data-compact-threshold="100">
    <div class="header-inner">
        <div class="row nav-bar">
            <div class="column width-12 nav-bar-inner">
                <div class="logo">
                    <div class="logo-inner">
                        <a href="/"><img src={{ asset("images/logo-dark.png") }} alt="Tutor Services" /></a>
                        <a href="/"><img src={{ asset("images/logo.png") }} alt="Tutor Services" /></a>
                    </div>
                </div>
                <nav class="navigation nav-block secondary-navigation nav-right">
                    <ul>
                        <li>
                            <!-- Search -->
                            <a href="#search-modal" data-content="inline" data-toolbar="" data-aux-classes="tml-search-modal" data-modal-mode data-modal-width="1000" data-lightbox-animation="fade" data-nav-exit="false" class="lightbox-link nav-icon">
                                <span class="icon-magnifying-glass"></span>
                            </a>
                        </li>
                        <li class="aux-navigation hide">
                            <!-- Aux Navigation -->
                            <a href="#" class="navigation-show side-nav-show nav-icon">
                                <span class="icon-menu"></span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <nav class="navigation nav-block primary-navigation nav-right">
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
                        <li><a href="/inbox">Messages</a></li>
                        
                        <li><a href="#">Requests</a></li>
                        <li>
                            <a href="{{ route('gigs.index') }}">Gigs</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('gigs.index') }}">Gigs</a>
                                </li>
                                <li>
                                    <a href="{{ route('gigs.create') }}">Create New</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li></li>
                        <li>
                            <a href="#" class="contains-sub-menu profile-image">
                            <img src="http://placehold.it/30x30" class="img-circle special-img"></a>
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
            </div>
        </div>
    </div>
</header>