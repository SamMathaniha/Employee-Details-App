@extends('layouts.app')
@section('content')

<a class="text-danger" href="{{ route('employees.index') }}">Back to List</a>
<div class="container mt-5">
    <h2>Create New Employee</h2>
    <form action="{{ route('employees.store') }}" method="POST" novalidate>
        @csrf

        <!-- Name Field -->
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter name" value="{{old('name')}}" required>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <!-- Email Field -->
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter email" value="{{old('email')}}"  required>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <!-- Joining Date Field -->
        <div class="form-group">
            <label for="joining_date">Joining Date</label>
            <input type="date" name="joining_date" class="form-control @error('joining_date') is-invalid @enderror" id="joining_date" value="{{old('joining_date')}}" required>
            @error('joining_date')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <!-- Salary Field -->
        <div class="form-group">
            <label for="salary">Salary</label>
            <input type="number" name="salary" class="form-control @error('salary') is-invalid @enderror" id="salary" placeholder="Enter salary"  value="{{old('salary')}}" required>
            @error('salary')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <!-- Is Active Field -->
        <div class="form-check mb-3">
        <input type="checkbox" class="form-check-input" id="active" name="is_active" value='1'  {{old('is_active')=='1'?'checked':''}}>
        <label class="form-check-label" for="active">Active</label>
            @error('is_active')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Create Employee</button>
    </form>
</div>

@endsection
