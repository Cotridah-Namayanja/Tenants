<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TenantsController;

Route::get('/', [TenantsController::class,'index'])->name('tenantlist');
Route::get('new-tenant', [TenantsController::class,'create'])->name('newtenant');
Route::post('/new-tenant', [TenantsController::class,'store'])->name('store');
