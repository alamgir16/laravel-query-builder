<?php
use App\Http\Controllers\InsertController;
use App\Http\Controllers\UpdateController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RetriveController::class, 'selectAllRows']);
Route::get('/onerows', [RetriveController::class, 'selectOneRows']);
Route::get('/findrows', [RetriveController::class, 'selectFindRows']);
Route::get('/onecolumn', [RetriveController::class, 'selectOneColumn']);
Route::get('/multicolumn', [RetriveController::class, 'selectMultiColumn']);
Route::get('/specificdata', [RetriveController::class, 'specificData']);

Route::get('/', [selectController::class, 'singleColumn']);
Route::get('/', [MergeController::class, 'mergeData']);
Route::get('/', [JoinController::class, 'joinData']);
Route::get('/', [JoinController::class, 'rjoinData']);
Route::get('/', [InsertController::class, 'insertRows']);
Route::get('/', [DeleteController::class, 'multiData']);
Route::get('/', [UpdateController::class, 'update']);