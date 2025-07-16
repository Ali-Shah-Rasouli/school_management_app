@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title "> <strong>Create a new Class Category</strong></h3></div>
                </div>

                <div class="card-body">
                    <a href="{{route('users.index')}}" class="btn btn-secondary m-2">Back</a>
                    <form action="{{ route('admin.classcategory.store') }}" method="POST">
                        @csrf
                        <label for="name">Class Category</label>
                        <input type="text" name="ccategory" placeholder="Enter class category" class="form-control m-2">

                        <button class="btn btn-success"> Add Class Category </button>

                    </form>


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