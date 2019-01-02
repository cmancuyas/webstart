@extends('master')

@section('title', 'Job Order Main Page')

@section('main-content')
<div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <h4><strong>Job Orders Page</strong></h4>
            </div>
            <div class="col-md-6">
                <button class="btn btn-success float-right" data-toggle="modal" data-target="#addModal"><i class="fas fa-plus"></i> Create Job Order</button>
            </div>
        </div>
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Job Order Name</th>
                <th>Description</th>
                <th>Employee Name</th>
                <th>Status</th>
                <th>Customer Name</th>
                <th>Company From</th>
                <th>Company To</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jobOrders as $jobOrder)
            <tr>
                <td>{{$jobOrder->id}}</td>
                <td>{{$jobOrder->name}}</td>
                <td>{{$jobOrder->description}}</td>
                <td><div class="btn-group">
                    <a class="btn btn-primary" role="button" data-toggle="modal" data-target="#modal-update-{{ $jobOrder->id }}">Edit</a>
                    <a class="btn btn-danger" role="button" data-toggle="modal" data-target="#modal-delete-{{ $jobOrder->id }}">Delete
                    </a>
                </div></td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>

<nav>
    <ul class="pagination justify-content-end">
        {{$jobOrders->links('vendor.pagination.bootstrap-4')}}
    </ul>
</nav>
{{-- Add Role Modal --}}
@include('joborder.addModal')

@forelse($jobOrders as $jobOrder)
    @include('joborder.editModal')
    {{-- Delete joborder Modal --}}
    @include('joborder.deleteModal')
@empty

@endforelse

@endsection
