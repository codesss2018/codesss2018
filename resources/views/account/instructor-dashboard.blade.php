<div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-9">
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
                                                <div class="progress-bar progress-bar-green-300" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @empty
                                    <li class="list-group-item media v-middle">
                                        <div class="media-body">
                                            <a href="" class="text-subhead list-group-link">You haven't created any course yet, you can only create courses within sessions that you've been registered for ...</a>
                                        </div>
                                    </li>
                                @endforelse
                                </ul>
                                <div class="panel-footer text-right">
                                    <a href="{{ route('my-courses') }}" class="btn btn-white paper-shadow relative" data-z="0" data-hover-z="1" data-animated>View all</a>
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
                                    <li class="list-group-item">
                                        <div class="media v-middle margin-v-0-10">
                                            <div class="media-body">
                                                <p class="text-subhead">
                                                    <a href="{{ route('face-thread-comments',['commentid'=>$value->id]) }}">
                                                        <img src="{{ asset('images/people/110/guy-1.jpg') }}" alt="person" class="width-30 img-circle" />
                                                    </a> &nbsp;
                                                    <a href="{{ route('face-thread-comments',['commentid'=>$value->id]) }}">{{ $value->user->name }}</a>
                                                    <span class="text-caption text-light">{{ $value->created_at->diffForHumans()}}</span>
                                                </p>
                                            </div>
                                            <div class="media-right">
                                                <div class="width-50 text-right">
                                                    <a href="{{ route('face-thread-comments',['commentid'=>$value->id]) }}" class="btn btn-white btn-xs"><i class="fa fa-reply"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <p>{{ $value->comment }}</p>
                                        <p class="text-light"><span class="caption">Course:</span> <a href="{{ route('face-course-comments',['courseid'=>$value->course->id]) }}">{{ $value->course->title }}</a></p>
                                    </li>
                                @empty
                                    <li></li>
                                @endforelse
                                </ul>
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
