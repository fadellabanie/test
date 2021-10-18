<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Mobile\V1\Providers\Auth\AuthController;
use App\Http\Controllers\Api\Mobile\V1\Captains\HomeController;

/*
|--------------------------------------------------------------------------
| API Routes for Mobile app
|--------------------------------------------------------------------------
*/


//     Route::get('now', function(){
//         return Carbon::now()->timestamp;
//     });
   
//     Route::post('login', [AuthController::class, 'login']);
//     Route::post('register', [AuthController::class, 'register']);
//     Route::post('verify', [AuthController::class, 'check']);
//     Route::post('verify-change-password', [AuthController::class, 'verifyChangePassword']);
//     Route::post('change-password', [AuthController::class, 'changePassword']);
    
    
//     Route::group(['middleware' => 'auth:api'], function () {
        
//         Route::get('home', [HomeController::class, 'home']);
//         Route::get('logout', [AuthController::class, 'logout']);
// });
