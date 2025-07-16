@extends('layouts.app')
@section('title', ' Manage Classes ')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title text-center text-primary"> <strong> CLASS CATEGORY MANAGEMENT SECTION</strong></h3></div>
                </div>

                <div class="card-body">
                    <a href="{{route('admin.classcategory.create')}}" class="btn btn-primary mt-2 mb-3">Add Class Category</a>
                    <a href="{{route('dashboard')}}" class="btn btn-dark mt-2 mb-3"> Back To Dashboard</a>
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
                     @foreach ($classcategories as $classcategory )
                         <tr>
                            <td>{{$classcategory->id}} </td>
                            <td>{{$classcategory->name}} </td>
                            <td>{{$classcategory->email}}</td>
                            <td>    <a href="{{ route('admin.classcategory.index', $classcategory->id) }}" class="btn btn-sm btn-info">Show Class Category</a>
                                    <a href="" class="btn btn-primary btn-sm text-white">Edit Class category</a>
                                    <a href="" class="btn btn-danger btn-sm text-white">Delete Class Category</a>
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

                    {{-- {{ __('You are logged in!') }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
