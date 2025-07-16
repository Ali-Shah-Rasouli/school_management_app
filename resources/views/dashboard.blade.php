@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-3xl font-bold text-gray-800 text-center">Dashboard of The System</h1>
                        <p class="text-gray-800 text-center">Welcome back, {{ auth()->user()->name }}!</p>
                </div>

                <div class="card-body">
                    <div class="row mt-3 mb-5 ">

                        <a href="{{route('users.index')}}" class="btn btn-primary col-2 m-2">Manage Users</a>
                        <a class="btn btn-success col-2 m-2">Manage Teachers</a>
                        <a class="btn btn-info text-white col-2 m-2">Manage Students</a>
                        <a href="{{route('admin.classcategory.index')}}" class="btn btn-secondary col-2 m-2">Manage Classes</a>


                    </div>
                    

                    

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <P>Navigate to the desired section by clicking on it !</P>
                    {{-- {{ __('Navigate to the desired section by clicking on it !') }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
