@extends('layouts.app')
@section('content')
<div class="alert alert-success">
    {{session()->get('message')}}
</div>
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Employee Management</h2>
        <a href="{{route('employees.create')}}"><button class="btn btn-primary">Create Employee</button></a>
    </div>

    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Joining Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>John Doe</td>
                <td>john.doe@example.com</td>
                <td>2023-07-26</td>
                <td>Active</td>
                <td>
                    <button class="btn btn-info btn-sm">Show</button>
                    <button class="btn btn-warning btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            <!-- Additional rows can be added here -->
        </tbody>
    </table>
</div>

@endsection
