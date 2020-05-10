<div id="create_message_modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content text-left">
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title">Compose Message</h5>
            </div>

            <form action="{{route('notification.create')}}" method="POST" class="form-validate form-horizontal">
                {{ csrf_field() }}
                {{method_field('POST')}}
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label col-sm-3">Select Groups</label>
                        <div class="col-sm-9">
                            <select multiple="multiple" data-placeholder="Select a group" class="select-group" name="role_ids[]">
                                @if(count(\App\Http\Controllers\Notifications\NotificationHelper::getAllRoles()) > 0)
                                    @foreach(\App\Http\Controllers\Notifications\NotificationHelper::getAllRoles() as $role)
                                        <option value="{{ $role->id }}" data-icon="users4">{{ $role->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3">Select Users</label>
                        <div class="col-sm-9">
                            <select multiple="multiple" data-placeholder="Select a group" class="select-group" name="user_ids[]">
                                @if(count(\App\Http\Controllers\Notifications\NotificationHelper::getAllUsers()) > 0)
                                    @foreach(\App\Http\Controllers\Notifications\NotificationHelper::getAllUsers() as $user)
                                        <option value="{{ $user->user_id }}" data-icon="user">{{ $user->name_with_initials }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3">Title</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="Title" class="form-control" name="message_title">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3">Subject</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="Subject" class="form-control" name="subject">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3">Message</label>
                        <div class="col-sm-9">
                            <textarea name="message_body" class="form-control" id="" cols="30" rows="5"
                                      placeholder="Enter your message here.."></textarea>
                        </div>
                    </div>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Send<i class="icon-paperplane position-right"></i>
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>


