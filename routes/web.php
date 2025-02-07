<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\DiagnosisController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\DashboardRuleController;
use App\Http\Controllers\DashboardGejalaController;
use App\Http\Controllers\DashboardPenyakitController;
use App\Http\Controllers\DataPasienController;


Route::get('/', [PublicController::class,'landingpage']);
Route::get('/landingpage', [PublicController::class,'landingpage'])->name('landingpage');
Route::get('/info', [PublicController::class,'info'])->name('info');
Route::get('/alur-sistem', [PublicController::class,'alursistem'])->name('alursistem');



Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
    Route::post('/login', [AuthController::class, 'verify'])->name('auth.verify');

    Route::get('/register', [AuthController::class, 'registerView'])->name('register.view');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
});

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware'=>'auth:admin'], function(){
    Route::get('dashboard', [DashboardAdminController::class, 'index'])->name('admin.dashboard');

    Route::resource('/dashboard/penyakit', DashboardPenyakitController::class);
    Route::resource('/dashboard/gejala', DashboardGejalaController::class);
    Route::resource('/dashboard/rule', DashboardRuleController::class);

    Route::get('/data-pasien', [DataPasienController::class, 'index'])->name('patients.index');
    Route::get('/data-pasien/{id}/history', [DataPasienController::class, 'show'])->name('patients.history');

    Route::get('/check-duplicate-gejala', [DashboardRuleController::class, 'checkDuplicateGejala'])->name('rule.checkDuplicateGejala');
});

Route::group(['middleware'=>'auth:user'], function(){
    Route::get('/profile', [UserProfileController::class, 'index'])->name('user_profiles.index');
    Route::get('/profile/edit', [UserProfileController::class, 'edit'])->name('user_profiles.edit');
    Route::put('/profile/update', [UserProfileController::class, 'update'])->name('user_profiles.update');

    Route::get('/diagnose', function(){return view('user.dashboard.diagnosa.landingpage');})->name('diagnose');
    Route::get('/diagnose/diagnosis', [DiagnosisController::class, 'showQuestion'])->name('diagnosis.index');
    Route::post('/diagnose/diagnosis', [DiagnosisController::class, 'diagnosis'])->name('diagnosis.process');
    Route::get('/diagnose/result', [DiagnosisController::class, 'showResult'])->name('diagnose.result');

    Route::get('/diagnose/riwayat', [DiagnosisController::class, 'showHistory'])->name('diagnosa.riwayat');

});



