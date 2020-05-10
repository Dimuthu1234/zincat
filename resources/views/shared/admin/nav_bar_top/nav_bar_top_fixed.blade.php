<!-- Main navbar -->
<div class="navbar navbar-inverse bg-success-800">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ route('home') }}">
            {{config('app.name')}}
        </a>

        <ul class="nav navbar-nav visible-xs-block">
            <li>
                <a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a>
            </li>
            <li>
                <a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a>
            </li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li>
                <a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a>
            </li>
        </ul>

        <div class="navbar-right">

{{--            @if(\Illuminate\Support\Facades\Auth::user())--}}
                <p class="navbar-text">Hello, !</p>
                <p class="navbar-text">
                    <span class="label bg-warning-300">{{ Auth::user()->name }}</span>
                </p>
{{--            @endif--}}

            <ul class="nav navbar-nav">

                <!-- logout button -->
{{--                <li class="dropdown">--}}
{{--                    <a href="{{ route('admin.logout') }}" onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();"--}}
{{--                       class="dropdown-toggle legitRipple">--}}
{{--                        <i class="icon-switch"></i>--}}
{{--                        <span class="visible-xs-inline-block position-right">Logout</span>--}}
{{--                    </a>--}}

{{--                    <form id="logout-form" action="{{ route('admin.logout') }}" method="GET" style="display: none;">--}}
{{--                        {{ csrf_field() }}--}}
{{--                    </form>--}}
{{--                </li>--}}

                <li class="dropdown">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                       class="dropdown-toggle legitRipple">
                        <i class="icon-switch"></i>
                        <span class="visible-xs-inline-block position-right">Logout</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
                <!-- end of logout button -->
            </ul>

        </div>
    </div>
</div><!-- /main navbar -->




