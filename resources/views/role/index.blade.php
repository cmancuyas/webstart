@extends('master')

@section('title', 'Roles Page')

@section('main-content')
<div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <h4><strong>Roles Page</strong></h4>
            </div>
            <div class="col-md-6">
                <button class="btn btn-success float-right" data-toggle="modal" data-target="#addRoleModal"><i class="fas fa-plus"></i>Add Role</button>
            </div>
        </div>
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $role)
            <tr>
                <td>{{$role->id}}</td>
                <td>{{$role->name}}</td>
                <td>{{$role->description}}</td>
                <td><div class="btn-group">
                    <a class="btn btn-primary" role="button" data-toggle="modal" data-target="#modal-update-{{ $role->id }}">Edit</a>

                    <a class="btn btn-danger" role="button" data-toggle="modal" data-target="#modal-delete-{{ $role->id }}">Delete
                    </a>
                </div></td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>

<nav>
    <ul class="pagination justify-content-end">
        {{$roles->links('vendor.pagination.bootstrap-4')}}
    </ul>
</nav>
{{-- Add Role Modal --}}
@include('role.addModal')

@forelse($roles as $role)
    @include('role.editModal')
    {{-- Delete Role Modal --}}
    @include('role.deleteModal')
@empty

@endforelse

@endsection



