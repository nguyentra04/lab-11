<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\NHTQuanTriController;
use App\Http\Controllers\NHTController;
use App\Http\Controllers\NHTLoaiSPController;
use App\Http\Controllers\NHTSPController;
use App\Models\NHTQuanTrimodel;
use App\Models\NHTLoaiSPmodel;
use App\Models\NHTSanPhammodel;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/nhtquantri', [NHTQuanTriController::class, 'list'])->name('nhtquantri.list');

#admins -route
Route::get('/nht-admins', function () {
    return view('NHTadmins.index');
});
#LoaiSanPham
route::get('/nht-admins/nhtloaisp',[NHTLoaiSPController::class,'NHTlist'])->name('NHTadmins.NHTloaisp.NHTlist');
//create
route::get('/nht-admins/nhtloaisp/nht-create',[NHTLoaiSPController::class,'NHTcreate'])
        ->name('NHTadmins.NHTloaisp.nhtcreate');
route::post('/nht-admins/nhtloaisp/nht-create',[NHTLoaiSPController::class,'NHTcreateSubmit'])
        ->name('NHTadmins.NHTloaisp.nhtcreatesubmit');
//edit 
route::get('/nht-admins/nhtloaisp/nht-edit/{id}',[NHTLoaiSPController::class,'NHTedit'])
    ->name('NHTadmins.NHTloaisp.nhtedit');
route::post('/nht-admins/nhtloaisp/nht-edit',[NHTLoaiSPController::class,'NHTeditSubmit'])
    ->name('NHTadmins.NHTloaisp.NHTeditsubmit');
//delete
route::get('/nht-admins/nhtloaisp/nht-delete/{id}',[NHTLoaiSPController::class,'NHTdelete'])
    ->name('NHTadmins.NHTloaisp.nhtdelete');
route::post('/nht-admins/nhtloaisp/nht-delete',[NHTLoaiSPController::class,'NHTdeleteSubmit'])
    ->name('NHTadmins.NHTloaisp.nhtdeletesubmit');

#SanPham
route::get('/nht-admins/nhtsanpham',[NHTSPController::class,'NHTlist'])
    ->name('NHTadmins.NHTSanPham.NHTlist');
//create
route::get('/nht-admins/nhtsanpham/nht-create',[NHTSPController::class,'NHTcreate'])
    ->name('NHTadmins.NHTSanPham.nhtcreate');
route::post('/nht-admins/nhtsanpham/nht-create',[NHTSPController::class,'NHTcreateSubmit'])
    ->name('NHTadmins.NHTSanPham.NHTcreatesubmit');
//edit
route::get('/nht-admins/nhtsanpham/nht-edit/{id}',[NHTSPController::class,'NHTedit'])
    ->name('NHTadmins.NHTSanPham.nhtedit');
route::post('/nht-admins/nhtsanpham/nht-edit',[NHTSPController::class,'NHTeditSubmit'])
    ->name('NHTadmins.NHTSanPham.NHTeditsubmit');
//delete
route::get('/nht-admins/nhtsanpham/nht-delete/{id}',[NHTSPController::class,'NHTdelete'])
    ->name('NHTadmins.NHTSanPham.nhtdelete');
route::post('/nht-admins/nhtsanpham/nht-delete',[NHTSPController::class,'NHTdeleteSubmit'])
    ->name('NHTadmins.NHTSanPham.NHTdeletesubmit');