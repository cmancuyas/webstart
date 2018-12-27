@extends('master')

@section('title', 'Users Page')

@section('main-content')

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Users Table</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">

        <tbody>
          <tr>
            <th style="width: 10px">#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
          </tr>

          <tr>
              @foreach ($users as $user)
              <td>{{$user->id}}</td>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>
                  <a href="" class="btn btn-info">Show</a>
                  <a href="" class="btn btn-warning">Edit</a>
                  <button class="btn btn-danger">Delete</button>
              </td>
              @endforeach

          </tr>

       </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
        {{ $users->links() }}
    </div>
  </div>

@endsection
