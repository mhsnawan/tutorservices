<header class="header header-fixed header-fixed-on-mobile" data-bkg-threshold="100" data-compact-threshold="100">
    <div class="header-inner">
        <div class="row nav-bar">
            <div class="column width-12 nav-bar-inner">
                <div class="logo">
                    <div class="logo-inner">
                        <a href="/"><img src="images/logo-dark.png" alt="Tutor Services" /></a>
                        <a href="/"><img src="images/logo.png" alt="Tutor Services" /></a>
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
                        <li>
                            <a href="/account">Dashboard</a>
                        </li>
                        <li>
                            <a href="/post-tution">Post Tution</a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                            </form>
                        </li> 
                        
                    @endguest  
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>