@extends('layouts/base')

@section('content')
    <div class="slider_bg"><!-- start slider -->
    	<div class="container">
    		@include('commons/slider')
    	</div>
    </div><!-- end slider -->
    <div class="main_bg"><!-- start main -->
    	<div class="container" style="text-align:center">
            <br/><br/><br/><br/>
            <h2 class="text-red-text">Some Interesting Courses Tackled at <i>CODE-S</i></h2>
            <br/><br/><br/><br/>
    		@include('commons/courses')
    	</div>
    </div><!-- end main -->
    <div class="main_btm"><!-- start main_btm -->
    	<div class="container">
    		<div class="main row">
    			<div class="col-md-6 content_left">
    				<!--<img src="images/pic1.jpg" alt="" class="img-responsive">-->
    			</div>
    			@include('commons/motivation')
    		</div>
            <div class="container" style="text-align:center">
                <!--<br/><br/><br/><br/>
                <h2 class="text-red-text">Comments and remarks from past students of <i>CODE-S</i></h2>
                <br/><br/><br/><br/>-->
    			{{-- @include('commons/remarks') --}}
            </div>
    	</div>
    </div>
@endsection
