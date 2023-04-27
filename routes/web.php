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
    return view('Todos', [
        'heading' => 'Todos pending',
        'todos' => [
            [
                'id' => 1,
                'title' => 'Clean room',
                'description' => 'make bed, sweep room, mop room',
            ],
            [
                'id' => 2,
                'title' => 'Clean living room',
                'description' => 'sweep living room, mop living room',
            ]
        ]
    ]);
});

Route::get('/hello', function () {
    return response('hello');
});
