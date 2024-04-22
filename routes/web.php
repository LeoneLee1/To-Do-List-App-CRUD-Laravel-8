<?php

use App\Models\Task;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

    $data = Task::all();

    return view('welcome',compact('data'));
});

// CRUD (CREATE, READ, UPDATE, DELETE)

// Create
Route::get('/create',[TaskController::class,'create'])->name('create');
Route::post('/insert',[TaskController::class,'insert'])->name('insert');

// Update
Route::get('/edit/{id}',[TaskController::class,'show'])->name('edit');
Route::post('/update/{id}',[TaskController::class,'update'])->name('update');

// Delete
Route::get('/delete/{id}',[TaskController::class,'delete'])->name('delete');

