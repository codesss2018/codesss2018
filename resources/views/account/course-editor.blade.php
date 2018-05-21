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
                        <li class="active"><a href="#course" data-toggle="tab"><i class="fa fa-fw fa-lock"></i> <span class="hidden-sm hidden-xs">Course</span></a></li>
                        <li><a href="#meta" data-toggle="tab"><i class="fa fa-fw fa-credit-card"></i> <span class="hidden-sm hidden-xs">Meta</span></a></li>
                        <li><a href="#lessons" data-toggle="tab"><i class="fa fa-fw fa-credit-card"></i> <span class="hidden-sm hidden-xs">Lessons</span></a></li>
                    </ul>
                    <!-- // END Tabs -->
                    <!-- Panes -->
                    <div class="tab-content">
                        <div id="course" class="tab-pane active">
                            <form action="">
                                <div class="form-group form-control-material">
                                    <input type="text" name="title" id="title" placeholder="Course Title" class="form-control used" value="Basics of HTML" />
                                    <label for="title">Title</label>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" cols="30" rows="10" class="summernote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae consectetur dignissimos itaque nesciunt nostrum, provident saepe similique. Delectus dicta distinctio quibusdam velit veniam? Aperiam cum dignissimos doloremque officiis quisquam velit!</textarea>
                                </div>
                            </form>
                            <div class="text-right">
                                <a href="#" class="btn btn-primary">Save</a>
                            </div>
                        </div>
                        <div id="meta" class="tab-pane">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="select" class="col-sm-3 control-label">Category</label>
                                    <div class="col-sm-9 col-md-9">
                                        <select id="select" class="form-control select2">
                                            <option value="#">HTML</option>
                                            <option value="#">Angular JS</option>
                                            <option value="#">CSS / LESS</option>
                                            <option value="#">Design / Concept</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="duration" class="col-sm-3 control-label">Course Duration</label>
                                    <div class="col-sm-4 col-md-2">
                                        <input type="text" class="form-control" placeholder="No. of Days" value="10">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="start" class="col-sm-3 control-label">Start Date</label>
                                    <div class="col-sm-9 col-md-4">
                                        <input id="datepicker" type="text" class="form-control datepicker">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="end" class="col-sm-3 control-label">End Date</label>
                                    <div class="col-sm-9 col-md-4">
                                        <input id="datepicker" type="text" class="form-control datepicker">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="lessons" class="tab-pane">
                            <div class="media v-middle s-container">
                                <div class="media-body">
                                    <h5 class="text-subhead text-light">3 Lessons</h5>
                                </div>
                                <div class="media-right">
                                    <a class="btn btn-primary paper-shadow relative" href="">Add lesson</a>
                                </div>
                            </div>
                            <div class="nestable" id="nestable-handles-primary">
                                <ul class="nestable-list">
                                    <li class="nestable-item nestable-item-handle" data-id="1">
                                        <div class="nestable-handle"><i class="md md-menu"></i></div>
                                        <div class="nestable-content">
                                            <div class="media v-middle">
                                                <div class="media-left">
                                                    <div class="icon-block half bg-red-400 text-white">
                                                        <i class="fa fa-github"></i>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="text-title media-heading margin-none">
                                                        <a href="" class="link-text-color">Github Webhooks for Beginners</a>
                                                    </h4>
                                                    <div class="text-caption">updated 1 month ago</div>
                                                </div>
                                                <div class="media-right">
                                                    <a href="" class="btn btn-white btn-flat"><i class="fa fa-pencil fa-fw"></i> Edit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nestable-item nestable-item-handle" data-id="2">
                                        <div class="nestable-handle"><i class="md md-menu"></i></div>
                                        <div class="nestable-content">
                                            <div class="media v-middle">
                                                <div class="media-left">
                                                    <div class="icon-block half bg-blue-400 text-white">
                                                        <i class="fa fa-css3"></i>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="text-title media-heading margin-none">
                                                        <a href="" class="link-text-color">Awesome CSS with LESS Processing</a>
                                                    </h4>
                                                    <div class="text-caption">updated 1 month ago</div>
                                                </div>
                                                <div class="media-right">
                                                    <a href="" class="btn btn-white btn-flat"><i class="fa fa-pencil fa-fw"></i> Edit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nestable-item nestable-item-handle" data-id="2">
                                        <div class="nestable-handle"><i class="md md-menu"></i></div>
                                        <div class="nestable-content">
                                            <div class="media v-middle">
                                                <div class="media-left">
                                                    <div class="icon-block half bg-purple-400 text-white">
                                                        <i class="fa fa-jsfiddle"></i>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="text-title media-heading margin-none">
                                                        <a href="" class="link-text-color">Browserify: Writing Modular JavaScript</a>
                                                    </h4>
                                                    <div class="text-caption">updated 1 month ago</div>
                                                </div>
                                                <div class="media-right">
                                                    <a href="" class="btn btn-white btn-flat"><i class="fa fa-pencil fa-fw"></i> Edit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
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
