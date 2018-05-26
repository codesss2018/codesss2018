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
                                        @forelse ($usercourses as $key => $value)
                                            <li class="list-group-item media v-middle">
                                                <div class="media-body">
                                                    <a href="{{ route('face-course',['courseid'=>$value->id]) }}" class="text-subhead list-group-link">{{ $value->title }}</a>
                                                </div>
                                                <div class="media-right">
                                                    <div class="progress progress-mini width-100 margin-none">
                                                        <div class="progress-bar progress-bar-green-300" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width:45%;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @empty
                                            <li class="list-group-item media v-middle">
                                                <div class="media-body">
                                                    <a href="" class="text-subhead list-group-link">No courses registered yet, get started ...</a>
                                                </div>
                                            </li>
                                        @endforelse
                                    </ul>
                                    <div class="panel-footer text-right">
                                        <a href="{{ route('session-courses', ['sessid'=>1]) }}" class="btn btn-white paper-shadow relative" data-z="0" data-hover-z="1" data-animated>View all</a>
                                        <a href="{{ route('app-editor',['sessid'=>$sessid]) }}" class="btn btn-primary paper-shadow relative" data-z="0" data-hover-z="1" data-animated>CREATE COURSE <i class="fa fa-plus"></i></a>
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
                                        @forelse ($userforum as $key => $value)
                                            <li class="list-group-item paper-shadow">
                                                <div class="media v-middle">
                                                    <div class="media-left">
                                                        <a href="{{ route('face-thread-comments',['commentid'=>$value->id]) }}">
                                                            <img src="{{ asset('images/people/110/guy-4.jpg') }}" alt="person" class="img-circle width-40" />
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="{{ route('face-thread-comments',['commentid'=>$value->id]) }}" class="text-subhead link-text-color">{{ $value->comment }}</a>
                                                        <div class="text-light">
                                                            Topic: <a href="{{ route('face-course-comments',['courseid'=>$value->course->id]) }}">{{ $value->course->title }}</a> &nbsp; By: <a href="#">{{ $value->user->name }}</a>
                                                        </div>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="width-60 text-right">
                                                            <span class="text-caption text-light">{{ $value->created_at->diffForHumans()}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @empty
                                            <li></li>
                                        @endforelse
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
