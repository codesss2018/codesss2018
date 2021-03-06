<div class="st-pusher" id="content">
           <!-- sidebar effects INSIDE of st-pusher: -->
           <!-- st-effect-3, st-effect-6, st-effect-7, st-effect-8, st-effect-14 -->
           <!-- this is the wrapper for the content -->
           <div class="st-content">
               <!-- extra div for emulating position:fixed of the menu -->
               <div class="st-content-inner padding-none">
                   <div class="container-fluid">
                       <div class="page-section">
                           <h1 class="text-display-1">My Courses</h1>
                       </div>
                       <div class="row" data-toggle="isotope">
                           @forelse($usercourses as $key => $value)
                           <div class="item col-xs-12 col-sm-6 col-lg-4">
                               <div class="panel panel-default paper-shadow" data-z="0.5">
                                   <div class="cover overlay cover-image-full hover">
                                       <span class="img icon-block height-150 bg-default"></span>
                                       <a href="{{ route('app-editor',['sessid'=>$sessid,'courseid'=>$value->id]) }}" class="padding-none overlay overlay-full icon-block bg-default">
                                        <span class="v-center"> <i class="fa fa-github"></i></span>
                                       </a>
                                       <a href="{{ route('app-editor',['sessid'=>$sessid,'courseid'=>$value->id]) }}" class="overlay overlay-full overlay-hover overlay-bg-white">
                                           <span class="v-center">
                                           <span class="btn btn-circle btn-white btn-lg"><i class="fa fa-graduation-cap"></i></span>
                                           </span>
                                       </a>
                                   </div>
                                   <div class="panel-body">
                                       <h4 class="text-headline margin-v-0-10"><a href="{{ route('app-editor',['sessid'=>$sessid,'courseid'=>$value->id]) }}">{{$value->title}}</a></h4>
                                   </div>
                                   <hr class="margin-none" />
                                   <div class="panel-body">
                                       <a class="btn btn-white btn-flat paper-shadow relative" data-z="0" data-hover-z="1" data-animated href="{{ route('app-editor',['sessid'=>$sessid,'courseid'=>$value->id]) }}"><i class="fa fa-fw fa-pencil"></i> Edit course</a>
                                   </div>
                                   </div>
                               </div>
                               @empty
                               @endforelse

                           <div class="item col-xs-12 col-sm-6 col-lg-4">
                               <div class="panel panel-default paper-shadow" data-z="0.5">
                                   <div class="cover overlay cover-image-full hover">
                                       <span class="img icon-block height-150 bg-grey-200"></span>
                                       <a href="{{ route('app-editor',['sessid'=>$sessid]) }}" class="padding-none overlay overlay-full icon-block bg-grey-200">
                                           <span class="v-center"><i class="fa fa-plus text-grey-600"></i></span>
                                       </a>
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
