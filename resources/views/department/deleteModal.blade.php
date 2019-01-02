<!-- Modal -->
<div class="modal fade" id="deleteDeptModal" tabindex="-1" role="dialog" aria-labelledby="deleteDeptModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{route('departments.destroy', $department->id)}}" method="POST">
            {{ method_field('delete') }}
            {{ csrf_field() }}

            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteDeptModalLabel">Delete Department</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this department? <?php echo $department->name?>
                <input type="hidden" name="department_id" id="dept_id">
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger" id="delete-btn">Delete</button>
            </div>
        </form>
        </div>
    </div>
</div>
