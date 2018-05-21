<div class="st-pusher" id="content">
            <!-- sidebar effects INSIDE of st-pusher: -->
            <!-- st-effect-3, st-effect-6, st-effect-7, st-effect-8, st-effect-14 -->
            <!-- this is the wrapper for the content -->
            <div class="st-content">
                <!-- extra div for emulating position:fixed of the menu -->
                <div class="st-content-inner padding-none">
                    <div class="container-fluid">
                        <div class="page-section">
                            <h1 class="text-display-1">Dashboard</h1>
                        </div>
                        <div class="row" data-toggle="isotope">
                            <div class="item col-xs-12 col-lg-6">
                                <div class="panel panel-default paper-shadow" data-z="0.5">
                                    <div class="panel-heading">
                                        <h4 class="text-headline margin-none">My Courses</h4>
                                        <p class="text-subhead text-light">Your recent courses</p>
                                    </div>
                                    <ul class="list-group">
                                        <li class="list-group-item media v-middle">
                                            <div class="media-body">
                                                <a href="" class="text-subhead list-group-link">Basics of HTML</a>
                                            </div>
                                            <div class="media-right">
                                                <div class="progress progress-mini width-100 margin-none">
                                                    <div class="progress-bar progress-bar-green-300" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
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
                                                    <div class="progress-bar progress-bar-green-300" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
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
                                                    <div class="progress-bar progress-bar-green-300" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="panel-footer text-right">
                                        <a href="{{ route('session-courses', ['sessid'=>1]) }}" class="btn btn-white paper-shadow relative" data-z="0" data-hover-z="1" data-animated>View all</a>
                                        <a href="" class="btn btn-primary paper-shadow relative" data-z="0" data-hover-z="1" data-animated>CREATE COURSE <i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-xs-12 col-lg-6">
                                <div class="s-container">
                                    <h4 class="text-headline margin-none">Comments</h4>
                                    <p class="text-subhead text-light">Latest student comments </p>
                                </div>
                                <div class="panel panel-default">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class="media v-middle margin-v-0-10">
                                                <div class="media-body">
                                                    <p class="text-subhead">
                                                        <a href="#">
                                                            <img src="{{ asset('images/people/110/guy-5.jpg') }}" alt="person" class="width-30 img-circle" />
                                                        </a> &nbsp;
                                                        <a href="#">mosaicpro</a>
                                                        <span class="text-caption text-light">56 min ago</span>
                                                    </p>
                                                </div>
                                                <div class="media-right">
                                                    <div class="width-50 text-right">
                                                        <a href="#" class="btn btn-white btn-xs"><i class="fa fa-reply"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias, blanditiis eligendi expedita ipsam minus non numquam quidem reiciendis ut?</p>
                                            <p class="text-light"><span class="caption">Course:</span> <a href="">Basics Of HTML</a></p>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media v-middle margin-v-0-10">
                                                <div class="media-body">
                                                    <p class="text-subhead">
                                                        <a href="#">
                                                            <img src="{{ asset('images/people/110/guy-1.jpg') }}" alt="person" class="width-30 img-circle" />
                                                        </a> &nbsp;
                                                        <a href="#">mosaicpro</a>
                                                        <span class="text-caption text-light">8 min ago</span>
                                                    </p>
                                                </div>
                                                <div class="media-right">
                                                    <div class="width-50 text-right">
                                                        <a href="#" class="btn btn-white btn-xs"><i class="fa fa-reply"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias, blanditiis eligendi expedita ipsam minus non numquam quidem reiciendis ut?</p>
                                            <p class="text-light"><span class="caption">Course:</span> <a href="">Basics Of HTML</a></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /st-content-inner -->
            </div>
            <!-- /st-content -->
        </div>
