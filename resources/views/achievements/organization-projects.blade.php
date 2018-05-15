@extends('layouts/base')

@section('content')
<div class="main_bg"><!-- start main -->
	<div class="container">
		<div class="technology row">
			<h2  class="text-red-text">Projects Built By <i><b>&ltcode-s/&gt</b></i></h2>

			@include('achievements/projects')
		</div>
	</div>
</div><!-- end main -->
@endsection
