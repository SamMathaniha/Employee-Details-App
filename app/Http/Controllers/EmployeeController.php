<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validate the incoming request data
         $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|unique:employees,email|email|max:255',
            'joining_date' => 'required|date',
            'salary' => 'required|numeric',
            'is_active' => 'sometimes|boolean',
        ]);


        //mass assignment
       $data = $request->except('_token');

       // Convert 'is_active' field to a boolean value (1 or 0)
       $data['is_active'] = $request->has('is_active') ? 1 : 0;

    // Create a new Employee record with the processed data
        Employee::create($data);

      

       //Insert single row 
    /*    $employee = new Employee;
       $employee->name = $data['name'];
       $employee->email = $data['email'];
       $employee->joining_date = $data['joining_date'];
       $employee->salary = $data['salary'];
       $data['is_active'] = $request->has('is_active') ? 1 : 0;
       $employee->save(); */
       
       return redirect()
    ->route('employees.index')
    ->with('message', 'Employee has been created successfully!');

      
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view ('show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view ('edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
