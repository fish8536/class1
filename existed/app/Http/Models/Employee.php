<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Department;

class Employee extends Model
{
    protected $table = "employees";
    protected $primaryKey = 'employeeId';

    function department() {
        return $this->hasOne(Department::class, 'departmentId');
    }
}
