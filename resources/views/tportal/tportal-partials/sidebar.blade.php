<ul class="tab-nav">
    <li class="{{ Request::path() == 'account' ? 'active' : '' }}"><a href="{{ route('account.index') }}">Personal Info</a></li>
    <li class="{{ Request::path() == 'edinfo' ? 'active' : '' }}"><a href="{{ route('edinfo.index') }}">Educational Info</a></li>
    @if ($user['role']=='2')
    <li class="{{ Request::path() == 'experience' ? 'active' : '' }}"><a href="{{ route('experience.index') }}">Employment History</a></li>
    <li class="{{ Request::path() == 'certification' ? 'active' : '' }}"><a href="./certification">Certifications</a></li>
    <li class="{{ Request::path() == 'availability' ? 'active' : '' }}"><a href="./availability">Availablity</a> </li>
    <li class="{{ Request::path() == 'charges' ? 'active' : '' }}"><a href="./charges">Charges</a></li>
    @endif
</ul>
