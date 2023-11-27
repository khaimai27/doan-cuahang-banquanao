<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\NguoiDungController;
use App\Http\Controllers\ThuocTinhSanPhamController;
use App\Http\Controllers\SanPhamController;

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
    return view('layout');
});
Route::get('/nhanvien',[NhanVienController::class,'danhSach'])->name('nhanvien.danh-sach');//->middleware('check.admin.login');
Route::get('nhanvien/them-moi',[NhanVienController::class,'themMoi'])->name('nhanvien.them-moi');//->middleware('check.admin.login');
Route::post('nhanvien/them-moi',[NhanVienController::class,'xuLyThemMoi']);
Route::get('nhanvien/cap-nhat/{id}',[NhanVienController::class,'capNhat'])->name('nhanvien.cap-nhat');//->middleware('check.admin.login');
Route::post('nhanvien/cap-nhat/{id}',[NhanVienController::class,'xuLyCapNhat']);
Route::get('nhanvien/xoa/{id}',[NhanVienController::class,'xuLyXoa'])->name('nhanvien.xoa');
Route::get('nhanvien/chi-tiet/{id}',[NhanVienController::class,'chitiet'])->name('nhanvien.chitiet');

Route::get('nguoidung/danh-sach',[NguoiDungController::class,'danhSach'])->name('nguoidung.danh-sach');//->middleware('check.admin.login');
Route::get('nguoidung/them-moi',[NhanVienController::class,'themMoi'])->name('nguoidung.them-moi');//->middleware('check.admin.login');
Route::post('nguoidung/them-moi',[NhanVienController::class,'xuLyThemMoi']);
Route::get('nguoidung/cap-nhat/{id}',[NhanVienController::class,'capNhat'])->name('nguoidung.cap-nhat');//->middleware('check.admin.login');
Route::post('nguoidung/cap-nhat/{id}',[NhanVienController::class,'xuLyCapNhat']);
Route::get('nguoidung/xoa/{id}',[NhanVienController::class,'xuLyXoa'])->name('nguoidung.xoa');
// San Pham
Route::get('/san-pham',[SanPhamController::class,'danhSach'])->name('sanpham.danh-sach');
Route::get('san-pham/them-moi',[SanPhamController::class,'themMoi'])->name('sanpham.them-moi');//->middleware('check.admin.login');
Route::post('san-pham/them-moi',[SanPhamController::class,'xuLyThem'])->name('sanpham.xl-them-moi');
Route::get('san-pham/xoa/{id}',[SanPhamController::class,'xuLyXoa'])->name('sanpham.xl.xoa');
Route::get('san-pham/sua/{id}',[SanPhamController::class,'sua'])->name('sanpham.sua');//->middleware('check.admin.login');
Route::post('san-pham/sua/{id}',[SanPhamController::class,'xuLySua'])->name('sanpham.xl.sua');
Route::get('san-pham/chi-tiet/{id}',[SanPhamController::class,'chitiet'])->name('sanpham.chitiet');
// San Pham/ Size
Route::get('san-pham/size/them-moi',[ThuocTinhSanPhamController::class,'themSize'])->name('size.them-moi');//->middleware('check.admin.login');
Route::post('san-pham/size/them-moi',[ThuocTinhSanPhamController::class,'xuLyThemSize'])->name('size.xl-them-moi');
// San Pham /DanhMuc
Route::get('san-pham/danh-muc/them-moi',[ThuocTinhSanPhamController::class,'themDanhMuc'])->name('size.them-moi');//->middleware('check.admin.login');
Route::post('san-pham/danh-muc/them-moi',[ThuocTinhSanPhamController::class,'xuLyThemDanhMuc'])->name('danhMuc.xl-them-moi');

Route::get('dang-nhap',[NhanVienController::class,'dangNhap'])->name('dang-nhap')->middleware('guest');
Route::post('dang-nhap',[NhanVienController::class,'dangNhapHandler'])->name('xl-dang-nhap');
Route::get('thongtin',[NhanVienController::class,'thongTinNguoiDung'])->name('thong-tin');
Route::get('dangxuat',[NhanVienController::class,'dangXuat'])->name('dang-xuat');
