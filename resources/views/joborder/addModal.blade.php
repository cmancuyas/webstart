<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addRoleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="{{route('joborders.store')}}" method="POST">
                {{ method_field('post') }}
                {{ csrf_field() }}

                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addRoleModalLabel">Create Job Order</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Job Order Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Job Order Name">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" name="description" class="form-control" placeholder="Description">
                    </div>

                    <div class="form-group">
                        <label for="employee">Employee</label>
                        <div class="dropdown">
                            <select class="form-control{{ $errors->has('employee') ? ' is-invalid' : '' }}" name="employee">
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Status</label>
                        <div class="dropdown">
                            <select class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" name="status">
                                <option value="{{ $status->id }}">{{ $status->name }}</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Customer</label>
                        <div class="dropdown">
                            <select class="form-control{{ $errors->has('customer') ? ' is-invalid' : '' }}" name="customer">
                                <option value="">Please select a customer</option>
                                @foreach ($customers as $customer)
                                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Company From</label>
                        <div class="dropdown">
                            <select class="form-control{{ $errors->has('companyFrom') ? ' is-invalid' : '' }}" name="companyFrom">
                                <option value="">Please select a company</option>
                                @foreach ($companies as $company)
                                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Company To</label>
                        <div class="dropdown">
                            <select class="form-control{{ $errors->has('companyFrom') ? ' is-invalid' : '' }}" name="companyTo">
                                <option value="">Please select a company</option>
                                @foreach ($companies as $company)
                                    <option value="{{ $company->id }}">{{ $company->name }}</option>
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
