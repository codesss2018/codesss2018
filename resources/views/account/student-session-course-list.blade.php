<div class="st-pusher" id="content">
    <!-- sidebar effects INSIDE of st-pusher: -->
    <!-- st-effect-3, st-effect-6, st-effect-7, st-effect-8, st-effect-14 -->
    <!-- this is the wrapper for the content -->
    <div class="st-content">
        <!-- extra div for emulating position:fixed of the menu -->
        <div class="st-content-inner padding-none">
            <div class="container-fluid">
                <div class="page-section">
                    <div class="media v-middle">
                        <div class="media-body">
                            <h1 class="text-display-1 margin-none">My courses</h1>
                        </div>
                        <div class="media-right">
                            <a class="btn btn-white paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated href="{{ route('all-courses',['sessid'=>1]) }}">All Courses</a>
                        </div>
                    </div>
                </div>
                <div class="row" data-toggle="isotope">
                    <div class="item col-xs-12 col-sm-6 col-lg-4">
                        <div class="panel panel-default paper-shadow" data-z="0.5">
                            <div class="panel-heading">
                                <div class="media media-clearfix-xs-min v-middle">
                                    <div class="media-body text-caption text-light">
                                        Lessons 2 of 9
                                    </div>
                                    <div class="media-right">
                                        <div class="progress progress-mini width-100 margin-none">
                                            <div class="progress-bar progress-bar-grey-600" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cover overlay cover-image-full hover">
                                <span class="img icon-block height-100 bg-default"></span>
                                <a href="{{ route('tutorial',['sessid'=>1,'courseid'=>1]) }}" class="padding-none overlay overlay-full icon-block bg-default">
                                    <span class="v-center">
        <i class="fa fa-github"></i>
    </span>
                                </a>
                                <a href="{{ route('tutorial',['sessid'=>1,'courseid'=>1]) }}" class="overlay overlay-full overlay-hover overlay-bg-white">
                                    <span class="v-center">
        <span class="btn btn-circle btn-white btn-lg"><i class="fa fa-graduation-cap"></i></span>
                                    </span>
                                </a>
                            </div>
                            <div class="panel-body">
                                <h4 class="text-headline margin-v-0-10"><a href="{{ route('tutorial',['sessid'=>1,'courseid'=>1]) }}">Github Webhooks for Beginners</a></h4>
                            </div>
                            <hr class="margin-none" />
                            <div class="panel-body">
                                <a class="btn btn-white btn-flat paper-shadow relative" data-z="0" data-hover-z="1" data-animated href="{{ route('tutorial',['sessid'=>1,'courseid'=>1]) }}">Go to course</a>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="pagination margin-top-none">
                    <li class="disabled"><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
        </div>
        <!-- /st-content-inner -->
    </div>
    <!-- /st-content -->
</div>
