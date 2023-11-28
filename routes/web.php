<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\NguoiDungController;
use App\Http\Controllers\ThuocTinhSanPhamController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\QuanLyController;

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
})->middleware('auth');
Route::get('/nhanvien',[NhanVienController::class,'danhSach'])->name('nhanvien.danh-sach')->middleware('auth');//->middleware('check.admin.login');
Route::get('nhanvien/them-moi',[NhanVienController::class,'themMoi'])->name('nhanvien.them-moi')->middleware('auth');//->middleware('check.admin.login');
Route::post('nhanvien/them-moi',[NhanVienController::class,'xuLyThemMoi'])->middleware('auth');
Route::get('nhanvien/cap-nhat/{id}',[NhanVienController::class,'capNhat'])->name('nhanvien.cap-nhat')->middleware('auth');//->middleware('check.admin.login');
Route::post('nhanvien/cap-nhat/{id}',[NhanVienController::class,'xuLyCapNhat'])->middleware('auth');
Route::get('nhanvien/xoa/{id}',[NhanVienController::class,'xuLyXoa'])->name('nhanvien.xoa')->middleware('auth')->middleware('auth');
Route::get('nhanvien/chi-tiet/{id}',[NhanVienController::class,'chitiet'])->name('nhanvien.chitiet')->middleware('auth');

Route::get('/upload',[UpLoadController::class,'upload'])->middleware('auth');
Route::post('/do-upload',[UpLoadController::class,'uploadHandler'])->name('do-upload')->middleware('auth');


Route::get('nguoidung/danh-sach',[NguoiDungController::class,'danhSach'])->name('nguoidung.danh-sach')->middleware('auth');//->middleware('check.admin.login');
Route::get('nguoidung/them-moi',[NguoiDungController::class,'themMoi'])->name('nguoidung.them-moi')->middleware('auth');//->middleware('check.admin.login');
Route::post('nguoidung/them-moi',[NguoiDungController::class,'xuLyThemMoi'])->middleware('auth');
Route::get('nguoidung/cap-nhat/{id}',[NguoiDungController::class,'capNhat'])->name('nguoidung.cap-nhat')->middleware('auth');//->middleware('check.admin.login');
Route::post('nguoidung/cap-nhat/{id}',[NguoiDungController::class,'xuLyCapNhat'])->middleware('auth');
Route::get('nguoidung/xoa/{id}',[NguoiDungController::class,'xuLyXoa'])->name('nguoidung.xoa')->middleware('auth');
Route::get('nguoidung/chi-tiet/{id}',[NguoiDungController::class,'chitiet'])->name('nguoidung.chitiet')->middleware('auth');

Route::get('quanly/danh-sach',[QuanLyController::class,'danhSach'])->name('quanly.danh-sach')->middleware('auth');//->middleware('check.admin.login');
Route::get('quanly/them-moi',[QuanLyController::class,'themMoi'])->name('quanly.them-moi')->middleware('auth');//->middleware('check.admin.login');
Route::post('quanly/them-moi',[QuanLyController::class,'xuLyThemMoi'])->middleware('auth');
Route::get('quanly/cap-nhat/{id}',[QuanLyController::class,'capNhat'])->name('quanly.cap-nhat')->middleware('auth');//->middleware('check.admin.login');
Route::post('quanly/cap-nhat/{id}',[QuanLyController::class,'xuLyCapNhat'])->middleware('auth');
Route::get('quanly/xoa/{id}',[QuanLyController::class,'xuLyXoa'])->name('quanly.xoa')->middleware('auth');
Route::get('quanly/chi-tiet/{id}',[QuanLyController::class,'chitiet'])->name('quanly.chitiet')->middleware('auth');
// San Pham
Route::get('/san-pham',[SanPhamController::class,'danhSach'])->name('sanpham.danh-sach')->middleware('auth');
Route::get('san-pham/them-moi',[SanPhamController::class,'themMoi'])->name('sanpham.them-moi')->middleware('auth');//->middleware('check.admin.login');
Route::post('san-pham/them-moi',[SanPhamController::class,'xuLyThem'])->name('sanpham.xl-them-moi')->middleware('auth');
Route::get('san-pham/xoa/{id}',[SanPhamController::class,'xuLyXoa'])->name('sanpham.xl.xoa')->middleware('auth');
Route::get('san-pham/sua/{id}',[SanPhamController::class,'sua'])->name('sanpham.sua')->middleware('auth');//->middleware('check.admin.login');
Route::post('san-pham/sua/{id}',[SanPhamController::class,'xuLySua'])->name('sanpham.xl.sua')->middleware('auth');
Route::get('san-pham/chi-tiet/{id}',[SanPhamController::class,'chitiet'])->name('sanpham.chitiet')->middleware('auth');
// San Pham/ Size
Route::get('san-pham/size/them-moi',[ThuocTinhSanPhamController::class,'themSize'])->name('size.them-moi')->middleware('auth');//->middleware('check.admin.login');
Route::post('san-pham/size/them-moi',[ThuocTinhSanPhamController::class,'xuLyThemSize'])->name('size.xl-them-moi')->middleware('auth');
// San Pham /DanhMuc
Route::get('san-pham/danh-muc/them-moi',[ThuocTinhSanPhamController::class,'themDanhMuc'])->name('size.them-moi')->middleware('auth');//->middleware('check.admin.login');
Route::post('san-pham/danh-muc/them-moi',[ThuocTinhSanPhamController::class,'xuLyThemDanhMuc'])->name('danhMuc.xl-them-moi')->middleware('auth');

Route::get('dang-nhap',[NhanVienController::class,'dangNhap'])->name('dang-nhap')->middleware('guest');
Route::post('dang-nhap',[NhanVienController::class,'dangNhapHandler'])->name('xl-dang-nhap');
Route::get('thongtin',[NhanVienController::class,'thongTinNguoiDung'])->name('thong-tin');
Route::get('dangxuat',[NhanVienController::class,'dangXuat'])->name('dang-xuat');
