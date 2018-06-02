@extends('account/account')

@section('main')
    <div class="container">
            <div class="page-section">
                <div class="row">
                    <div class="col-md-9">
                        <!-- Tabbable Widget -->
                        <div class="tabbable paper-shadow relative" data-z="0.5">
                            <!-- Tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#account" data-toggle="tab"><i class="fa fa-fw fa-lock"></i> <span class="hidden-sm hidden-xs">Session Info</span></a></li>
                                <li><a href="#add-s" data-toggle="tab"><i class="fa fa-code"></i> <span class="hidden-sm hidden-xs">Add Session Instructors</span></a></li>
                                <li><a href="#remove-s" data-toggle="tab"><i class="fa fa-code"></i> <span class="hidden-sm hidden-xs">Remove Session Instructors</span></a></li>
                            </ul>
                            <!-- // END Tabs -->
                            <!-- Panes -->
                            <div class="tab-content">
                                <div id="account" class="tab-pane active">
                                    <form class="form-horizontal" method="post" action="account/session/edit">
                                        @csrf
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-md-3 control-label">Session Name</label>
                                            <div class="col-md-9">
                                                <div class="form-control-material">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                        <input type="text" class="form-control" id="inputEmail3" name="name" value="{{$sess->name}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="start_date" class="col-md-3 control-label">Start Date</label>
                                            <div class="col-md-9">
                                                <div class="form-control-material">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                        <input type="date" class="form-control" id="start_date" name="start_date" value="{{$sess->start_date->format('Y-m-d')}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="end_date" class="col-md-3 control-label">End Date</label>
                                            <div class="col-md-9">
                                                <div class="form-control-material">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                        <input type="date" class="form-control" id="end_date" name="end_date" value="{{$sess->end_date->format('Y-m-d')}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="video" class="col-md-3 control-label">Video</label>
                                            <div class="col-md-9">
                                                <div class="form-control-material">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-link"></i></span>
                                                        <input type="link" class="form-control" id="videoinput" name="video" placeholder="Paste Youtube video link ...">
                                                    </div>
                                                </div>
                                                <iframe class="embed-responsive-item" id="video" src="//www.youtube-nocookie.com/embed/Ycv5fNd4AeM?rel=0"></iframe>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </form>
                                </div>
                                <div id="add-s" class="tab-pane">
                                <form class="form-horizontal" method="post" action="{{ route('instructor-join',['sessid'=>$sess->id]) }}">
                                    @csrf
                                    <select class="instructors-multicombo" multiple="multiple" name="instructors[]" style="width:100%">
                                        @forelse ($instructors as $key => $value)
                                            <option value="{{$value->id}}">{{$value->name}}</option>
                                        @empty

                                        @endforelse
                                    </select><br/><br/><br/>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </form>
                                </div>
                                <div id="remove-s" class="tab-pane">
                                <form class="form-horizontal" method="post" action="{{ route('instructor-remove',['sessid'=>$sess->id]) }}">
                                    @csrf
                                    <select class="instructors-multicombo" multiple="multiple" name="instructors[]" style="width:100%">
                                        @forelse ($sesinstructors as $key => $value)
                                            <option value="{{$value->id}}">{{$value->name}}</option>
                                        @empty

                                        @endforelse
                                    </select><br/><br/><br/>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </form>
                                </div>
                            </div>
                            <!-- // END Panes -->
                        </div>

                        <!-- // END Tabbable Widget -->
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
                </div>
            </div>
        </div>
@endsection
