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

    //CLIENTS
    Route::get('client/new',[App\Http\Controllers\ClientController::class, 'new'])
        ->middleware('can:client.new')
        ->name('client.new');  

    Route::post('client/store',[App\Http\Controllers\ClientController::class, 'store'])
        ->middleware('can:client.new')
        ->name('client.store');
    
    Route::get('client/edit/{client}',[App\Http\Controllers\ClientController::class, 'edit'])
        ->middleware('can:client.edit')
        ->name('client.edit');
    
    Route::get('wells/dashboard',[App\Http\Controllers\WellController::class, 'dashboard'])
        ->middleware('can:well.dashboard')
        ->name('well.dashboard');
    Route::post('wells/store',[App\Http\Controllers\WellController::class, 'store'])
        ->middleware('can:well.dashboard')
        ->name('well.store');
    
    //EMPLOYEES
    Route::get('employee/new',[App\Http\Controllers\EmployeeController::class, 'new'])
        ->middleware('can:employee.new')
        ->name('employee.new');

    Route::post('employee/store',[App\Http\Controllers\EmployeeController::class, 'store'])
        ->middleware('can:employee.store')
        ->name('employee.store');

    Route::get('employee/edit',[App\Http\Controllers\EmployeeController::class, 'edit'])
        ->middleware('can:employee.edit')
        ->name('employee.edit');

    Route::post('employee/save',[App\Http\Controllers\EmployeeController::class, 'save'])
        ->middleware('can:employee.save')
        ->name('employee.save');

    //JOBS
    Route::get('job/chart',[App\Http\Controllers\JobController::class, 'chart'])
        ->middleware('can:job.chart')
        ->name('job.chart');

    Route::get('job/new',[App\Http\Controllers\JobController::class, 'new'])
        ->middleware('can:job.new')
        ->name('job.new');

    Route::post('job/store',[App\Http\Controllers\JobController::class, 'store'])
        ->middleware('can:job.store')
        ->name('job.store');

    Route::get('job/edit',[App\Http\Controllers\JobController::class, 'edit'])
        ->middleware('can:job.edit')
        ->name('job.edit');
    
    Route::post('job/save',[App\Http\Controllers\JobController::class, 'save'])
        ->middleware('can:job.save')
        ->name('job.save');

    Route::get('job/delete',[App\Http\Controllers\JobController::class, 'delete'])
        ->middleware('can:job.delete')
        ->name('job.delete');

    Route::get('job/detach/{job}/{employee}',[App\Http\Controllers\JobController::class, 'detach'])
        ->middleware('can:job.detach')
        ->name('job.detach');

    Route::get('category/new',[App\Http\Controllers\JobController::class, 'newCategory'])
        ->middleware('can:category.new')
        ->name('category.new');

    Route::post('category/store',[App\Http\Controllers\JobController::class, 'storeCategory'])
        ->middleware('can:category.store')
        ->name('category.store');

    Route::get('category/edit',[App\Http\Controllers\JobController::class, 'editCategory'])
        ->middleware('can:category.edit')
        ->name('category.edit');

    Route::post('category/save',[App\Http\Controllers\JobController::class, 'saveCategory'])
        ->middleware('can:category.save')
        ->name('category.save');

    Route::get('category/delete',[App\Http\Controllers\JobController::class, 'deleteCategory'])
        ->middleware('can:category.delete')
        ->name('category.delete');

    //LEAVES
    Route::get('leave/resume',[App\Http\Controllers\LeaveController::class, 'resume'])
        ->middleware('can:leave.resume')
        ->name('leave.resume');

    Route::get('leave/new',[App\Http\Controllers\LeaveController::class, 'new'])
        ->middleware('can:leave.new')
        ->name('leave.new');

    Route::post('leave/store',[App\Http\Controllers\LeaveController::class, 'store'])
        ->middleware('can:leave.store')
        ->name('leave.store');

    Route::get('leave/edit',[App\Http\Controllers\LeaveController::class, 'edit'])
        ->middleware('can:leave.edit')
        ->name('leave.edit');
    // USERS

    Route::get('users/index',[App\Http\Controllers\UserController::class, 'index'])
        // ->middleware('can:role.new')
        ->name('user.index');

    Route::get('users/edit',[App\Http\Controllers\UserController::class, 'edit'])
        // ->middleware('can:role.new')
        ->name('user.edit');

    Route::post('users/save',[App\Http\Controllers\UserController::class, 'save'])
        // ->middleware('can:role.new')
        ->name('user.save');
        

    Route::get('users/attach/role',[App\Http\Controllers\UserController::class, 'attachRole'])
        // ->middleware('can:role.new')
        ->name('role.attach');
    Route::get('users/detach/role',[App\Http\Controllers\UserController::class, 'detachRole'])
        // ->middleware('can:role.new')
        ->name('role.detach');

    //ROLES

    Route::get('role/new',[App\Http\Controllers\RoleController::class, 'new'])
        // ->middleware('can:role.new')
        ->name('role.new');

    Route::post('role/store',[App\Http\Controllers\RoleController::class, 'store'])
        ->middleware('can:role.store')
        ->name('role.store');

    Route::get('role/edit/{role}',[App\Http\Controllers\RoleController::class, 'edit'])->name('role.edit');
    
    Route::get('role/permission/attach/{role}/{permission}',[App\Http\Controllers\RoleController::class, 'attachPermission'])
        ->middleware('can:role.attachPermission')
        ->name('role.attachPermission');
    
    Route::get('role/permission/detach/{role}/{permission}',[App\Http\Controllers\RoleController::class, 'detachPermission'])
        ->middleware('can:role.detachPermission')
        ->name('role.detachPermission');
    //PERMISSION

    Route::get('permission/new',[App\Http\Controllers\PermissionController::class, 'new'])->name('permission.new');

    Route::post('permission/store',[App\Http\Controllers\PermissionController::class, 'store'])->name('permission.store');

    Route::get('permission/edit/{permission}',[App\Http\Controllers\PermissionController::class, 'edit'])->name('permission.edit');

    }
);
