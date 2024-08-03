@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h2>Create New Employee</h2>
    <form action="{{route('employees.store')}}" method="POST" novalidate>
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required>
        </div>
        <div class="form-group">
            <label for="joining_date">Joining Date</label>
            <input type="date" name="joining_date" class="form-control" id="joining_date" required>
        </div>
        <div class="form-group">
            <label for="salary">Salary</label>
            <input type="number" name="salary" class="form-control" id="salary" placeholder="Enter salary" required>
        </div>
        <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" id="active" name="is_active">
            <label class="form-check-label" for="active">Active</label>
        </div>
        <button type="submit" class="btn btn-primary">Create Employee</button>
    </form>
</div>

@endsection
