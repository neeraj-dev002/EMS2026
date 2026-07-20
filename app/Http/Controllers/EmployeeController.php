<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view("employees.index",compact("employees")); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = Department::all();
        

        return view("employees.create",compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //store employee data in the database
       
        Employee::create($request->all());

        return redirect()->route("employees.index")->with("success","Employee created successfully");   
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //employee show from the database
        $employee = Employee::find($id);
        return view("employees.show",compact("employee"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //employee edit from the database
         $employee = Employee::findorFail($id);
         return view("employees.edit",compact("employee"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // employee update in the database
        $employee = Employee::findorFail($id);
         
        $employee->update($request->all());
        return redirect()->route("employees.index")->with("success","Employee updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //employee delete from the database
    Employee::find($id)->delete();
    return redirect()->route("employees.index")->with("success","Employee deleted successfully");   

    }
}
