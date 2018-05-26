@extends('account/app')

@section('content')
    @switch(Session::get('user_mode'))
        @case(1)
            @include('account/student-session-course-list')
        @break
        @case(2)
            @include('account/instructor-session-course-list')
        @break
    @endswitch
@endsection
