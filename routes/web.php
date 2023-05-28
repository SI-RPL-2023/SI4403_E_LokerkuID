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
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('user/home');
});

Route::get('company/companyregistration', function () {
    return view('company/CompanyRegistration');
});

Route::prefix('admin')->middleware('auth','isAdmin')->group(function(){
    Route::get('/', [AdminController::class, 'UserManagement'] );
    Route::delete('/{id}', [AdminController::class,'delete']);
    Route::get('/jobmanagement', [AdminController::class, 'jobmanagement'] );
    Route::delete('jobmanagement/{id}', [AdminController::class,'deletejob']);
    Route::get('/article', [AdminController::class, 'article'] );
    Route::post('/store', [AdminController::class, 'store'] );
    Route::get('/articlemanagement', [AdminController::class, 'articlemanagement']);
    Route::delete('articlemanagement/{id}', [AdminController::class,'deletepost']);
});

Route::prefix('company')->middleware('auth','isCom')->group(function(){
    Route::get('/home', [CompanyController::class, 'CompanyManagement']);
    Route::get('/recruitment', [CompanyController::class, 'CompanyRecruitment']);
    Route::get('/reviewapplicants', [CompanyController::class, 'ReviewApplicants']);
    Route::post('/storedata', [CompanyController::class, 'StoreData']);
    Route::get('/article', [CompanyController::class, 'WriteArticle']);
    Route::get('/articlemanagement', [CompanyController::class,'articlemanagement']);
    Route::delete('articlemanagement/{id}', [CompanyController::class,'deletearticle']);
    Route::post('article/post', [CompanyController::class, 'PostArticle']);
    Route::get('{id}/edit', [CompanyController::class,'edit']);
    Route::put('/{id}/update', [CompanyController::class,'update']);
    Route::put('/{id}', [CompanyController::class,'close']);
    Route::delete('/{id}', [CompanyController::class,'delete']);
    Route::get('/training', [CompanyController::class, 'training']);
    Route::post('/training/store', [CompanyController::class,'StoreTraining']);
    Route::get('/trainingmanagement', [CompanyController::class,'trainingmanagement']);
    Route::delete('/trainingmanagement/{id}', [CompanyController::class,'deletetraining']);
    Route::get('/profile', [CompanyController::class,'profile']);
    Route::get('/editcomprofile', [CompanyController::class,'editprofile']);
    Route::put('editprofile/{id}/edit', [CompanyController::class,'updateprofile']);
    Route::get('/{id}/DetailApplicant', [CompanyController::class,'DetailApplicant']);

});

Auth::routes();

Route::prefix('user')->middleware('auth','isUser')->group(function(){
    Route::get('/profile', [UserController::class, 'UserProfile']);
    Route::get('/editprofile', [UserController::class, 'UserEditProfile']);
    Route::put('/editprofile/{id}/edit', [UserController::class, 'UserUpdateProfile']);
    Route::get('jobdetail/applyjob/{id}', [UserController::class, 'applyjob']);

});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/findjob', [UserController::class, 'findjob']);
Route::get('/', [UserController::class, 'show']);
Route::get('/jobdetail/{id}', [UserController::class, 'jobdetail']);
Route::get('/training', [UserController::class, 'training']);
Route::get('/detailtraining/{id}', [UserController::class, 'detailtraining']);
Route::get('/article', [UserController::class, 'article']);
Route::get('/readarticle/{id}', [UserController::class, 'readarticle']);
Route::get('/about', [UserController::class, 'AboutUs']);




Route::get('jobdetail/applyjob/{id}', [UserController::class, 'applyjob'])->middleware(['auth'])->name('user.UserApplicant');
Route::post('jobdetail/applyjob/storedata', [UserController::class, 'StoreData']);
// Route::post('jobdetail/applyjob/storedata', [ApplyJobController::class, 'storeData'])->name('applyjob.storedata');

