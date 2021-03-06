<div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-9">
                    <div class="row" data-toggle="isotope">
                        @forelse ($usercourses as $key => $value)
                            <div class="item col-xs-12 col-sm-6 col-lg-4">
                                <div class="panel panel-default paper-shadow" data-z="0.5">
                                    <div class="panel-heading">
                                        <div class="media media-clearfix-xs-min v-middle">
                                            <div class="media-body text-caption text-light">
                                                {{$value->progress}}
                                            </div>
                                            <div class="media-right">
                                                <div class="progress progress-mini width-100 margin-none">
                                                    <div class="progress-bar progress-bar-pink-300" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cover overlay cover-image-full hover">
                                        <span class="img icon-block height-100 bg-pink-400 text-white"></span>
                                        <a href="{{ route('face-course',['courseid'=>$value->id]) }}" class="padding-none overlay overlay-full icon-block bg-pink-400 text-white">
                                            <span class="v-center"><i class="fa fa-cc-visa"></i></span>
                                        </a>
                                        <a href="{{ route('face-course',['courseid'=>$value->id]) }}" class="overlay overlay-full overlay-hover overlay-bg-white">
                                            <span class="v-center">
                                            <span class="btn btn-circle btn-pink-500 btn-lg"><i class="fa fa-graduation-cap"></i></span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="panel-body">
                                        <h4 class="text-headline margin-v-0-10"><a href="{{ route('face-course',['courseid'=>$value->id]) }}">{{$value->title}}</a></h4>
                                    </div>
                                    <hr class="margin-none" />
                                    <div class="panel-body">
                                        <a class="btn btn-white btn-flat paper-shadow relative" data-z="0" data-hover-z="1" data-animated href="{{ route('face-course',['courseid'=>$value->id]) }}">Go to course</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            No registered for any courses yet, what are you waiting for, join the <a href="{{ route('account') }}" class="text-red-000">current session</a> and start learning ...
                        @endforelse
                    </div><br/>
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
            </div>
        </div>
    </div>
