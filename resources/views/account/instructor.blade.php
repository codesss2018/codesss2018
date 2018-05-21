<!-- Sidebar component with st-effect-1 (set on the toggle button within the navbar) -->
        <div class="sidebar left sidebar-size-3 sidebar-offset-0 sidebar-visible-desktop sidebar-visible-mobile sidebar-skin-dark" id="sidebar-menu" data-type="collapse">
            <div data-scrollable>
                <div class="sidebar-block">
                    <div class="profile">
                        <a href="#">
                            <img src="{{ asset('images/people/110/guy-6.jpg') }}" alt="people" class="img-circle width-80" />
                        </a>
                        <h4 class="text-display-1 margin-none">Instructor Name</h4>
                    </div>
                </div>
                <ul class="sidebar-menu">
                    <li class="active"><a href="{{ route('session',['sessid'=>1]) }}"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
                    <li><a href="{{ route('session-courses', ['sessid'=>1]) }}"><i class="fa fa-mortar-board"></i><span>My Courses</span></a></li>
                    <li><a href="{{ route('comments',['sessid'=>1]) }}"><i class="fa fa-paper-plane"></i><span>Forum</span></a></li>
                </ul>
            </div>
        </div>
