@extends('layouts.app')
@section('content')

@if(session()->has('message'))
<div class="alert alert-success">
    {{session()->get('message')}}
</div>
@endif

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Employee Management</h2>
        <a href="{{route('employees.create')}}"><button class="btn btn-primary">Create Employee</button></a>
    </div>

    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Joining Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Employees as $key => $employee)
            
            
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$employee->name}}</td>
                <td>{{$employee->email}}</td>
                <td>{{$employee->joining_date}}</td>
                <td class="btn {{$employee->is_active == 1?'btn-success':'btn-danger'}} btn-xs py-1 my-2 mx-2">{{$employee->is_active == 1? 'Active':'Inactive'}}</td>
                <td>
                    <a href="{{route('employees.show', $employee->id)}}"><button class="btn btn-info btn-sm">Show</button></a>
                    <a href="{{route('employees.edit', $employee->id)}}"><button class="btn btn-warning btn-sm">Edit</button></a>
                    <a ><button class="btn btn-danger btn-sm">Delete</button></a>
                </td>
            </tr>
            @endforeach
            <!-- Additional rows can be added here -->
        </tbody>
    </table>
    {{$Employees->links()}}
</div>

@endsection
