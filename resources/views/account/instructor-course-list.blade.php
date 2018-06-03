<div class="container">
       <div class="page-section">
           <div class="row">
               <div class="col-md-9">
                   <div class="row" data-toggle="isotope">
                       @forelse($usercourses as $key => $value)
                       <div class="item col-xs-12 col-sm-6 col-lg-4">
                           <div class="panel panel-default paper-shadow" data-z="0.5">
                               <div class="cover overlay cover-image-full hover">
                                   <span class="img icon-block height-150 bg-default"></span>
                                   <a href="" class="padding-none overlay overlay-full icon-block bg-default">
                                       <span class="v-center"><i class="fa fa-github"></i></span>
                                   </a>
                                   <a href="{{ route('dashboard-editor',['courseid'=>$value->id]) }}" class="overlay overlay-full overlay-hover overlay-bg-white">
                                       <span class="v-center">
                                       <span class="btn btn-circle btn-white btn-lg"><i class="fa fa-graduation-cap"></i></span>
                                       </span>
                                   </a>
                               </div>
                               <div class="panel-body">
                                   <h4 class="text-headline margin-v-0-10"><a href="{{ route('dashboard-editor',['courseid'=>$value->id]) }}">{{ $value->title }}</a></h4>
                               </div>
                               <hr class="margin-none" />
                               <div class="panel-body">
                                   <a class="btn btn-white btn-flat paper-shadow relative" data-z="0" data-hover-z="1" data-animated href="{{ route('dashboard-editor',['courseid'=>$value->id]) }}"><i class="fa fa-fw fa-pencil"></i> Edit course</a>
                               </div>
                           </div>
                       </div>
                   @empty
                       You haven't created any course yet, you can only create courses within sessions that you've been registered for ...
                   @endforelse
                   </div>
                   
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
