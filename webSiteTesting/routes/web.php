<?php
use App\Models\User;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TodoController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/todo', [TodoController::class, 'index'])->name('todo.index');
Route::get('/nexttodo', [TodoController::class, 'nextTodo'])->name('todo.nextTodo');
Route::put('/completed/{id}', [TodoController::class, 'updateCompleted'])->name('todo.updateCompleted');
Route::put('/delete/{id}', [TodoController::class, 'destroy'])->name('todo.delete');
Route::get('/done', [TodoController::class, 'done'])->name('todo.done');
Route::put('/incompleted/{id}', [TodoController::class, 'updateInCompleted'])->name('todo.updateInCompleted');
Route::put('/add', [TodoController::class, 'create'])->name('todo.add');

