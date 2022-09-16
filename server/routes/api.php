<?php

use App\Http\Controllers\BidangPemeriksaanController;
use App\Http\Controllers\MetodePemeriksaanController;
use App\Http\Controllers\ParameterPemeriksaanController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ValidatorPemeriksaanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

// Route::get('/user/reg', function () {
//     return '';
// });

Route::controller(UserController::class)->group(function () {
    Route::post('/register', 'register');
    Route::post('/login', 'login');
    Route::prefix('/user')->group(function () {
        Route::middleware('auth:sanctum')->group(function () {
        });
    });
});

Route::controller(RolesController::class)->group(function () {
    Route::prefix('/roles')->group(function () {
        Route::get('/', 'getRoles');
        Route::get('/{id}', 'getRoles');
        Route::post('/', 'addRoles');
        Route::put('/', 'updateRoles');
        Route::delete('/', 'deleteRoles');
    });
});

Route::controller(PasienController::class)->group(function () {
    Route::prefix('/pasien')->group(function () {
        Route::get('/', 'getPasien');
        Route::get('/{id}', 'getPasien');
        Route::post('/', 'addPasien');
        Route::put('/', 'updatePasien');
        Route::delete('/', 'deletePasien');
    });
});


Route::controller(BidangPemeriksaanController::class)->group(function () {
    Route::prefix('/bidang-pemeriksaan')->group(function () {
        Route::get('/', 'getBidangPemeriksaan');
        Route::get('/{id}', 'getBidangPemeriksaan');
        Route::post('/', 'addBidangPemeriksaan');
        Route::put('/', 'updateBidangPemeriksaan');
        Route::delete('/', 'deleteBidangPemeriksaan');
    });
});


Route::controller(MetodePemeriksaanController::class)->group(function () {
    Route::prefix('/metode-pemeriksaan')->group(function () {
        Route::get('/', 'getMetodePemeriksaan');
        Route::get('/{id}', 'getMetodePemeriksaan');
        Route::post('/', 'addMetodePemeriksaan');
        Route::put('/', 'updateMetodePemeriksaan');
        Route::delete('/', 'deleteMetodePemeriksaan');
    });
});

Route::controller(ParameterPemeriksaanController::class)->group(function () {
    Route::prefix('/parameter-pemeriksaan')->group(function () {
        Route::get('/', 'getParameterPemeriksaan');
        Route::get('/{id}', 'getParameterPemeriksaan');
        Route::post('/', 'addParameterPemeriksaan');
        Route::put('/', 'updateParameterPemeriksaan');
        Route::delete('/', 'deleteParameterPemeriksaan');
    });
});

Route::controller(ValidatorPemeriksaanController::class)->group(function () {
    Route::prefix('/validator-pemeriksaan')->group(function () {
        Route::get('/', 'getValidatorPemeriksaan');
        Route::get('/{id}', 'getValidatorPemeriksaan');
        Route::post('/', 'addValidatorPemeriksaan');
        Route::put('/', 'updateValidatorPemeriksaan');
        Route::delete('/', 'deleteValidatorPemeriksaan');
    });
});
