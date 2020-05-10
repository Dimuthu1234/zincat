<li @if(Request::segment(1) == $path || Request::segment(2) == $path || ($path == 'alerts_path'&& isset($_GET['type']) && $_GET['type'] == $alert_id)) class="active" @endif>
    <a href="{{(isset($href)) ? $href : route($route, (isset($prams)?$prams : [])) }}">@if(isset($icon))<i class="{{$icon}}"></i> <span>{{$name}}</span>@endif</a>
</li>
