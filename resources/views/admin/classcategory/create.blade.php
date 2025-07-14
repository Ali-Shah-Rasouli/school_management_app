@extends('layouts.app')
@section('title', ' Class Category')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title "> <strong>Create a class Category</strong></h3></div>
                </div>

                <div class="card-body">
                    <a href="{{route('users.index')}}" class="btn btn-secondary m-2">Back</a>
                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf
                        <label for="name">Name</label>
                        <input type="text" name="name" placeholder="Enter your Name" class="form-control m-2">
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Enter your Email" class="form-control m-2">
                        <label for="name">Password</label>
                        <input type="password" name="password" placeholder="Enter your Password" class="form-control m-2">
                        <button class="btn btn-success"> Add Class Category </button>

                    </form>


                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- {{ __('You are logged in!') }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection