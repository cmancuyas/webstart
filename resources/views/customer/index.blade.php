@extends('master')

@section('title', 'Customers Main Page')

@section('main-content')
<div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <h4><strong>Customers Page</strong></h4>
            </div>
            <div class="col-md-6">
                <button class="btn btn-success float-right" data-toggle="modal" data-target="#addModal"><i class="fas fa-plus"></i>Add customer</button>
            </div>
        </div>
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Company Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
            <tr>
                <td>{{$customer->id}}</td>
                <td>{{$customer->name}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->phone}}</td>
                <td>{{$customer->address}}</td>
                <td>{{$customer->company->name}}</td>

                <td><div class="btn-group">
                    <a class="btn btn-primary" role="button" data-toggle="modal" data-target="#modal-update-{{ $customer->id }}">Edit</a>
                    <a class="btn btn-danger" role="button" data-toggle="modal" data-target="#modal-delete-{{ $customer->id }}">Delete
                    </a>
                </div></td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>

<nav>
    <ul class="pagination justify-content-end">
        {{$customers->links('vendor.pagination.bootstrap-4')}}
    </ul>
</nav>

{{-- Add customer Modal --}}
@include('customer.addModal')

@forelse($customers as $customer)
    @include('customer.editModal')
    {{-- Delete customer Modal --}}
    @include('customer.deleteModal')
@empty

@endforelse

@endsection
