<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Department;
use App\Http\Models\Employee;
use Illuminate\View\View;

class HomeController extends Controller
{
    /** 
     * show the index page
     */
    public function index(
        Request $_oRequest,
        Department $_oDepartment,
        Employee $_oEmployee
    )
    {
        return View(
            'home.index',
            [
                'employeeList' => $_oEmployee->all(),
            ],
        );
    }
    public function getDetail(Request $_oRequest, Employee $_oEmployee, $_iId)
    {
        return view(
            'home.detail',
            [
                'emp' => $_oEmployee->find($_iId),
            ]
            );
    }
}
