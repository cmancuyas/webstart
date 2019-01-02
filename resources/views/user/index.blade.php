@extends('master')

@section('title', 'Users Main Page')

@section('main-content')
<div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <h4><strong>Users/Employees Page</strong></h4>
            </div>
            <div class="col-md-6">
                <button class="btn btn-success float-right" data-toggle="modal" data-target="#addModal"><i class="fas fa-plus"></i>Add user</button>
            </div>
        </div>
        <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 10px">#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Type</th>
                <th>Department</th>
                <th>Action</th>
            </tr>
    </thead>
        <tbody>
                @foreach ($users as $user)
                <tr>

                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>

                        @foreach ($user->roles as $role)
                        <td>{{$role->name}}</td>
                        @endforeach
                        @foreach ($user->departments as $department)
                        <td>{{$department->name}}</td>
                        @endforeach
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-primary" role="button" data-toggle="modal" data-target="#modal-update-{{ $user->id }}">Edit</a>
                                <a class="btn btn-danger" role="button" data-toggle="modal" data-target="#modal-delete-{{ $user->id }}">Delete</a>
                            </div>
                        </td>


                </tr>
                @endforeach
        </tbody>
    </table>
</div>

<nav>
    <ul class="pagination justify-content-end">
        {{$users->links('vendor.pagination.bootstrap-4')}}
    </ul>
</nav>

{{-- Add user Modal --}}
@include('user.addModal')

@forelse($users as $user)
    @include('user.editModal')
    {{-- Delete user Modal --}}
    @include('user.deleteModal')
@empty

@endforelse

@endsection
