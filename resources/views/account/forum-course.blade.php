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
                        <div class="row">
                            <div class="col-md-8 col-lg-9">
                                <div class="page-section">
                                    <div class="media v-middle">
                                        <div class="media-body">
                                            <h1 class="text-display-1 margin-none">{{$course->title}}</h1>
                                            <p class="text-subhead text-light">Feel free to ask a question, share ideas, have fun and be nice ...</p>
                                        </div>
                                        <div class="media-right">
                                            <a href="#" class="btn btn-white paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated><i class="fa fa-fw fa-plus"></i> Ask a Question</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default paper-shadow" data-z="0.5">
                                    <ul class="list-group">
                                        @forelse ($comments as $key => $value)
                                            <li class="list-group-item media v-middle">
                                                <div class="media-left">
                                                    <div class="icon-block half img-circle bg-grey-300">
                                                        <i class="fa fa-file-text text-white"></i>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="text-subhead margin-none">
                                                        <a href="{{ route('thread-comments',['courseid'=>$value->course_id,'sessid'=>$sessid,'commentid'=>$value->id]) }}" class="link-text-color">{{$value->comment}}</a>
                                                    </h4>
                                                    <div class="text-light text-caption">
                                                        posted by
                                                        <a href="#">
                                                            <img src="{{ asset('images/people/110/woman-4.jpg') }}" alt="person" class="img-circle width-20" /> {{$value->user->name}}</a> &nbsp; | <i class="fa fa-clock-o fa-fw"></i> 5 mins
                                                    </div>
                                                </div>
                                                <div class="media-right">
                                                    <a href="" class="btn btn-white text-light"><i class="fa fa-comments fa-fw"></i> 17</a>
                                                </div>
                                            </li>
                                        @empty
                                            <li>No comments yet</li>
                                        @endforelse
                                    </ul>
                                </div>
                                <ul class="pagination margin-top-none">
                                    <li class="disabled"><a href="#">&laquo;</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">&raquo;</a></li>
                                </ul>
                                <br/>
                            </div>
                            <div class="col-md-4 col-lg-3">
                                <div class="page-section">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="form-group form-control-material">
                                                <input id="forumSearch" type="text" class="form-control" placeholder="Type to search" />
                                                <label for="forumSearch">Search ...</label>
                                            </div>
                                            <a href="#" class="btn btn-inverse paper-shadow relative" data-z="0.5" data-hover-z="1">Search</a>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">Categories</h4>
                                        </div>
                                        <ul class="list-group list-group-menu">
                                            <li class="list-group-item">
                                                <a href="{{ route('comments',['sessid'=>$sessid]) }}"><i class="fa fa-chevron-right fa-fw"></i> All</a>
                                            </li>
                                            @include('account/categories')
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /st-content-inner -->
            </div>
            <!-- /st-content -->
        </div>
@endsection
