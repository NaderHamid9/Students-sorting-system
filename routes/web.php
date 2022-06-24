<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [DepartmentController::class, 'index'])->name('dep.index');
Route::get('/create', [DepartmentController::class, 'create'])->name('dep.create');
Route::post('/saved', [DepartmentController::class, 'store'])->name('dep.store');
Route::get('/department/{id}', [StudentController::class, 'index'])->name('student.index');
Route::get('/create/student/{id}', [StudentController::class, 'create'])->name('student.create');
Route::post('/create/student/saved', [StudentController::class, 'store'])->name('student.store');
Route::get('/edit/{id}', [DepartmentController::class, 'edit'])->name('dep.edit');
Route::put('/edit/updated/{id}', [DepartmentController::class, 'update'])->name('dep.update');
Route::get('/edit/student/{id}', [StudentController::class, 'edit'])->name('student.edit');
Route::put('/edit/student/updated/{id}', [StudentController::class, 'update'])->name('student.update');
Route::get('/delete/{id}', [DepartmentController::class, 'delete'])->name('dep.delete');
Route::get('/delete/student/{id}', [StudentController::class, 'delete'])->name('student.delete');
Route::put('/counted', [StudentController::class, 'count'])->name('student.count');









//Route::get('/department/{id}', [StudentController::class, 'index'])->name('student.index');





