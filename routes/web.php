<?php
Namespace App\Http\Controllers;

use App\View\Components\Crud;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('display');
// });

Route::resource('/reg', CrudController::class);
Route::get('/trash',[TrashController::class,'trash']);
Route::get('/trash/{id}',[TrashController::class,'restore']);
Route::get('/fdelete/{id}',[TrashController::class,'fDelete']);