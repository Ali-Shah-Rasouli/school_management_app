@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title text-center text-primary"> <strong>User Management Section</strong></h3></div>
                </div>

                <div class="card-body">
                    <a href="{{route('users.create')}}" class="btn btn-primary mt-2 mb-3">Add User</a>
                  <table class="table table-striped">
                    <thead class="table-dark">
                        <tr class="">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach ($users as $user )
                         <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td> <a href="" class="button bg-primay">Show User</a></td>
                            <td> <a href="" class="button bg-primay">Edit User</a></td>
                            <td> <a href="" class="button bg-primay">Delete User</a></td>
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
