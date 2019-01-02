@extends('master')

@section('title', 'Status Main Page')

@section('main-content')
<div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <h4><strong>Statuses Page</strong></h4>
            </div>
            <div class="col-md-6">
                <button class="btn btn-success float-right" data-toggle="modal" data-target="#addModal"><i class="fas fa-plus"></i>Add Status</button>
            </div>
        </div>
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($statuses as $status)
            <tr>
                <td>{{$status->id}}</td>
                <td>{{$status->name}}</td>
                <td><div class="btn-group">
                    <a class="btn btn-primary" role="button" data-toggle="modal" data-target="#modal-update-{{ $status->id }}">Edit</a>
                    <a class="btn btn-danger" role="button" data-toggle="modal" data-target="#modal-delete-{{ $status->id }}">Delete
                    </a>
                </div></td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>

<nav>
    <ul class="pagination justify-content-end">
        {{$statuses->links('vendor.pagination.bootstrap-4')}}
    </ul>
</nav>

{{-- Add status Modal --}}
@include('status.addModal')

@forelse($statuses as $status)
    @include('status.editModal')
    {{-- Delete status Modal --}}
    @include('status.deleteModal')
@empty

@endforelse

@endsection
