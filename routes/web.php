<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CompanyHomeController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
<<<<<<< HEAD
    return view('index');
});
Route::get('/findjob', function () {
    return view('findjob');
});
Route::get('/training', function () {
    return view('training');
});
Route::get('/article', function () {
    return view('article');
});
Route::get('/about', function () {
    return view('about');
=======
    return view('user/home');
>>>>>>> origin/Melati
});

Route::get('company/companyregistration', function () {
    return view('company/CompanyRegistration');
});

Route::prefix('admin')->middleware('auth','isAdmin')->group(function(){
    Route::get('/', [AdminController::class, 'AdminManagement'] );

});

Route::prefix('company')->middleware('auth','isCom')->group(function(){
    Route::get('/', [CompanyController::class, 'CompanyManagement']);
    Route::get('/recruitment', [CompanyController::class, 'CompanyRecruitment']);
    Route::post('/storedata', [CompanyController::class, 'StoreData']);

    Route::get('/training', function() {
        return view('company.CompanyTraining');
    });
    Route::get('/trainingmanagement', function() {
        return view('company.CompanyTrainingManagement');
    });
});

// Route::prefix('user')->middleware('auth','isUser')->group(function(){
//     Route::get('jobdetail/applyjob/{id}', [UserController::class, 'applyjob']);

// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/findjob', [UserController::class, 'findjob']);
Route::get('/', [UserController::class, 'show']);
Route::get('/jobdetail/{id}', [UserController::class, 'jobdetail']);

Route::get('jobdetail/applyjob/{id}', [UserController::class, 'applyjob'])->middleware(['auth'])->name('user.UserApplicant');
Route::post('jobdetail/applyjob/storedata', [UserController::class, 'StoreData']);
// Route::post('jobdetail/applyjob/storedata', [ApplyJobController::class, 'storeData'])->name('applyjob.storedata');

