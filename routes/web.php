<?php

use Illuminate\Support\Facades\Route;

//Include controller
use App\Http\Controllers\myController;

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


Route::get('/students', [myController::class, 'students_show']);
Route::get('/students/{name}', [myController::class, 'name_disp']);
Route::delete('/emails/{email}', [myController::class, 'remove']);
Route::post('/students', [myController::class, 'add']);

// Route--> Controller--> Model
// Create a Model and migrate it, then modify the last migration file to add fields to your table
// The controller involves functions that interact with database, ex:get a row, delete a row and add a row
// Change database name from vendor/env file