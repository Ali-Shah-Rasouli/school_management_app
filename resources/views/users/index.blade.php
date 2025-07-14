@extends('layouts.app')
@section('title', 'Manage Users')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title text-center text-primary"> <strong>User Management Section </strong></h3></div>
                </div>

                <div class="card-body">
                    <a href="{{route('users.create')}}" class="btn btn-primary mt-2 mb-3">Add User</a>
                    <a href="{{route('dashboard')}}" class="btn btn-secondary mt-2 mb-3">Back To Dashboard</a>
                  <table class="table table-striped">
                    <thead class="table-dark">
                        <tr class="">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th width ="280px" class="text-center justify-items-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach ($users as $user )
                         <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>    <a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-info">Show User</a>
                                    <a href="" class="btn btn-primary btn-sm text-white">Edit User</a>
                                    <a href="" class="btn btn-danger btn-sm text-white">Delete User</a>
                            </td>
                         </tr>
                     @endforeach
                    </tbody>
                  </table>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
