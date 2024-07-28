@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h2>Edit Employee</h2>
    <form action="update.php" method="POST">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="John Doe">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="john.doe@example.com">
        </div>
        <div class="form-group">
            <label for="joining_date">Joining Date:</label>
            <input type="date" class="form-control" id="joining_date" name="joining_date" value="2023-07-26">
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <select class="form-control" id="status" name="status">
                <option value="Active" selected>Active</option>
                <option value="Inactive">Inactive</option>
            </select>
        </div>
        <input type="hidden" name="id" value="1"> <!-- Assuming you're passing the employee ID -->
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection