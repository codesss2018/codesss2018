    <!-- Fixed navbar -->
    <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-9">
                    @forelse ($activecodesession as $key => $value)
                        @if ($isusercurrentsession)
                            <div class="panel panel-default">
                                <div class="media v-middle">
                                    <div class="media-left">
                                        <div class="bg-red-000 text-white">
                                            <div class="panel-body">
                                                <i class="fa fa-credit-card fa-fw fa-2x"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                    The current session ends on <span class="text-body-2 text-red-000">{{$value->end_date->format('jS F Y') }}</span> and you are not part, click to ...
                                    </div>
                                    <div class="media-right media-padding">
                                        <a class="btn btn-white paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated href="{{ route('session',['sessid'=>$value->id]) }}">Join</a>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="panel panel-default">
                                <div class="media v-middle">
                                    <div class="media-left">
                                        <div class="bg-red-000 text-white">
                                            <div class="panel-body">
                                                <i class="fa fa-credit-card fa-fw fa-2x"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                    The current session ends on <span class="text-body-2">{{$value->end_date->format('jS F Y') }}</span> and you've already joined in ...
                                    </div>
                                    <div class="media-right media-padding">
                                        <a class="btn btn-white paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated href="{{ route('session',['sessid'=>$value->id]) }}">Enter</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @empty
                        <div class="panel panel-default">
                            <div class="media v-middle">
                                <div class="media-left">
                                    <div class="bg-red-000 text-white">
                                        <div class="panel-body">
                                            <i class="fa fa-credit-card fa-fw fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-body">
                                There is no session running currently ...
                                </div>
                            </div>
                        </div>
                    @endforelse
                    <div class="row" data-toggle="isotope">
                        <div class="item col-xs-12 col-lg-6">
                            <div class="panel panel-default paper-shadow" data-z="0.5">
                                <div class="panel-heading">
                                    <h4 class="text-headline margin-none">Courses</h4>
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
                                    <a href="{{ route('my-courses') }}" class="btn btn-white paper-shadow relative" data-z="0" data-hover-z="1" data-animated> View all</a>
                                </div>
                            </div>
                        </div>

                        <div class="item col-xs-12 col-lg-6">
                            <h4 class="text-headline margin-none">Forum Activity</h4>
                            <p class="text-subhead text-light">Latest forum topics & comments</p>
                            <ul class="list-group relative paper-shadow" data-hover-z="0.5" data-animated>
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
                        <div class="item col-xs-12 col-lg-6">
                            <div class="panel panel-default paper-shadow" data-z="0.5">
                                <div class="panel-heading">
                                    <h4 class="text-headline">Certificates
                                        <small>({{ $usercerts->count() }})</small>
                                    </h4>
                                </div>
                                <div class="panel-body">
                                    @forelse ($usercerts as $key => $value)
                                        <a class="btn btn-default text-grey-400 btn-lg btn-circle paper-shadow relative" data-hover-z="0.5" data-animated data-toggle="tooltip" data-title="{{$value->title}}" href="#{{$value->id}}">
                                            <i class="fa fa-file-text"></i>
                                        </a>
                                    @empty
                                        <p>No certificates yet ...</p>
                                    @endforelse
                                </div>
                            </div>
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
                        @include('account/account-panel')
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
                        <div class="panel-heading panel-collapse-trigger">
                            <h4 class="panel-title">All Sessions</h4>
                        </div>
                        @include('account/past-session')
                    </div>
                </div>
            </div>
        </div>
    </div>
