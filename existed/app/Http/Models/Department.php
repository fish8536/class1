<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Employee;

class Department extends Model
{
    protected $table = "departments";
    protected $primaryKey = 'departmentId';

    function employees() {
        return $this->hasMany(Employee::class, 'departmentId');
    }
}
