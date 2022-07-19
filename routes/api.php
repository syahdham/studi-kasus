<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('login', [\App\Http\Controllers\API\LoginApiController::class, 'doLogin']);

Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::get('status_pengajuan', [\App\Http\Controllers\API\StatusPengajuanApiController::class, 'index']);

} );













