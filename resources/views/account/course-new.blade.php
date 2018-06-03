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
                    
                    <!-- Panes -->
                    <div class="tab-content">
                        <div id="course" class="tab-pane active">
                            <form action="" method="post" id="newDescForm">
                                <input type="hidden" name="session_id" value="{{$sessid}}">
                                <div class="form-group form-control-material">
                                    <input type="text" name="title" id="title" placeholder="Course Title" class="form-control used" value="Basics of HTML" />
                                    <label for="title">Title</label>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" cols="30" rows="10" class="summernote">Give a summary intro about the course here ...</textarea>
                                </div>
                            </form>
                            <div class="text-right">
                                <a href="#" class="btn btn-primary" id="newDescBtn">Save</a>
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
