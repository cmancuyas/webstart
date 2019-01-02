{{-- Confirm Delete --}}
<div class="modal fade" id="modal-update-{{ $customer->id }}" tabIndex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Customer</h4>
                    <button type="button" class="close" data-dismiss="modal">
                    &times;
                    </button>

                </div>
                <form method="POST" action="{{ action('CustomersController@update', $customer->id) }}">
                    <div class="modal-body">
                            <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $customer->name }}">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $customer->email }}">
                                </div>

                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ $customer->phone }}">
                                </div>

                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" class="form-control" placeholder="Address" value="{{ $customer->address }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Company</label>
                                    <div class="dropdown">
                                        <select class="form-control{{ $errors->has('company') ? ' is-invalid' : '' }}" name="company">
                                                <option value="">Please select your Company</option>
                                            @foreach ($companies as $company)
                                                @if ($customer->company->id == $company->id)
                                                <option selected value="{{ $customer->company->id }}">{{ $customer->company->name }}</option>
                                                @else
                                                <option value="{{ $company->id }}">{{ $company->name }}</option>
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
