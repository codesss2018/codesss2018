<div class="tabbable paper-shadow relative" data-z="0.5">
    <!-- Tabs -->
    <ul class="nav nav-tabs">
        <li class="active"><a href="#account" data-toggle="tab"><i class="fa fa-fw fa-lock"></i> <span class="hidden-sm hidden-xs">Session Info</span></a></li>
        <li><a href="#code-s" data-toggle="tab"><i class="fa fa-code"></i> <span class="hidden-sm hidden-xs">Session Intro Video</span></a></li>
    </ul>
    <!-- // END Tabs -->
    <!-- Panes -->
    <div class="tab-content">
        <div id="account" class="tab-pane active">
            <form class="form-horizontal" method="post" action="account/session/create">
                @csrf
                <div class="form-group">
                    <label for="inputEmail3" class="col-md-3 control-label">Session Name</label>
                    <div class="col-md-9">
                        <div class="form-control-material">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" id="inputEmail3" name="name">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="start_date" class="col-md-3 control-label">Start Date</label>
                    <div class="col-md-9">
                        <div class="form-control-material">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-date"></i></span>
                                <input type="date" class="form-control" id="start_date" name="start_date">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="end_date" class="col-md-3 control-label">End Date</label>
                    <div class="col-md-9">
                        <div class="form-control-material">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-date"></i></span>
                                <input type="date" class="form-control" id="end_date" name="end_date">
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
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
        </div>
        <div id="code-s" class="tab-pane">
            <iframe class="embed-responsive-item" id="video" src="//www.youtube-nocookie.com/embed/Ycv5fNd4AeM?rel=0"></iframe>
        </div>
    </div>
    <!-- // END Panes -->
</div>
