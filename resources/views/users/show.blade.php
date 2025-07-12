@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <h2>User Details</h2>
    <ul class="list-group">
        <li class="list-group-item"><strong>ID:</strong> {{ $users->id }}</li>
        <li class="list-group-item"><strong>Name:</strong> {{ $users->name }}</li>
        <li class="list-group-item"><strong>Email:</strong> {{ $users->email }}</li>
        <!-- Add more fields if needed -->
    </ul>
</div>

@endsection