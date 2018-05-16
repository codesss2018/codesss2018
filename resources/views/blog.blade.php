@extends('layouts/base')

@section('content')
    <div class="main_bg"><!-- start main -->
    	<div class="container">
    		<div class="main row">
    			<div class="col-md-8 blog_left">
    				<h2 class="text-red-text">No Blog Posts Yet</div>
    			</div>
    			<div class="col-md-4 blog_right">
    				<!-- start social_network_likes -->
    				<!-- Adds -->

    				<!-- Tags -->
    				<div class="news_letter">
    					<h4>news letter</h4>
    						<form>
    							<span><input type="text" placeholder="Your email address"></span>
    							<span  class="pull-right fa-btn btn-1 btn-1e"><input type="submit" value="subscribe"></span>
    						</form>
    				</div>
    			</div>
    			<div class="clearfix"></div>
    		</div>
    	</div>
    </div><!-- end main -->
@endsection
