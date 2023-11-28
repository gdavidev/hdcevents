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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
ROute::get('/events/create', [EventController::class, 'create']);

Route::get('/produtos/{id?}', function ($id = 1) {
    $busca = request('search');

    return view('product', ['id' => $id, 'busca' => $busca]);
});
