@extends('master')

@section('title', 'Department Page')

@section('main-content')

<div class="card">
<div class="card-header">
    <h3 class="card-title">Departments Page</h3>
</div>
<!-- /.card-header -->
<div class="card-body">

        <a href="{{ action('DepartmentsController@create')}}" class="btn btn-success float-right">
        <i class="fas fa-plus"></i>
            Add Department
        </a>

        <a href="{{ action('DepartmentsController@deleteAll')}}" class="btn btn-dark float-right">
            <i class="fas fa-trash-alt"></i>
            Delete All
        </a>

    <table class="table table-bordered">

    <tbody>
    <tr>
        <th style="width: 10px">#</th>
        <th>Name</th>
        <th>Description</th>
        <th>Action</th>
    </tr>
    @foreach ($departments as $department)
        <tr>
            <td>{{ $department->id }}</td>
            <td>{{ $department->name}}</td>
            <td>{{ $department->description}}</td>
            <td>
                <a href="/departments/{{ $department->id }}/edit" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                <!-- Button trigger modal -->
                <button class="btn btn-danger deleteDept" data-department_id="{{$department->id}}"><i class="fas fa-trash-alt"></i></button>
            </td>
        </tr>

    @endforeach

    </tbody>
</table>
</div>
<div class="pagination">
{{ $departments->links()}}
</div>
</div>


@forelse($departments as $department)
    {{-- Delete Role Modal --}}
    @include('department.deleteModal')
@empty

@endforelse



@endsection


@section('js')
<script>
$(document).on('click','.deleteDept',function(){
    var deptID = $(this).attr('data-department_id');
    $('#dept_id').val(deptID);
    $('#deleteDeptModal').modal('show');
});
</script>

@endsection


