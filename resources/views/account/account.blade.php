<!DOCTYPE html>
<html class="transition-navbar-scroll top-navbar-xlarge bottom-footer" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Learning</title>
    <!-- Compressed Vendor BUNDLE -->
    @include('account/style')
</head>
<body>
    <div class="navbar navbar-default navbar-fixed-top navbar-size-large navbar-size-xlarge paper-shadow" data-z="0" data-animated role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand navbar-brand-logo">
                    <a class="svg" href="">

                    </a>
                </div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-nav">
                <ul class="nav navbar-nav navbar-nav-margin-left">

                </ul>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- user -->
                        <li class="dropdown user active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{ asset('images/people/110/guy-6.jpg') }}" alt="" class="img-circle" /> {{$user->name}}<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li @if($activepage=='dash')class="active" @endif><a href="{{ asset('account') }}"><i class="fa fa-bar-chart-o"></i> Dashboard</a></li>
                                <li @if($activepage=='course')class="active" @endif><a href="{{ route('my-courses') }}"><i class="fa fa-user"></i> My Courses</a></li>
                                <li @if($activepage=='prof')class="active" @endif><a href="{{ route('private-profile') }}"><i class="fa fa-user"></i> Profile</a></li>
                                <li><a href="/logout"><i class="fa fa-sign-out"></i> Logout</a></li>
                            </ul>
                        </li>
                        <!-- // END user -->
                    </ul>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </div>
    <div class="parallax overflow-hidden bg-black-000 page-section third">
        <div class="container parallax-layer" data-opacity="true">
            <div class="media v-middle">
                <div class="media-left text-center">
                    <a href="">

                    </a>
                </div>
                <div class="media-body">
                    <h1 class="text-white text-display-1 margin-v-0">{{ $user->name }}</h1>
                    <p class="text-subhead"><a class="link-white text-underline" href="">View public profile</a></p>
                </div>
                @include('account/mode')
            </div>
        </div>
    </div>
    @yield('main')
    <!-- Footer -->
    <footer class="footer">
        <strong><i class="text-red-000">&ltCODE-S/&gt</i></strong>
    </footer>
    <!-- // Footer -->
    <!-- Inline Script for colors and config objects; used by various external scripts; -->
    @include('account/script')
</body>
</html>
