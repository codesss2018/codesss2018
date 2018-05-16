<div class="container">
	<div class="row h_menu">
		<nav class="navbar navbar-default navbar-left" role="navigation">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li @if($page=='home')class="active" @endif><a href="{{ route('home') }}">Home</a></li>
				<li class="dropdown @if($page=='activities')active @endif">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Activities <span class="caret"></span></a>
			          <ul class="dropdown-menu">
			            <li><a href="{{ route('tutorials') }}">Tutorials</a></li>
			            <li><a href="{{ route('seminars') }}">Seminars</a></li>
			            {{-- <!--<li><a href="{{ route('hackathons') }}">Hackathons</a></li>--> --}}
			            <li><a href="{{ route('clubs') }}">Clubs</a></li>
			          </ul>
		        </li>
					<li class="dropdown @if($page=='achievements')active @endif">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Achievements <span class="caret"></span></a>
					  <ul class="dropdown-menu">
			            <li><a href="{{ route('student-projects') }}">Student Projects</a></li>
			            <li><a href="{{ route('organization-projects') }}">Organization Projects</a></li>
			            <li><a href="{{ route('reports') }}">Reports</a></li>
			          </ul>
			        </li>
				<li @if($page=='about')class="active" @endif><a href="{{ route('about') }}">About Us</a></li>
		        <li @if($page=='blog')class="active" @endif><a href="{{ route('blog') }}">Blog</a></li>
		        <li @if($page=='help')class="active" @endif><a href="{{ route('help') }}">Help Us</a></li>

		      </ul>
		    </div><!-- /.navbar-collapse -->
		    <!-- start soc_icons -->
		</nav>
		<div class="soc_icons navbar-right">
			<ul class="list-unstyled text-center">
				<li><a href="#" id= "loginRegister">Sign In/ Sign Up</a></li>
			</ul>
		</div>
	</div>
</div>
