<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Job;
use App\Models\User;
use App\Models\Category;

class EmployeeController extends Controller
{
    public function new()
    {   
        $employees = Employee::all();
        $jobs = Job::all();
        $categories = Category::all();
        return view('employee.new',compact('employees','jobs','categories'));
    }

    public function store(Request $request)
    {

        $employee = new Employee;

        $employee->name = strtolower($request->name);
        $employee->lastName = strtolower($request->last_name);
        $employee->employeeId = $request->employeeId;
        $employee->email =$request->email;
        $employee->bank_account = $request->bank_account;
        $employee->sex = $request->sex;
        $employee->phone = $request->phone;
        $employee->weekly_hours = $request->weekly_hours;
        $employee->birth = $request->birth;
        $employee->address = $request->address;
        
        try {
            $employee->save();
            $employee->jobs()->syncWithoutDetaching([$request->position => ['user_id' => '1']]);
            return redirect()->back();
        }
        catch(Exception $e) {
            echo 'Error: ',  $e->getMessage(), "\n";

        }
    }

    public function edit(Request $request)
    {
        $employee = Employee::find($request->employee);
        $jobs = Job::all();
        $categories = Category::all();
        $employee_jobs = $employee->jobs;
        
        return view('employee.edit',compact('employee','jobs','employee_jobs','categories'));
    }

    public function save(Request $request)
    {
        
        $employee = Employee::find($request->id);

        $employee->name = strtolower($request->name);
        $employee->lastName = strtolower($request->last_name);
        $employee->employeeId = $request->employeeId;
        $employee->email =$request->email;
        $employee->bank_account = $request->bank_account;
        if(!empty($request->position)){
            $employee->jobs()->syncWithoutDetaching([$request->position => ['user_id' => '1']]);
        }
        $employee->user_id = $request->user_id;
        $employee->sex = $request->sex;
        $employee->phone = $request->phone;
        $employee->weekly_hours = $request->weekly_hours;
        $employee->birth = $request->birth;
        $employee->address = $request->address;

        try {
            $employee->save();
            return redirect()->action([EmployeeController::class, 'new']);
        }
        catch(Exception $e) {
            echo 'Error: ',  $e->getMessage(), "\n";

        }

    }
}
