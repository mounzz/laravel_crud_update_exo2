<?php

use App\Http\Controllers\NewMembres;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembresController;


Route::get('/', [MembresController::class, "AddMembres"])->name('AddMembres');
Route::post('/create', [MembresController::class, "store"]);
Route::delete('/{id}/delete', [MembresController::class, "destroy"]);
Route::post('/NewMembres', [MembresController::class, "deleteAll"]);
Route::get('/membresEdit/{id}', [MembresController::class, "show"]);

Route::get('/NewMembres', [NewMembres::class, "NewMembre"])->name('membres');
Route::put('/membresEdit/{id}/update', [NewMembres::class, "update"]);



