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
                    <div class="page-section">
                        <div class="media v-middle">
                            <div class="media-body">
                                <h1 class="text-display-1 margin-none">Library</h1>
                                <p class="text-subhead">Browse through courses available for this session.</p>
                            </div>

                        </div>
                    </div>
                    <div class="panel panel-default paper-shadow" data-z="0.5">
                        <div class="panel-body">
                            <div class="media media-clearfix-xs">
                                <div class="media-left text-center">
                                    <div class="cover width-150 width-100pc-xs overlay cover-image-full hover margin-v-0-10">
                                        <span class="img icon-block height-130 bg-default"></span>
                                        <span class="overlay overlay-full padding-none icon-block bg-default">
                    <span class="v-center">
                        <i class="fa fa-github"></i>
                    </span>
                                        </span>
                                        <a href="{{ route('course',['sessid'=>1,'courseid'=>1]) }}" class="overlay overlay-full overlay-hover overlay-bg-white">
                                            <span class="v-center">
                        <span class="btn btn-circle btn-white btn-lg"><i class="fa fa-graduation-cap"></i></span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="text-headline margin-v-5-0"><a href="{{ route('course',['sessid'=>1,'courseid'=>1]) }}">Github Webhooks for Beginners</a></h4>
                                    <p class="small">

                                    </p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto assumenda aut debitis, ducimus, ea eaque earum eius enim eos explicabo facilis harum impedit natus nemo, nobis obcaecati omnis perspiciatis praesentium quaerat quas quod reprehenderit sapiente temporibus vel voluptatem voluptates voluptatibus?</p>
                                    <hr class="margin-v-8" />
                                    <div class="media v-middle">
                                        <div class="media-left">
                                            <img src="{{ asset('images/people/50/guy-3.jpg') }}" alt="People" class="img-circle width-40" />
                                        </div>
                                        <div class="media-body">
                                            <h4><a href="">Adrian Demian</a>
                                                <br/>
                                            </h4>
                                            Instructor
                                        </div>
                                    </div>
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
@endsection
