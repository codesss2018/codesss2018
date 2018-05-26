@extends('account/account')

@section('main')
    @switch(Session::get('user_mode'))
        @case(1)
            @include('account/student-course-list')
        @break
        @case(2)
            @include('account/instructor-course-list')
        @break
    @endswitch
@endsection
