<?php

use App\Http\Controllers\dashboard;
use App\Http\Controllers\admin;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\indexController;
use Illuminate\support\Facades\Auth;
use Illuminate\Support\Facades\Route;


use App\Http\Middleware\AuthAdmin;
use App\Http\Middleware\LoggedAdmin;

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

// Route::get('admin',function(){

//     return view('admin.login');

// });

// Route::get('user',function(){

//     return view('user.login');

// });


Route::middleware([AuthAdmin::class])->prefix('admin')->group(function(){

    Route::get('', [AdminController::class,'index']);
    
    Route::get('dashboard',[AdminController::class,'dashboard']);
    
    Route::get('stadistics',[AdminController::class,'showStats']);

    Route::get('apartments',function(){

        echo 'put a apartments view';

    });

    Route::prefix('services')->group(function(){

        Route::get('',function(){

            echo "services index";

        });

    });

    Route::get('users', function(){

        echo 'users jijiji';

    });

    Route::get('profile',[AdminController::class,'profile']);
    
});

Route::middleware([LoggedAdmin::class])->prefix('admin')->group(function(){

    Route::get('register',function(){

        return view('admin.register');
    });
    
    Route::post('register',[AdminController::class,'createAdmin']);
    
    Route::get('login',function(){

        return view('admin.login');

    });

    Route::post('login',[AdminController::class,'loginAdmin']);

    
});

Route::get('admin/logout',[AdminController::class,'logout']);


// Route::prefix('user')->group(function(){

//     Route::get('',function(){
//         return view('user.register');
//     });

//     Route::get('register',function(){
//         return view('register');
//     });

//     Route::get('login',function(){
//         return view('login');
//     });

//     Route::get('dashboard',function(){
//         return view('dashboard');
//     });


// });

Route::get('',[indexController::class,'dashboard']);