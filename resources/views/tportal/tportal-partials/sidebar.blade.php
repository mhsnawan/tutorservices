<ul class="tab-nav">
    <li class="{{ Request::path() == 'account' ? 'active' : '' }}"><a href="{{ route('account.index') }}">Personal Info</a></li>
    <li {{ (Request::is('edinfo') ? 'class=active' : '') }}><a href="{{ route('edinfo.index') }}">Educational Info</a></li>
    @if (Auth::user()->role == 2)
    <li class="{{ Request::path() == 'experience' ? 'active' : '' }}"><a href="{{ route('experience.index') }}">Employment History</a></li>
    <li class="{{ Request::path() == 'certification' ? 'active' : '' }}"><a href="./certification">Certifications</a></li>
    <li class="{{ Request::path() == 'availability' ? 'active' : '' }}"><a href="./availability">Availablity</a> </li>
    <li class="{{ Request::path() == 'charges' ? 'active' : '' }}"><a href="./charges">Charges</a></li>
    @endif
</ul>
