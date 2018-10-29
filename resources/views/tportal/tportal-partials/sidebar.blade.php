<ul class="tab-nav">
    <li><a href="{{ route('account.index') }}">Personal Info</a></li>
    <li><a href="{{ route('edinfo.index') }}">Educational Info</a></li>
    @if ($user['role']=='2')
    <li><a href="{{ route('experience.index') }}">Experience</a></li>
    <li><a href="./certification">Certification</a></li>
    <li><a href="./availability">Availablity</a> </li>
    <li><a href="./rate">Rate</a></li>
    @endif
</ul>
