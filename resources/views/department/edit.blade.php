@extends('master')

@section('title', 'Update Department')

@section('main-content')
<form action="{{ action('DepartmentsController@update', $department->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Update Department</h5>
                {{-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> --}}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Department Name" value="{{ $department->name}}">
                </div>

                <div class="form-group">
                    <label for="description">Department</label>
                    <input type="text" name="description" class="form-control" placeholder="Short Description" value="{{$department->description}}">
                </div>

                <button type="submit" class="btn btn-primary">Edit</button>
                <a href="/departments" class="btn btn-light">Back</a>
            </div>
        </div>
    </div>
</form>
@endsection
