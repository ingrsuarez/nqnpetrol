<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
        
    Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

        //EMPLOYEES
    Route::get('employee/new',[App\Http\Controllers\EmployeeController::class, 'new'])->name('employee.new');

    Route::post('employee/store',[App\Http\Controllers\EmployeeController::class, 'store'])->name('employee.store');

    Route::get('employee/edit',[App\Http\Controllers\EmployeeController::class, 'edit'])->name('employee.edit');
    Route::post('employee/save',[App\Http\Controllers\EmployeeController::class, 'save'])->name('employee.save');

    //JOBS
    Route::get('job/chart',[App\Http\Controllers\JobController::class, 'chart'])->name('job.chart');

    Route::get('job/new',[App\Http\Controllers\JobController::class, 'new'])->name('job.new');

    Route::post('job/store',[App\Http\Controllers\JobController::class, 'store'])->name('job.store');

    Route::get('job/edit',[App\Http\Controllers\JobController::class, 'edit'])->name('job.edit');
    Route::post('job/save',[App\Http\Controllers\JobController::class, 'save'])->name('job.save');

    Route::get('job/delete',[App\Http\Controllers\JobController::class, 'delete'])->name('job.delete');

    Route::get('job/detach/{job}/{employee}',[App\Http\Controllers\JobController::class, 'detach'])->name('job.detach');

    Route::get('category/new',[App\Http\Controllers\JobController::class, 'newCategory'])->name('category.new');

    Route::post('category/store',[App\Http\Controllers\JobController::class, 'storeCategory'])->name('category.store');

    Route::get('category/edit',[App\Http\Controllers\JobController::class, 'editCategory'])->name('category.edit');
    Route::post('category/save',[App\Http\Controllers\JobController::class, 'saveCategory'])->name('category.save');

    Route::get('category/delete',[App\Http\Controllers\JobController::class, 'deleteCategory'])->name('category.delete');

    //LEAVES
    Route::get('leave/resume',[App\Http\Controllers\LeaveController::class, 'resume'])->name('leave.resume');
    Route::get('leave/new',[App\Http\Controllers\LeaveController::class, 'new'])->name('leave.new');

    Route::post('leave/store',[App\Http\Controllers\LeaveController::class, 'store'])->name('leave.store');

    Route::get('leave/edit',[App\Http\Controllers\LeaveController::class, 'edit'])->name('leave.edit');

    }
);
