@extends('account/app')

@section('content')
    @switch(Session::get('user_mode'))
        @case(1)
            @include('account/student-app')
        @break
        @case(2)
            @include('account/instructor-app')
        @break
    @endswitch
@endsection
