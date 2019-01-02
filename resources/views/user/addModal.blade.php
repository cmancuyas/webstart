<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="{{route('users.store')}}" method="POST">
                {{ method_field('post') }}
                {{ csrf_field() }}

                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Add User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>

                    <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <label for="">Account Type</label>
                        <div class="dropdown">
                            <select class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}" name="role">
                                    <option value="">Please select your Account Type</option>
                                @foreach ($allRoles as $allRole)
                                <option value="{{ $allRole->id }}">{{ $allRole->name }} - {{ $allRole->description }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Department</label>
                        <div class="dropdown">
                            <select class="form-control{{ $errors->has('department') ? ' is-invalid' : '' }}" name="department">
                                    <option value="">Please select your Department</option>
                                @foreach ($allDepts as $allDept)
                                    <option value="{{ $allDept->id }}">{{ $allDept->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger" id="delete-btn">Add</button>
                </div>
            </form>
            </div>
        </div>
    </div>
