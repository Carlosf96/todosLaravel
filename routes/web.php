<?php

use Illuminate\Support\Facades\Route;
use App\Models\Todo;

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
    return view('Todos', [
        'heading' => 'Todos pending',
        'todos' => Todo::all() 
    ]);
});

Route::get('/todos/{todo}', function (Todo $todo) {
    return view('todo', [
        'todo' => $todo
    ]);
});
