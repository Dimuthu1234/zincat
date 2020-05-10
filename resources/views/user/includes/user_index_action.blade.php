<ul class="icons-list">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="icon-menu9"></i></a>
        <ul class="dropdown-menu dropdown-menu-right">
                <li>
                    <a href="#"
                       onclick="event.preventDefault(); $('#edit_user_{{$user->id}}').submit()"><i
                            class="icon-user-check"></i>Edit
                        User</a>
                </li>
            @if(Auth::user()->id != $user->id)
                <li>
                    <a href="#"
                       onclick="event.preventDefault(); if(confirm('Are you sure?')){$('#delete_user_{{$user->id}}').submit()}"><i
                            class="icon-user-block"></i>Delete
                        User</a>
                </li>
            @endif
        </ul>


        <form action="{{route('user.edit',['user'=> $user->id])}}"
              method="post" id="edit_user_{{$user->id}}">
            {{csrf_field()}}
            {{method_field('GET')}}
        </form>

        <form action="{{route('user.destroy',['user'=> $user->id])}}"
              method="post" id="delete_user_{{$user->id}}">
            {{csrf_field()}}
            {{method_field('DELETE')}}
        </form>
    </li>
</ul>


