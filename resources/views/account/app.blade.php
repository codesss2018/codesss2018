<!DOCTYPE html>
<html class="st-layout ls-top-navbar-large ls-bottom-footer show-sidebar sidebar-l3" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Learning</title>
    <!-- Compressed Vendor BUNDLE
    Includes vendor (3rd party) styling such as the customized Bootstrap and other 3rd party libraries used for the current theme/module -->
    @include('account/style')
</head>
<body>
    <div class="navbar navbar-size-large navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#sidebar-menu" data-toggle="sidebar-menu" class="toggle pull-left visible-xs"><i class="fa fa-ellipsis-v"></i></a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand navbar-brand-primary navbar-brand-logo navbar-nav-padding-left">
                    <a class="svg" href="">

                    </a>
                </div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-nav">
                <ul class="nav navbar-nav">

                </ul>
                <ul class="nav navbar-nav navbar-nav-bordered navbar-right">

                    <li class="dropdown">
                        <a href="{{ route('account') }}">
                            <img src="{{ asset('images/people/110/guy-5.jpg') }}" alt="Bill" class="img-circle" width="40" /> Account
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </div>

    <!-- Wrapper required for sidebar transitions -->
    <div class="st-container">
        <!-- Fixed navbar -->
        @include('account/instructor')
        <!-- sidebar effects OUTSIDE of st-pusher: -->
        <!-- st-effect-1, st-effect-2, st-effect-4, st-effect-5, st-effect-9, st-effect-10, st-effect-11, st-effect-12, st-effect-13 -->
        <!-- content push wrapper -->
        @yield('content')
        <!-- /st-pusher -->
        <!-- Footer -->
        <footer class="footer">
            <strong><i class="text-red-000">&ltCODE-S/&gt</i></strong>
        </footer>
        <!-- // Footer -->
    </div>
    <!-- /st-container -->
    <!-- Inline Script for colors and config objects; used by various external scripts; -->
    @include('account/script')
</body>
</html>
