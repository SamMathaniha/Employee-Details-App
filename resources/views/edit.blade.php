@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h2>Edit Employee</h2>
    <form action="{{route('employees.update',$employee->id)}}" method="POST">
        @method('PUT')
        @csrf 
         <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{$employee->name}}">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{$employee->email}}">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="joining_date">Joining Date:</label>
            <input type="date" class="form-control @error('joining_date') is-invalid @enderror" id="joining_date" name="joining_date" value="{{$employee->joining_date}}">
            @error('joining_date')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="salary">Salary:</label>
            <input type="text" class="form-control @error('salary') is-invalid @enderror" id="salary" name="salary" value="{{$employee->salary}}">
            @error('salary')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="active" class="@error('is_active') is-invalid @enderror" name="is_active" value="1" {{$employee->is_active == '1' ? 'checked' : ''}}>
                <label class="form-check-label" for="active">Active</label>
                @error('is_active')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
