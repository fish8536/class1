<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employeeList = Employee::all();
        return view('employees.index', compact('employeeList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("employees.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $_oRequest
     * @return \Illuminate\Http\Response
     */
    public function store(Request $_oRequest, Employee $_oEmpModel)
    {
        $_oEmpModel->firstName = $_oRequest->firstName;
        $_oEmpModel->lastName = $_oRequest->lastName;
        $_oEmpModel->email = $_oRequest->email;
        $_oEmpModel->save();
        return redirect("/employees");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $_iId
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $_oEmpModel, $_iId)
    {
        $emp = $_oEmpModel->find($_iId);
        return view('employees.show', ['emp' => $emp]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $_iId
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $_oEmpModel, $_iId)
    {
        $emp = $_oEmpModel->find($_iId);
        return view('employees.edit', ['emp' => $emp]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $_oRequest
     * @param  int  $_iId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $_oRequest, $_iId)
    {
        $emp = Employee::find($_iId);
        $emp->firstName = $_oRequest->firstName;
        $emp->lastName = $_oRequest->lastName;
        $emp->email = $_oRequest->email;
        $emp->save();
        return redirect("/employees");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $_iId
     * @return \Illuminate\Http\Response
     */
    public function destroy($_iId)
    {
        $emp = Employee::find($_iId);
        $emp->delete();
        return redirect("/employees");
    }
}
