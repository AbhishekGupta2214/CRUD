<?php
Namespace App\Http\Controllers;

use App\View\Components\Crud;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('display');
// });
// Route::get('/reg', function () {
//     return view('registration');
// });
Route::resource('/reg', CrudController::class);