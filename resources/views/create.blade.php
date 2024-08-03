@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h2>Create New Employee</h2>
    <form>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" required>
        </div>
        <div class="form-group">
            <label for="joiningDate">Joining Date</label>
            <input type="date" class="form-control" id="joiningDate" required>
        </div>
        <div class="form-group">
            <label for="salary">Salary</label>
            <input type="number" class="form-control" id="salary" placeholder="Enter salary" required>
        </div>
        <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" id="active">
            <label class="form-check-label" for="active">Active</label>
        </div>
        <button type="submit" class="btn btn-primary">Create Employee</button>
    </form>
</div>

@endsection
