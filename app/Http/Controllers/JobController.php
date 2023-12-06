<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Category;
use App\Models\Employee;

class JobController extends Controller
{
    public function chart()
    {
        $job = Job::whereNotNull('parent_id')->first();
        $employees = Employee::all();
        return view('job.chart',compact('job','employees'));
    }

    public function new()
    {
        $jobs = Job::all();
        $categories = Category::all();
        return view('job.new',compact('jobs','categories'));
    }

    public function store(Request $request)
    {
        
        $job = new Job;

        $job->name = strtolower($request->name);
        $job->order = $request->order;
        $job->email =$request->email;
        $job->parent_id = $request->parent;
        $job->department = strtolower($request->department);
        $job->responsibilities = $request->responsibilities;

        try {
            $job->save();
            return redirect()->back();
        }
        catch(Exception $e) {
            echo 'Error: ',  $e->getMessage(), "\n";

        }
    }

    public function edit(Request $request)
    {
        $job = Job::find($request->job);
        $jobs = Job::all();


        return view('job.edit',compact('job','jobs'));
    }

    public function save(Request $request)
    {
        // return $request;
        $job = Job::find($request->id);

        $job->name = strtolower($request->name);
        $job->order = $request->order;
        $job->email =$request->email;
        $job->parent_id = $request->parent;
        $job->department = strtolower($request->department);
        $job->responsibilities = $request->responsibilities;

        try {
            $job->save();
            return redirect()->action([JobController::class, 'new']);
        }
        catch(Exception $e) {
            echo 'Error: ',  $e->getMessage(), "\n";

        }

    }

    public function delete(Request $request)
    {
        $jobs = Job::all();
        $job = Job::find($request->job);
        if($job->childs->isNotEmpty())
        {
            return view('job.new',compact('jobs'))->with('errorMsg','This Job cannot be removed!');;
        }
        else
        {
            $job->delete();
        }
        
        $jobs = Job::all();
        $employees = Employee::all();
        return view('job.chart',compact('jobs','employees','job'));
    }

    public function detach(Job $job, Employee $employee)
    {
        $employee->jobs()->detach($job->id);
        $jobs = Job::all();
        $employees = Employee::all();
        return view('job.chart',compact('jobs','employees','job'));
    }

    public function newCategory()
    {
        $categories = Category::all();
        return view('category.new',compact('categories'));
    }

    public function storeCategory(Request $request)
    {
        
        $categories = new Category;

        $categories->name = strtolower($request->name);
        $categories->agreement = strtolower($request->agreement);
        $categories->union_name = strtolower($request->union_name);
        $categories->wage =$request->wage;

        try {
            $categories->save();
            return redirect()->back();
        }
        catch(Exception $e) {
            echo 'Error: ',  $e->getMessage(), "\n";

        }
    }

    public function editCategory(Request $request)
    {
        $category = Category::find($request->category);
        $jobs = Job::all();
        $categories = Category::all();


        return view('category.edit',compact('category','jobs','categories'));

    }

    public function saveCategory(Request $request)
    {
        
        $category = Category::find($request->id);

        $category->name = strtolower($request->name);
        $category->agreement = $request->agreement;
        $category->wage = $request->wage;
        $category->union_name = strtolower($request->union_name);

        try {
            $category->save();
            return redirect()->action([JobController::class, 'newCategory']);
        }
        catch(Exception $e) {
            echo 'Error: ',  $e->getMessage(), "\n";

        }

    }

}
