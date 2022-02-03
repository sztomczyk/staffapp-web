<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RequirementController;
use App\Http\Controllers\PositionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function() {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/applications', [ApplicationController::class, 'index'])->name('applications');
    Route::get('/applications/create', [ApplicationController::class, 'create'])->name('applications.create');
    Route::post('/applications/store', [ApplicationController::class, 'store'])->name('applications.store');
    Route::get('/applications/edit/{applicationId}', [ApplicationController::class, 'edit'])->name('applications.edit');
    Route::put('/applications/update', [ApplicationController::class, 'update'])->name('applications.update');
    Route::get('/applications/delete/{applicationId}', [ApplicationController::class, 'delete'])->name('applications.delete');
    Route::delete('/applications/destroy', [ApplicationController::class, 'destroy'])->name('applications.destroy');
    Route::get('/applications/{applicationdId}', [ApplicationController::class, 'view'])->name('applications.view');

    Route::get('/departments', [DepartmentController::class, 'index'])->name('departments');
    Route::get('/departments/create', [DepartmentController::class, 'create'])->name('departments.create');
    Route::post('/departments/store', [DepartmentController::class, 'store'])->name('departments.store');
    Route::get('/departments/edit/{departmentId}', [DepartmentController::class, 'edit'])->name('departments.edit');
    Route::put('/departments/update', [DepartmentController::class, 'update'])->name('departments.update');
    Route::get('/departments/delete/{departmentId}', [DepartmentController::class, 'delete'])->name('departments.delete');
    Route::delete('/departments/destroy', [DepartmentController::class, 'destroy'])->name('departments.destroy');
    
    Route::get('/positions', [PositionController::class, 'index'])->name('positions');
    Route::get('/positions/create', [PositionController::class, 'create'])->name('positions.create');
    Route::post('/positions/store', [PositionController::class, 'store'])->name('positions.store');
    Route::get('/positions/edit/{positionId}', [PositionController::class, 'edit'])->name('positions.edit');
    Route::put('/positions/update', [PositionController::class, 'update'])->name('positions.update');
    Route::get('/positions/delete/{positionId}', [PositionController::class, 'delete'])->name('positions.delete');
    Route::delete('/positions/destroy', [PositionController::class, 'destroy'])->name('positions.destroy');
    
    Route::get('/employees', [EmployeeController::class, 'index'])->name('employees');
    Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
    Route::post('/employees/store', [EmployeeController::class, 'store'])->name('employees.store');
    Route::get('/employees/edit/{employeeId}', [EmployeeController::class, 'edit'])->name('employees.edit');
    Route::put('/employees/update', [EmployeeController::class, 'update'])->name('employees.update');
    Route::get('/employees/delete/{employeeId}', [EmployeeController::class, 'delete'])->name('employees.delete');
    Route::delete('/employees/destroy', [EmployeeController::class, 'destroy'])->name('employees.destroy');

    Route::get('/offers', [OfferController::class, 'index'])->name('offers');
    Route::get('/offers/create', [OfferController::class, 'create'])->name('offers.create');
    Route::post('/offers/store', [OfferController::class, 'store'])->name('offers.store');
    Route::get('/offers/edit/{offerId}', [OfferController::class, 'edit'])->name('offers.edit');
    Route::put('/offers/update', [OfferController::class, 'update'])->name('offers.update');
    Route::get('/offers/delete/{offerId}', [OfferController::class, 'delete'])->name('offers.delete');
    Route::delete('/offers/destroy', [OfferController::class, 'destroy'])->name('offers.destroy');

    Route::get('/requirements', [RequirementController::class, 'index'])->name('requirements');
    Route::get('/requirements/create', [RequirementController::class, 'create'])->name('requirements.create');
    Route::post('/requirements/store', [RequirementController::class, 'store'])->name('requirements.store');
    Route::get('/requirements/edit/{requirementId}', [RequirementController::class, 'edit'])->name('requirements.edit');
    Route::put('/requirements/update', [RequirementController::class, 'update'])->name('requirements.update');
    Route::get('/requirements/delete/{requirementId}', [RequirementController::class, 'delete'])->name('requirements.delete');
    Route::delete('/requirements/destroy', [RequirementController::class, 'destroy'])->name('requirements.destroy');
});

require __DIR__.'/auth.php';
