{{-- Confirm Delete --}}
<div class="modal fade" id="modal-delete-{{ $role->id }}" tabIndex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                    <h4 class="modal-title">Delete Role</h4>
                <button type="button" class="close" data-dismiss="modal">
                &times;
                </button>

            </div>
            <div class="modal-body">
                <p class="lead">
                <i class="fa fa-question-circle fa-lg"></i>
                Are you sure you want to delete this Role?
                </p>
            </div>
            <div class="modal-footer">
                <form method="POST" action="{{ route('roles.destroy', $role->id) }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="DELETE">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">
                    <i class="fa fa-times-circle"></i> Yes
                </button>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
