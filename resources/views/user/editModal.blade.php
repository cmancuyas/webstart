<div class="modal fade" id="modal-update-{{ $user->id }}" tabIndex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit User</h4>
                    <button type="button" class="close" data-dismiss="modal">
                    &times;
                    </button>

                </div>
                <form method="POST" action="{{ action('UsersController@update', $user->id) }}">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $user->name}}">
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password"
                            value="{{ $user->password}}"
                            >
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Email" value="{{ $user->email}}">
                        </div>

                        <div class="form-group">
                            <label for="">Role</label>
                            <div class="dropdown">
                                <select class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}" name="role">
                                    @foreach ($allRoles as $allRole)
                                        @if ($allRole->id == $role->id)
                                        <option selected value="{{ $role->id }}">{{ $role->name }}</option>
                                        @else
                                        <option value="{{ $allRole->id }}">{{ $allRole->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Department</label>
                            <div class="dropdown">
                                <select class="form-control{{ $errors->has('department') ? ' is-invalid' : '' }}" name="department">
                                    @foreach ($allDepts as $allDept)
                                        @if ($allDept->id == $department->id)
                                        <option selected value="{{ $department->id }}">{{ $department->name }}</option>
                                        @else
                                        <option value="{{ $allDept->id }}">{{ $allDept->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="PATCH">
                        <button type="button" class="btn btn-default"
                                data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-times-circle"></i> Update
                        </button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
