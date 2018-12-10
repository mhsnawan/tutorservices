<ul class="tab-nav">
    <li class=@if(Request::path() == 'account') "active" @else "" @endif><a href="{{ route('account.index') }}">Personal Info</a></li>
    <li><a href="{{ route('edinfo.index') }}">Educational Info</a></li>
    @if (Auth::user()->role == 2)
    <li><a href="{{ route('experience.index') }}">Employment History</a></li>
    <li><a href="./certification">Certifications</a></li>
    <li class="{{ Request::path() == 'availability' ? 'active' : '' }}"><a href="./availability">Availablity</a> </li>
    <li class="{{ Request::path() == 'charges' ? 'active' : '' }}"><a href="./charges">Charges</a></li>
    @endif
</ul>
