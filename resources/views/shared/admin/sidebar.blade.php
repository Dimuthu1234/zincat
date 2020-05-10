<div class="sidebar sidebar-main sidebar-default">
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user-material">
            <div class="category-content">


                <div class="sidebar-user-material-content">
                    <div class="text-center">
                        <img src="{{ url('images/logo.png') }}" alt="logo" width="100">
                    </div>
                    {{--                    <h6 style="color:#000;">{{ \Illuminate\Support\Facades\Auth::user()->name }}</h6>--}}
                    <span style="color:#000;" class="text-size-small">
                   {{ Auth::user()->name }}

                    </span>


                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">

                    <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Page kits"></i></li>

                    <li {{ Request::path() == '/user' ? 'class=active' : '' }}>
                        <a href="{{ route('user.index') }}"><i class="icon-user"></i>
                            <span>Users</span></a>
                    </li>
                    <li {{ Request::path() == '/front-end' ? 'class=active' : '' }}>
                        <a href="#"><i class="icon-basket"></i>
                            <span>Front-ends</span></a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="icon-switch2"></i>
                            <span>Logout</span>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            {{ csrf_field() }}
                        </form>

                    </li>
                    <!-- /page kits -->
                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div><!-- /main sidebar -->
