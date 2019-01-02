@extends('master')

@section('title', 'Company Main Page')

@section('main-content')
<div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <h4><strong>Companies Page</strong></h4>
            </div>
            <div class="col-md-6">
                <button class="btn btn-success float-right" data-toggle="modal" data-target="#addModal"><i class="fas fa-plus"></i>Add Company</button>
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
            @foreach ($companies as $company)
            <tr>
                <td>{{$company->id}}</td>
                <td>{{$company->name}}</td>
                <td><div class="btn-group">
                    <a class="btn btn-primary" role="button" data-toggle="modal" data-target="#modal-update-{{ $company->id }}">Edit</a>
                    <a class="btn btn-danger" role="button" data-toggle="modal" data-target="#modal-delete-{{ $company->id }}">Delete
                    </a>
                </div></td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>

<nav>
    <ul class="pagination justify-content-end">
        {{$companies->links('vendor.pagination.bootstrap-4')}}
    </ul>
</nav>

{{-- Add company Modal --}}
@include('company.addModal')

@forelse($companies as $company)
    @include('company.editModal')
    {{-- Delete company Modal --}}
    @include('company.deleteModal')
@empty

@endforelse

@endsection
