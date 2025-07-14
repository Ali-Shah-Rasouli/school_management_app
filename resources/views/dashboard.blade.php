@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-3xl font-bold text-gray-800">Dashboard of The System</h1>
                        <p class="text-gray-800 text-center">Welcome back, {{ auth()->user()->name }}!</p>
                </div>

                <div class="card-body">
                    <div class="row mt-3 mb-5">

                        <a href="{{route('users.index')}}" class="btn btn-primary col-2 m-2">Manage Users</a>
                        <button class="btn btn-primary col-2 m-2">Manage Teachers</button>
                        <button class="btn btn-primary col-2 m-2">Manage Students</button>
                        <button class="btn btn-primary col-2 m-2">Manage Yourself</button>


                    </div>
                    

              


                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Navigate to the desired section by clicking on it !') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
