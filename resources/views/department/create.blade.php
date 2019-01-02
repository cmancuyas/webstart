@extends('master')

@section('title', 'Create Department')

@section('main-content')
<form action="{{ action('DepartmentsController@store')}}" method="POST">
    @csrf
    @method('PUT')
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Add Department</h5>
                {{-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> --}}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Department Name">
                </div>

                <div class="form-group">
                    <label for="description">Department</label>
                    <input type="text" name="description" class="form-control" placeholder="Short Description">
                </div>

                <button type="submit" class="btn btn-danger">Add</button>
                <a href="/departments" class="btn btn-info">Back</a>
            </div>
        </div>
    </div>
</form>
@endsection
