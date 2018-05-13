@extends('layouts/base')

@section('content')
<div class="main_bg"><!-- start main -->
	<div class="container">
		<div class="technology row">
			<h2>Projects Built By <i>CODE-S</i></h2>
            
			@include('achievements/projects')
		</div>
	</div>
</div><!-- end main -->
@endsection
