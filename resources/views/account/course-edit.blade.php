<div class="st-pusher" id="content">
    <!-- sidebar effects INSIDE of st-pusher: -->
    <!-- st-effect-3, st-effect-6, st-effect-7, st-effect-8, st-effect-14 -->
    <!-- this is the wrapper for the content -->
    <div class="st-content">
        <!-- extra div for emulating position:fixed of the menu -->
        <div class="st-content-inner padding-none">
            <div class="container-fluid">
                <div class="page-section">
                    <h1 class="text-display-1">Create New Course</h1>
                </div>
                <!-- Tabbable Widget -->
                <div class="tabbable paper-shadow relative" data-z="0.5">
                    <!-- Tabs -->
                    <ul class="nav nav-tabs">
                        <li><a href="#course" data-toggle="tab"><i class="fa fa-fw fa-lock"></i> <span class="hidden-sm hidden-xs">Course</span></a></li>
                        <li><a href="#meta" data-toggle="tab"><i class="fa fa-fw fa-credit-card"></i> <span class="hidden-sm hidden-xs">Meta</span></a></li>
                        <li class="active"><a href="#lessons" data-toggle="tab"><i class="fa fa-fw fa-credit-card"></i> <span class="hidden-sm hidden-xs">Lessons</span></a></li>
                    </ul>
                    <!-- // END Tabs -->
                    <!-- Panes -->
                    <div class="tab-content">
                        <div id="course" class="tab-pane">
                            <form action="" method="post" id="editDescForm">
                                <div class="form-group form-control-material">
                                    <input type="text" name="title" id="title" placeholder="Course Title" class="form-control used" value="{{$course->title}}L" />
                                    <label for="title">Title</label>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" cols="30" rows="10" class="summernote">{{$course->description}}</textarea>
                                </div>
                            </form>
                            <div class="text-right">
                                <a href="#" class="btn btn-primary" id="editDescBtn">Save</a>
                            </div>
                        </div>
                        <div id="meta" class="tab-pane">
                            <form class="form-horizontal">

                                <div class="form-group">
                                    <label for="videoinput" class="col-sm-3 control-label">Course Introductory Video</label>
                                    <div class="col-sm-9">
                                        <input id="videoinput" type="text" class="form-control" placeholder="Paste Youtube video link here ..." value="{{$course->code}}">
                                    </div>

                                </div>
                                <iframe class="embed-responsive-item" id="video" src=""></iframe>
                            </form>
                            <div class="text-right">
                                <a href="#" class="btn btn-primary">Save</a>
                            </div>
                        </div>
                        <div id="lessons" class="tab-pane active">
                            <div class="media v-middle s-container">
                                <div class="media-body">
                                    <h5 class="text-subhead text-light"></h5>
                                </div>
                                <div class="media-right">
                                    <a class="btn btn-primary paper-shadow relative addlesson" href="#">Add lesson</a>
                                </div>
                            </div>
                            <div class="nestable" id="nestable-handles-primary">
                                <ul class="nestable-list" id="tutorial">
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- // END Panes -->
                </div>
                <!-- // END Tabbable Widget -->
            </div>
        </div>
        <!-- /st-content-inner -->
    </div>
    <!-- /st-content -->
</div>
