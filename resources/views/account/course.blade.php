@extends('account/app')

@section('content')
    <div class="st-pusher" id="content">
        <!-- sidebar effects INSIDE of st-pusher: -->
        <!-- st-effect-3, st-effect-6, st-effect-7, st-effect-8, st-effect-14 -->
        <!-- this is the wrapper for the content -->
        <div class="st-content">
            <!-- extra div for emulating position:fixed of the menu -->
            <div class="st-content-inner padding-none">
                <div class="container-fluid">
                    <div class="media media-grid media-clearfix-xs">
                        <div class="media-body">
                            <div class="page-section">
                                <div class="media">
                                    <div class="media-left">
                                        <span class="icon-block s60 bg-lightred"><i class="fa fa-github"></i></span>
                                    </div>
                                    <div class="media-body">
                                        <h1 class="text-display-1 margin-none">Github Webhooks for Beginners</h1>
                                        <p class="small margin-none">

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="page-section">
                                <div class="width-350 width-300-md width-100pc-xs paragraph-inline">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="//www.youtube-nocookie.com/embed/Ycv5fNd4AeM?rel=0"></iframe>
                                    </div>
                                </div>
                                <p>
                                    <strong>Lorem ipsum</strong> dolor sit amet, consectetur adipisicing elit. Ad aperiam autem cumque deleniti dicta iusto laboriosam laudantium omnis, possimus praesentium provident quam quas, sapiente sint, ut! Adipisci aliquid assumenda consequuntur cupiditate deleniti dicta dolore dolorem
                                    <strong>dolores enim </strong>eos hic illo inventore iure libero magnam minima minus obcaecati optio pariatur porro quibusdam quos reiciendis, sapiente sint veritatis. Eveniet in magni sunt?</p>
                                <p>
                                    <strong>Lorem ipsum</strong> dolor sit amet, consectetur adipisicing elit. Ad aperiam autem cumque deleniti dicta iusto laboriosam laudantium omnis, possimus praesentium provident quam quas, sapiente sint, ut! Adipisci aliquid assumenda consequuntur cupiditate deleniti dicta dolore dolorem
                                    <strong>dolores enim </strong>eos hic illo inventore iure libero.
                                </p>
                                <br/>
                                <p>
                                    <strong>Lorem ipsum</strong> dolor sit amet, consectetur adipisicing elit. Ad aperiam autem cumque deleniti dicta iusto laboriosam laudantium omnis, possimus praesentium provident quam quas, sapiente sint, ut! Adipisci aliquid assumenda consequuntur cupiditate deleniti dicta dolore dolorem
                                    <strong>dolores enim </strong>eos hic illo inventore iure libero magnam minima minus obcaecati optio pariatur porro quibusdam quos reiciendis, sapiente sint veritatis. Eveniet in magni sunt?</p>
                                <br/>
                                <p class="margin-none">
                                    <span class="label bg-gray-dark">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                                </p>
                            </div>
                            <div class="page-section">
                                <h2 class="text-headline margin-none">What you'll learn</h2>
                                <p class="text-subhead text-light">It only takes a little effort and commitment.</p>
                                <ul class="list-group relative paper-shadow margin-none" data-hover-z="0.5" data-animated>
                                    <li class="list-group-item">
                                        <div class="media v-middle">
                                            <div class="media-left">
                                                <div class="icon-block s30 bg-red-000 text-white img-circle">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="media-body text-body-2">
                                                Basics of GIT and how to become a STAR.
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item paper-shadow">
                                        <div class="media v-middle">
                                            <div class="media-left">
                                                <div class="icon-block s30 bg-red-000 text-white img-circle">
                                                    <i class="fa fa-database"></i>
                                                </div>
                                            </div>
                                            <div class="media-body text-body-2">
                                                Database connections & some other nice features.
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item paper-shadow">
                                        <div class="media v-middle">
                                            <div class="media-left">
                                                <div class="icon-block s30 bg-red-000 text-white img-circle">
                                                    <i class="fa fa-trophy"></i>
                                                </div>
                                            </div>
                                            <div class="media-body text-body-2">
                                                Eaque ex exercitationem quia reprehenderit?
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item paper-shadow">
                                        <div class="media v-middle">
                                            <div class="media-left">
                                                <div class="icon-block s30 bg-red-000 text-white img-circle">
                                                    <i class="fa fa-code-fork"></i>
                                                </div>
                                            </div>
                                            <div class="media-body text-body-2">
                                                Ab distinctio nemo, provident quia quibusdam ullam.
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item paper-shadow">
                                        <div class="media v-middle">
                                            <div class="media-left">
                                                <div class="icon-block s30 bg-red-000 text-white img-circle">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="media-body text-body-2">
                                                Conclusion & Notes.
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="media-right">
                            <div class="page-section width-270 width-auto-xs">
                                <!-- .panel -->
                                <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                                    <div class="panel-heading">
                                        <h4 class="text-headline">Course</h4>
                                    </div>
                                    <div class="panel-body">
                                        <p class="text-caption margin-none">
                                            <i class="fa fa-user fa-fw"></i> Instructor: Adrian Demian
                                            <br/>
                                            <i class="fa fa-check fa-fw"></i> Attending: 30
                                        </p>
                                    </div>
                                    <hr class="margin-none" />
                                    <div class="panel-body text-center">
                                        <p><a class="btn btn-success btn-lg paper-shadow relative" data-z="1" data-hover-z="2" data-animated href="{{ route('my-courses',['sessid'=>1,'courseid'=>1]) }}">Register</a></p>
                                        <p class="text-light"> Not registered for this course</p>
                                    </div>
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <a href="#" class="text-light"><i class="fa fa-facebook fa-fw"></i> Share on facebook</a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#" class="text-light"><i class="fa fa-twitter fa-fw"></i> Tweet this course</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- // END .page-section -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /st-content-inner -->
        </div>
        <!-- /st-content -->
    </div>
@endsection
