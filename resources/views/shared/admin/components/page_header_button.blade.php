<a href="{{(isset($href)) ? $href : route($route, (isset($prams)?$prams : []))}}" class="btn btn-link btn-float text-size-small has-text"><i class="icon-plus-circle2 text-danger"></i><span>{{$label}}</span></a>