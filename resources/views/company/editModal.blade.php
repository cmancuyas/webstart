{{-- Confirm Delete --}}
<div class="modal fade" id="modal-update-{{ $company->id }}" tabIndex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Company</h4>
                    <button type="button" class="close" data-dismiss="modal">
                    &times;
                    </button>

                </div>
                <form method="POST" action="{{ action('CompaniesController@update', $company->id) }}">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $company->name}}">
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
