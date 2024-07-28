@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h2>Show Employee</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">John Doe</h5>
            <p class="card-text">Email: john.doe@example.com</p>
            <p class="card-text">Joining Date: 2023-07-26</p>
            <p class="card-text">Status: Active</p>
        </div>
    </div>
    <button class="btn btn-secondary mt-3" onclick="window.location.href='index.php'">Back</button>
</div>

@endsection