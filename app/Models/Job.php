<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    
    public function employees()
    {
        return $this->belongsToMany('App\Models\Employee','job_employee', 'job_id','employee_id');
    }

    public function childs() {
        return $this->hasMany('App\Models\Job','parent_id','id') ;
    }
}
