@extends('account/account')

@section('main')
    @switch(Session::get('user_mode'))
        @case(1)
            @include('account/student-dashboard')
        @break
        @case(2)
            @include('account/instructor-dashboard')
        @break
        @case(3)
            @include('account/admin-dashboard')
        @break
    @endswitch
@endsection
