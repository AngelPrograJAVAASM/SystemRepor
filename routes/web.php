
<?php

use App\Http\Controllers\Auth\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EmployController;
use App\Http\Controllers\ReqController;
use App\Http\Controllers\RptController;
use App\Http\Controllers\WhareController;
use App\Http\Controllers\ReturnmailController;
use App\Http\Controllers\SysRptController;
use App\Models\Req;
use App\Models\Returnmail;
use App\Models\Rpt;
use App\Models\Whare;




        Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
        Route::post('login', [LoginController::class, 'login']);
        Route::post('logout', [LoginController::class, 'logout'])->name('logout');




        Route::get('menu', [LoginController::class, 'showMenuForm'])->name('menu');
        Route::get('menuEmploy', [LoginController::class, 'showMenuEForm'])->name('menuEmploy');
        Route::get('couter', [RptController::class, 'indexrpt'])->name('couter');



        Route::get('menu', [LoginController::class, 'showMenuForm'])->name('menu');
        Route::resource('employ', EmployController::class);
        Route::resource('req', ReqController::class);
        Route::resource('rpt', RptController::class);
        Route::resource('returnmail', ReturnmailController::class);
        Route::resource('whare', WhareController::class);

        Route::post('/do.sale',[ReqController::class, 'punto_req'])->name('do.sale');
        Route::get('/do.rpt',[SysRptController::class, 'index'])->name('do.rpt');
        Route::post('/storeSysr',[SysRptController::class, 'storeSys'])->name('storeSysr');
        Route::get('/indexSeeRtq',[SysRptController::class, 'indexSeeRtq'])->name('indexSeeRtq');
        Route::get('/ShowRtqr/{id}',[SysRptController::class, 'ShowRtq'])->name('ShowRtqr');
        Route::get('/EditRtqr/{id}',[SysRptController::class, 'EditRtq'])->name('EditRtqr');
        Route::patch('/UpdateRtpr/{rpt}',[SysRptController::class, 'UpdateRtp'])->name('UpdateRtpr');

        Route::get('/ShowReturnmr/{id}',[SysRptController::class, 'ShowReturnm'])->name('ShowReturnmr');
        Route::get('/CreaReponr/{id}',[SysRptController::class, 'CreateRepon'])->name('CreaReponr');
        Route::post('/StoreReponr/{id}',[SysRptController::class, 'StoreRepon'])->name('StoreReponr');


        Route::get('/indexSeeReponr',[SysRptController::class, 'indexSeeRepon'])->name('indexSeeReponr');


   








require __DIR__.'/auth.php';
