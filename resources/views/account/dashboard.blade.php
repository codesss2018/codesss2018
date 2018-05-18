<!DOCTYPE html>
<html class="transition-navbar-scroll top-navbar-xlarge bottom-footer" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Learning</title>
    <!-- Compressed Vendor BUNDLE
    @include('account/style')
</head>
<body>
    <!-- Fixed navbar -->
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
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="">Home page</a></li>
                            <li><a href="">Pricing</a></li>
                            <li><a href="">Tutors</a></li>
                            <li><a href="">Survey</a></li>
                            <li><a href="">Forum Home</a></li>
                            <li><a href="">Forum Category</a></li>
                            <li><a href="">Forum Thread</a></li>
                            <li><a href="">Blog Listing</a></li>
                            <li><a href="">Blog Post</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Courses <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="">Grid Directory</a></li>
                            <li><a href="">List Directory</a></li>
                            <li><a href="">Single Course</a></li>
                        </ul>
                    </li>
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Student <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="active"><a href="">Dashboard</a></li>
                            <li><a href="">My Courses</a></li>
                            <li><a href="">Take Course</a></li>
                            <li><a href="">Course Forums</a></li>
                            <li><a href="">Take Quiz</a></li>
                            <li><a href="">Messages</a></li>
                            <li><a href="">Private Profile</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Instructor <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="">Dashboard</a></li>
                            <li><a href="">My Courses</a></li>
                            <li><a href="">Edit Course</a></li>
                            <li><a href="">Earnings</a></li>
                            <li><a href="">Statement</a></li>
                            <li><a href="">Messages</a></li>
                            <li><a href="">Private Profile</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">UI <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="">Buttons</a></li>
                            <li><a href="">Icons</a></li>
                            <li><a href="">Progress</a></li>
                            <li><a href="">Grid</a></li>
                            <li><a href="">Forms</a></li>
                            <li><a href="">Tables</a></li>
                            <li><a href="">Tabs</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="navbar-right">
                    <ul class="nav navbar-nav navbar-nav-bordered navbar-nav-margin-right">
                        <!-- user -->
                        <li class="dropdown user active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/people/110/guy-6.jpg" alt="" class="img-circle" /> Bill<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li class="active"><a href=""><i class="fa fa-bar-chart-o"></i> Dashboard</a></li>
                                <li><a href=""><i class="fa fa-mortar-board"></i> My Courses</a></li>
                                <li><a href="website-student-profile.html"><i class="fa fa-user"></i> Profile</a></li>
                                <li><a href="/logout"><i class="fa fa-sign-out"></i> Logout</a></li>
                            </ul>
                        </li>
                        <!-- // END user -->
                    </ul>
                    <a href="" class="navbar-btn btn btn-primary">Log In</a>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </div>
    <div class="parallax overflow-hidden bg-black-000 page-section third">
        <div class="container parallax-layer" data-opacity="true">
            <div class="media v-middle">
                <div class="media-left text-center">
                    <a href="#">
                        <img src="images/people/110/guy-6.jpg" alt="people" class="img-circle width-80" />
                    </a>
                </div>
                <div class="media-body">
                    <h1 class="text-white text-display-1 margin-v-0">Bill Smith</h1>
                    <p class="text-subhead"><a class="link-white text-underline" href="">View public profile</a></p>
                </div>
                <div class="media-right">
                    <span class="label bg-red-000">Student</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="media v-middle">
                            <div class="media-left">
                                <div class="bg-green-000 text-white">
                                    <div class="panel-body">
                                        <i class="fa fa-credit-card fa-fw fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="media-body">
                                Your subscription ends on <span class="text-body-2">25 February 2015</span>
                            </div>
                            <div class="media-right media-padding">
                                <a class="btn btn-white paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated href="#">
                Upgrade
            </a>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-toggle="isotope">
                        <div class="item col-xs-12 col-lg-6">
                            <div class="panel panel-default paper-shadow" data-z="0.5">
                                <div class="panel-heading">
                                    <h4 class="text-headline margin-none">Courses</h4>
                                    <p class="text-subhead text-light">Your recent courses</p>
                                </div>
                                <ul class="list-group">
                                    <li class="list-group-item media v-middle">
                                        <div class="media-body">
                                            <a href="" class="text-subhead list-group-link">Basics of HTML</a>
                                        </div>
                                        <div class="media-right">
                                            <div class="progress progress-mini width-100 margin-none">
                                                <div class="progress-bar progress-bar-green-300" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width:45%;">
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item media v-middle">
                                        <div class="media-body">
                                            <a href="" class="text-subhead list-group-link">Angular in Steps</a>
                                        </div>
                                        <div class="media-right">
                                            <div class="progress progress-mini width-100 margin-none">
                                                <div class="progress-bar progress-bar-green-300" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%;">
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item media v-middle">
                                        <div class="media-body">
                                            <a href="" class="text-subhead list-group-link">Bootstrap Foundations</a>
                                        </div>
                                        <div class="media-right">
                                            <div class="progress progress-mini width-100 margin-none">
                                                <div class="progress-bar progress-bar-green-300" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width:25%;">
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="panel-footer text-right">
                                    <a href="" class="btn btn-white paper-shadow relative" data-z="0" data-hover-z="1" data-animated href="#"> View all</a>
                                </div>
                            </div>
                        </div>
                        <div class="item col-xs-12 col-lg-6">
                            <div class="panel panel-default paper-shadow" data-z="0.5">
                                <div class="panel-body">
                                    <h4 class="text-headline margin-none">Rewards</h4>
                                    <p class="text-subhead text-light">Your latest achievements</p>
                                    <div class="icon-block half img-circle bg-purple-300">
                                        <i class="fa fa-star text-white"></i>
                                    </div>
                                    <div class="icon-block half img-circle bg-indigo-300">
                                        <i class="fa fa-trophy text-white"></i>
                                    </div>
                                    <div class="icon-block half img-circle bg-green-300">
                                        <i class="fa fa-mortar-board text-white"></i>
                                    </div>
                                    <div class="icon-block half img-circle bg-orange-300">
                                        <i class="fa fa-code-fork text-white"></i>
                                    </div>
                                    <div class="icon-block half img-circle bg-red-300">
                                        <i class="fa fa-diamond text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default paper-shadow" data-z="0.5">
                                <div class="panel-heading">
                                    <h4 class="text-headline">Certificates
                                        <small>(4)</small>
                                    </h4>
                                </div>
                                <div class="panel-body">
                                    <a class="btn btn-default text-grey-400 btn-lg btn-circle paper-shadow relative" data-hover-z="0.5" data-animated data-toggle="tooltip" data-title="Name of Certificate">
                                        <i class="fa fa-file-text"></i>
                                    </a>
                                    <a class="btn btn-default text-grey-400 btn-lg btn-circle paper-shadow relative" data-hover-z="0.5" data-animated data-toggle="tooltip" data-title="Name of Certificate">
                                        <i class="fa fa-file-text"></i>
                                    </a>
                                    <a class="btn btn-default text-grey-400 btn-lg btn-circle paper-shadow relative" data-hover-z="0.5" data-animated data-toggle="tooltip" data-title="Name of Certificate">
                                        <i class="fa fa-file-text"></i>
                                    </a>
                                    <a class="btn btn-default text-grey-400 btn-lg btn-circle paper-shadow relative" data-hover-z="0.5" data-animated data-toggle="tooltip" data-title="Name of Certificate">
                                        <i class="fa fa-file-text"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item col-xs-12 col-lg-6">
                            <div class="panel panel-default paper-shadow" data-z="0.5">
                                <div class="panel-heading">
                                    <h4 class="text-headline margin-none">Quizzes</h4>
                                    <p class="text-subhead text-light">Your recent performance</p>
                                </div>
                                <ul class="list-group">
                                    <li class="list-group-item media v-middle">
                                        <div class="media-body">
                                            <h4 class="text-subhead margin-none">
                                                <a href="" class="list-group-link">Title of quiz goes here?</a>
                                            </h4>
                                            <div class="caption">
                                                <span class="text-light">Course:</span>
                                                <a href="">Basics of HTML</a>
                                            </div>
                                        </div>
                                        <div class="media-right text-center">
                                            <div class="text-display-1">5.8</div>
                                            <span class="caption text-light">Good</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item media v-middle">
                                        <div class="media-body">
                                            <h4 class="text-subhead margin-none">
                                                <a href="" class="list-group-link">Directives & Routing</a>
                                            </h4>
                                            <div class="caption">
                                                <span class="text-light">Course:</span>
                                                <a href="">Angular in Steps</a>
                                            </div>
                                        </div>
                                        <div class="media-right text-center">
                                            <div class="text-display-1 text-green-300">9.8</div>
                                            <span class="caption text-light">Great</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item media v-middle">
                                        <div class="media-body">
                                            <h4 class="text-subhead margin-none">
                                                <a href="" class="list-group-link">Responsive & Retina</a>
                                            </h4>
                                            <div class="caption">
                                                <span class="text-light">Course:</span>
                                                <a href="">Bootstrap Foundations</a>
                                            </div>
                                        </div>
                                        <div class="media-right text-center">
                                            <div class="text-display-1 text-red-300">3.4</div>
                                            <span class="caption text-light">Failed</span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="panel-footer">
                                    <a href="" class="btn btn-primary paper-shadow relative" data-z="0" data-hover-z="1" data-animated href="#"> Go to Results</a>
                                </div>
                            </div>
                        </div>
                        <div class="item col-xs-12 col-lg-6">
                            <h4 class="text-headline margin-none">Forum Activity</h4>
                            <p class="text-subhead text-light">Latest forum topics & comments</p>
                            <ul class="list-group relative paper-shadow" data-hover-z="0.5" data-animated>
                                <li class="list-group-item paper-shadow">
                                    <div class="media v-middle">
                                        <div class="media-left">
                                            <a href="#">
                                                <img src="images/people/110/guy-3.jpg" alt="person" class="img-circle width-40" />
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <a href="" class="text-subhead link-text-color">Can someone help me with AngularJS?</a>
                                            <div class="text-light">
                                                Topic: <a href="">AngularJS</a> &nbsp; By: <a href="#">Adrian Demian</a>
                                            </div>
                                        </div>
                                        <div class="media-right">
                                            <div class="width-60 text-right">
                                                <span class="text-caption text-light">1 hr ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item paper-shadow">
                                    <div class="media v-middle">
                                        <div class="media-left">
                                            <a href="#">
                                                <img src="images/people/110/guy-6.jpg" alt="person" class="img-circle width-40" />
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <a href="" class="text-subhead link-text-color">Can someone help me with AngularJS?</a>
                                            <div class="text-light">
                                                Topic: <a href="">AngularJS</a> &nbsp; By: <a href="#">Adrian Demian</a>
                                            </div>
                                        </div>
                                        <div class="media-right">
                                            <div class="width-60 text-right">
                                                <span class="text-caption text-light">2 hrs ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item paper-shadow">
                                    <div class="media v-middle">
                                        <div class="media-left">
                                            <a href="#">
                                                <img src="images/people/110/guy-5.jpg" alt="person" class="img-circle width-40" />
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <a href="" class="text-subhead link-text-color">Can someone help me with AngularJS?</a>
                                            <div class="text-light">
                                                Topic: <a href="">AngularJS</a> &nbsp; By: <a href="#">Adrian Demian</a>
                                            </div>
                                        </div>
                                        <div class="media-right">
                                            <div class="width-60 text-right">
                                                <span class="text-caption text-light">3 hr ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item paper-shadow">
                                    <div class="media v-middle">
                                        <div class="media-left">
                                            <a href="#">
                                                <img src="images/people/110/guy-4.jpg" alt="person" class="img-circle width-40" />
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <a href="" class="text-subhead link-text-color">Can someone help me with AngularJS?</a>
                                            <div class="text-light">
                                                Topic: <a href="">AngularJS</a> &nbsp; By: <a href="#">Adrian Demian</a>
                                            </div>
                                        </div>
                                        <div class="media-right">
                                            <div class="width-60 text-right">
                                                <span class="text-caption text-light">4 hr ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <br/>
                    <br/>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
                        <div class="panel-heading panel-collapse-trigger">
                            <h4 class="panel-title">My Account</h4>
                        </div>
                        <div class="panel-body list-group">
                            <ul class="list-group list-group-menu">
                                <li class="list-group-item active"><a class="link-text-color" href="">Dashboard</a></li>
                                <li class="list-group-item"><a class="link-text-color" href="">My Courses</a></li>
                                <li class="list-group-item"><a class="link-text-color" href="website-student-profile.html">Profile</a></li>
                                <li class="list-group-item"><a class="link-text-color" href="website-student-messages.html">Messages</a></li>
                                <li class="list-group-item"><a class="link-text-color" href="login.html"><span>Logout</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <h4>Featured</h4>
                    <div class="slick-basic slick-slider" data-items="1" data-items-lg="1" data-items-md="1" data-items-sm="1" data-items-xs="1">
                        <div class="item">
                            <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                                <div class="panel-body">
                                    <div class="media media-clearfix-xs">
                                        <div class="media-left">
                                            <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                                                <span class="img icon-block s90 bg-default"></span>
                                                <span class="overlay overlay-full padding-none icon-block s90 bg-default">
                        <span class="v-center">
                            <i class="fa fa-github"></i>
                        </span>
                                                </span>
                                                <a href="" class="overlay overlay-full overlay-hover overlay-bg-white">
                                                    <span class="v-center">
                            <span class="btn btn-circle btn-white btn-lg"><i class="fa fa-graduation-cap"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading margin-v-5-3"><a href="">Github Webhooks for Beginners</a></h4>
                                            <p class="small margin-none">
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                                <div class="panel-body">
                                    <div class="media media-clearfix-xs">
                                        <div class="media-left">
                                            <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                                                <span class="img icon-block s90 bg-primary"></span>
                                                <span class="overlay overlay-full padding-none icon-block s90 bg-primary">
                        <span class="v-center">
                            <i class="fa fa-css3"></i>
                        </span>
                                                </span>
                                                <a href="" class="overlay overlay-full overlay-hover overlay-bg-white">
                                                    <span class="v-center">
                            <span class="btn btn-circle btn-primary btn-lg"><i class="fa fa-graduation-cap"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading margin-v-5-3"><a href="">Awesome CSS with LESS Processing</a></h4>
                                            <p class="small margin-none">
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                                <div class="panel-body">
                                    <div class="media media-clearfix-xs">
                                        <div class="media-left">
                                            <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                                                <span class="img icon-block s90 bg-lightred"></span>
                                                <span class="overlay overlay-full padding-none icon-block s90 bg-lightred">
                        <span class="v-center">
                            <i class="fa fa-windows"></i>
                        </span>
                                                </span>
                                                <a href="" class="overlay overlay-full overlay-hover overlay-bg-white">
                                                    <span class="v-center">
                            <span class="btn btn-circle btn-red-500 btn-lg"><i class="fa fa-graduation-cap"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading margin-v-5-3"><a href="">Portable Environments with Vagrant</a></h4>
                                            <p class="small margin-none">
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                                <div class="panel-body">
                                    <div class="media media-clearfix-xs">
                                        <div class="media-left">
                                            <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                                                <span class="img icon-block s90 bg-brown"></span>
                                                <span class="overlay overlay-full padding-none icon-block s90 bg-brown">
                        <span class="v-center">
                            <i class="fa fa-wordpress"></i>
                        </span>
                                                </span>
                                                <a href="" class="overlay overlay-full overlay-hover overlay-bg-white">
                                                    <span class="v-center">
                            <span class="btn btn-circle btn-orange-500 btn-lg"><i class="fa fa-graduation-cap"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading margin-v-5-3"><a href="">WordPress Theme Development</a></h4>
                                            <p class="small margin-none">
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                                <div class="panel-body">
                                    <div class="media media-clearfix-xs">
                                        <div class="media-left">
                                            <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                                                <span class="img icon-block s90 bg-purple"></span>
                                                <span class="overlay overlay-full padding-none icon-block s90 bg-purple">
                        <span class="v-center">
                            <i class="fa fa-jsfiddle"></i>
                        </span>
                                                </span>
                                                <a href="" class="overlay overlay-full overlay-hover overlay-bg-white">
                                                    <span class="v-center">
                            <span class="btn btn-circle btn-purple-500 btn-lg"><i class="fa fa-graduation-cap"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading margin-v-5-3"><a href="">Modular JavaScript with Browserify</a></h4>
                                            <p class="small margin-none">
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                                <div class="panel-body">
                                    <div class="media media-clearfix-xs">
                                        <div class="media-left">
                                            <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                                                <span class="img icon-block s90 bg-default"></span>
                                                <span class="overlay overlay-full padding-none icon-block s90 bg-default">
                        <span class="v-center">
                            <i class="fa fa-cc-visa"></i>
                        </span>
                                                </span>
                                                <a href="" class="overlay overlay-full overlay-hover overlay-bg-white">
                                                    <span class="v-center">
                            <span class="btn btn-circle btn-white btn-lg"><i class="fa fa-graduation-cap"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading margin-v-5-3"><a href="">Easy Online Payments with Stripe</a></h4>
                                            <p class="small margin-none">
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer">
        <strong><i>CODE-S</i></strong>
    </footer>
    <!-- // Footer -->
    <!-- Inline Script for colors and config objects; used by various external scripts; -->
    @include('account/script')
</body>
</html>
