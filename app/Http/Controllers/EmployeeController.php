<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index () {
        return response(Employee::all(), 200)
        ->header('Content-Type', 'application/json');
    }
    public function show($id) {
        return response(Employee::findOrFail($id), 200)
        ->header('Content-Type', 'application/json');
    }
    public function store(Request $request) {
        $request->validate([
            'lastName' => 'required',
            'firstName' => 'required',
        ]);
        return Employee::create($request->all());
    }
    public function update(Request $request, $id) {
        $employee = Employee::find($id);
        $employee->update($request->all());
        return $employee;
    }
    public function destroy($id) {
        return Employee::destroy($id);
    }
}
