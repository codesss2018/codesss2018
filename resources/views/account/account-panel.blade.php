<div class="panel-body list-group">
    <ul class="list-group list-group-menu">
        <li class="list-group-item @if($activepage=='dash')active @endif"><a class="link-text-color" href="{{ asset('account') }}">Dashboard</a></li>
        @switch(Session::get('user_mode'))
            @case(3)
                <li class="list-group-item @if($activepage=='userM')active @endif"><a class="link-text-color" href="{{ route('user-management') }}">User Management</a></li>
            @break
            @default
                <li class="list-group-item @if($activepage=='course')active @endif"><a class="link-text-color" href="{{ route('my-courses') }}">My Courses</a></li>
        @endswitch
        <li class="list-group-item @if($activepage=='prof')active @endif"><a class="link-text-color" href="{{ route('private-profile') }}">Profile</a></li>
        <li class="list-group-item"><a class="link-text-color" href="/logout"><span>Logout</span></a></li>
    </ul>
</div>
