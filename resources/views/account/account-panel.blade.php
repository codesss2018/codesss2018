<div class="panel-body list-group">
    <ul class="list-group list-group-menu">
        <li class="list-group-item @if($activepage=='dash')active @endif"><a class="link-text-color" href="{{ asset('account') }}">Dashboard</a></li>
        <li class="list-group-item @if($activepage=='course')active @endif"><a class="link-text-color" href="{{ route('my-courses') }}">My Courses</a></li>
        <li class="list-group-item @if($activepage=='prof')active @endif"><a class="link-text-color" href="{{ route('private-profile') }}">Profile</a></li>
        <li class="list-group-item"><a class="link-text-color" href="/logout"><span>Logout</span></a></li>
    </ul>
</div>
