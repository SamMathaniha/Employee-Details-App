@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h2>Show Employee</h2>
    <div class="card">
        <div class="card-body">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$employees->name}}" readonly>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{$employees->email}}" readonly>
        </div>
        <div class="form-group">
            <label for="joining_date">Joining Date:</label>
            <input type="date" class="form-control" id="joining_date" name="joining_date" value="{{$employees->joining_date}}" readonly>
        </div>
        <div class="form-group">
            <label for="salary">Salary:</label>
            <input type="text" class="form-control" id="salary" name="salary" value="{{$employees->salary}}" readonly>
        </div>
        <div class="form-group">
            <label for="active">Active:</label>
            <input type="text" class="form-control" id="is_active" name="is_active" value="{{ $employees->is_active ? 'Active' : 'Inactive' }}" readonly>
        </div>
        </div>
    </div>
    <a href="{{route('employees.index')}}"><button class="btn btn-secondary mt-3">Back</button></a>
</div>

@endsection