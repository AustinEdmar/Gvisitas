<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DirectionController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\ManageSubjects;
use App\Http\Controllers\Mecontroller;
use App\Http\Controllers\PoliceRankController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\StatusController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('v1')->group(function(){

    Route::post('login', [AuthController::class, 'login']);
    
    Route::post('register', [AuthController::class, 'register']);
    /* depois de se registrar preciso ir verificar a conta */
    Route::post('verify-email', [AuthController::class, 'verifyEmail']);
        /* listagem dropdown */
        Route::get('police', [PoliceRankController::class, 'index']);
      /*   Route::get('level', [LevelController::class, 'index']); */
        Route::get('direction', [DirectionController::class, 'index']);
        Route::get('department', [DepartmentController::class, 'index']);
        Route::get('section', [SectionController::class, 'index']);
        Route::get('gender', [GenderController::class, 'index']);
       /*  Route::get('status', [StatusController::class, 'index']); */

       /* recuperar senha, vai enviar email, e e add campo em resetpassord */
       Route::post('forgot-password', [AuthController::class, 'forgotPassword']);

       Route::post('reset-password', [AuthController::class, 'resetPassword']);

    
       Route::prefix('me')->group(function(){
        
        Route::get('', [Mecontroller::class, 'index']);

        Route::put('', [MeController::class, 'update']);
    });

    Route::prefix('areas')->group(function(){
        
      Route::get('', [DirectionController::class, 'index']);

      
  });
    Route::prefix('manage')->group(function(){
        
      Route::get('', [ManageSubjects::class, 'index']);

      
  });
       
});


