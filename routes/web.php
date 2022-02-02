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
    Route::get('/applications/store', [ApplicationController::class, 'store'])->name('applications.store');

    Route::get('/departments', [DepartmentController::class, 'index'])->name('departments');
    Route::get('/departments/create', [DepartmentController::class, 'create'])->name('departments.create');
    Route::post('/departments/store', [DepartmentController::class, 'store'])->name('departments.store');
    Route::get('/departments/edit', [DepartmentController::class, 'edit'])->name('departments.edit');
    Route::put('/departments/update', [DepartmentController::class, 'update'])->name('departments.update');
    Route::get('/departments/delete', [DepartmentController::class, 'delete'])->name('departments.delete');
    Route::delete('/departments/destroy', [DepartmentController::class, 'destroy'])->name('departments.destroy');

    Route::get('/offers', [OfferController::class, 'index'])->name('offers');
    Route::get('/requirements', [RequirementController::class, 'index'])->name('requirements');
    Route::get('/positions', [PositionController::class, 'index'])->name('positions');
    Route::get('/employees', [EmployeeController::class, 'index'])->name('employees');
});

require __DIR__.'/auth.php';
