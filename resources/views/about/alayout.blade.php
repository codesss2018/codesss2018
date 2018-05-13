@extends('layouts/base')

@section('content')
    <div class="main_bg"><!-- start main -->
    	<div class="container">
    		<div class="about row">
    			<div class="col-md-4 blog_left">

    				@include('about/navbout')

    			</div>
                <div class="col-md-8 blog_right">
                    @yield('asection')
                    <div class="clearfix"></div>
    		</div>
    	</div>
    </div><!-- end main -->
@endsection
