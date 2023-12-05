<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APINhanVienController;
use App\Http\Controllers\APIKhachHangController;
use App\Http\Controllers\APIHinhAnhNhanVienController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("nhanvien/danh-sach",[APINhanVienController::class,"layDanhSach"]);
Route::get("nhanvien/danh-sach/{id}",[APINhanVienController::class,"layChiTiet"]);
Route::post("nhanvien/danh-sach",[APINhanVienController::class,"themMoi"]);
Route::put("nhanvien/danh-sach/{id}",[APINhanVienController::class,"capNhat"]);
Route::delete("nhanvien/danh-sach/{id}",[APINhanVienController::class,"xoa"]);

Route::get("khachhang/danh-sach",[APIKhachHangController::class,"layDanhSach"]);
Route::get("khachhang/danh-sach/{id}",[APIKhachHangController::class,"layChiTiet"]);
Route::post("khachhang/danh-sach",[APIKhachHangController::class,"themMoi"]);
Route::put("khachhang/danh-sach/{id}",[APIKhachHangController::class,"capNhat"]);
Route::delete("khachhang/danh-sach/{id}",[APIKhachHangController::class,"xoa"]);



