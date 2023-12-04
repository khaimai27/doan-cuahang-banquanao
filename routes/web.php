<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\NguoiDungController;
use App\Http\Controllers\ThuocTinhSanPhamController;
use App\Http\Controllers\SanPhamController;
// <<<<<<< HEAD
use App\Http\Controllers\QuanLyController;

// =======
use App\Http\Controllers\HoaDonController;
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
})->middleware('check.admin.login');;
Route::get('/nhanvien',[NhanVienController::class,'danhSach'])->name('account.nhanvien.danh-sach');//->middleware('check.admin.login');
Route::get('account/nhanvien/them-moi',[NhanVienController::class,'themMoi'])->name('account.nhanvien.them-moi');//->middleware('check.admin.login');
Route::post('account/nhanvien/them-moi',[NhanVienController::class,'xuLyThemMoi']);
Route::get('account/nhanvien/cap-nhat/{id}',[NhanVienController::class,'capNhat'])->name('account.nhanvien.cap-nhat');//->middleware('check.admin.login');
Route::post('account/nhanvien/cap-nhat/{id}',[NhanVienController::class,'xuLyCapNhat']);
Route::get('account/nhanvien/xoa/{id}',[NhanVienController::class,'xuLyXoa'])->name('account.nhanvien.xoa');
Route::get('account/nhanvien/chi-tiet/{id}',[NhanVienController::class,'chitiet'])->name('account.nhanvien.chitiet');

Route::get('/upload',[UpLoadController::class,'upload']);
Route::post('/do-upload',[UpLoadController::class,'uploadHandler'])->name('do-upload');


Route::get('account/khachhang/danh-sach',[NguoiDungController::class,'danhSach'])->name('account.khachhang.danh-sach');//->middleware('check.admin.login');
Route::get('account/khachhang/them-moi',[NguoiDungController::class,'themMoi'])->name('account.khachhang.them-moi');//->middleware('check.admin.login');
Route::post('account/khachhang/them-moi',[NguoiDungController::class,'xuLyThemMoi']);
Route::get('account/khachhang/cap-nhat/{id}',[NguoiDungController::class,'capNhat'])->name('account.khachhang.cap-nhat');//->middleware('check.admin.login');
Route::post('account/khachhang/cap-nhat/{id}',[NguoiDungController::class,'xuLyCapNhat']);
Route::get('account/khachhang/xoa/{id}',[NguoiDungController::class,'xuLyXoa'])->name('account.khachhang.xoa');
Route::get('account/khachhang/chi-tiet/{id}',[NguoiDungController::class,'chitiet'])->name('account.khachhang.chitiet');

Route::get('quanly/danh-sach',[QuanLyController::class,'danhSach'])->name('quanly.danh-sach');//->middleware('check.admin.login');
Route::get('quanly/them-moi',[QuanLyController::class,'themMoi'])->name('quanly.them-moi');//->middleware('check.admin.login');
Route::post('quanly/them-moi',[QuanLyController::class,'xuLyThemMoi']);
Route::get('quanly/cap-nhat/{id}',[QuanLyController::class,'capNhat'])->name('quanly.cap-nhat');//->middleware('check.admin.login');
Route::post('quanly/cap-nhat/{id}',[QuanLyController::class,'xuLyCapNhat']);
Route::get('quanly/xoa/{id}',[QuanLyController::class,'xuLyXoa'])->name('quanly.xoa');
Route::get('quanly/chi-tiet/{id}',[QuanLyController::class,'chitiet'])->name('quanly.chitiet');
// San Pham
Route::get('/san-pham',[SanPhamController::class,'danhSach'])->name('sanpham.danh-sach');
Route::get('san-pham/them-moi',[SanPhamController::class,'themMoi'])->name('sanpham.them-moi');//->middleware('check.admin.login');
Route::post('san-pham/them-moi',[SanPhamController::class,'xuLyThem'])->name('sanpham.xl-them-moi');
Route::get('san-pham/xoa/{id}',[SanPhamController::class,'xuLyXoa'])->name('sanpham.xl.xoa');
Route::get('san-pham/sua/{id}',[SanPhamController::class,'sua'])->name('sanpham.sua');//->middleware('check.admin.login');
Route::post('san-pham/sua/{id}',[SanPhamController::class,'xuLySua'])->name('sanpham.xl.sua');
Route::get('san-pham/chi-tiet/{id}',[SanPhamController::class,'chitiet'])->name('sanpham.chitiet');
// San Pham/ Size
Route::get('san-pham/size',[ThuocTinhSanPhamController::class,'danhSachSize'])->name('size.danh-sach')->middleware('auth');
Route::get('san-pham/size/them-moi',[ThuocTinhSanPhamController::class,'themSize'])->name('size.them-moi')->middleware('auth');//->middleware('check.admin.login');
Route::post('san-pham/size/them-moi',[ThuocTinhSanPhamController::class,'xuLyThemSize'])->name('size.xl-them-moi')->middleware('auth');
Route::get('san-pham/size/xoa/{id}',[ThuocTinhSanPhamController::class,'xuLyXoa'])->name('size.xl.xoa')->middleware('auth');
Route::get('san-pham/size/sua/{id}',[ThuocTinhSanPhamController::class,'sua'])->name('size.sua')->middleware('auth');//->middleware('check.admin.login');
Route::post('san-pham/size/sua/{id}',[ThuocTinhSanPhamController::class,'xuLySua'])->name('size.xl.sua')->middleware('auth');
// San Pham /DanhMuc
Route::get('san-pham/danh-muc/them-moi',[ThuocTinhSanPhamController::class,'themDanhMuc'])->name('size.them-moi')->middleware('auth');//->middleware('check.admin.login');
Route::post('san-pham/danh-muc/them-moi',[ThuocTinhSanPhamController::class,'xuLyThemDanhMuc'])->name('danhMuc.xl-them-moi')->middleware('auth');

Route::get('dang-nhap',[NhanVienController::class,'dangNhap'])->name('dang-nhap');
Route::post('dang-nhap',[NhanVienController::class,'dangNhapHandler'])->name('xl-dang-nhap');
Route::get('thongtin',[NhanVienController::class,'thongTinkhachhang'])->name('thong-tin');
Route::get('dangxuat',[NhanVienController::class,'dangXuat'])->name('dang-xuat');

//Hóa Đơn
Route::get('hoadon/them-moi',[HoaDonController::class,'create'])->name('hoa-don.them-moi');
Route::post('hoadon/them-moi',[HoaDonController::class,'xulithemmoi'])->name('hoa-don.xl-them-moi');
Route::get('hoadon/danh-sach',[HoaDonController::class,'index'])->name('hoa-don.danh-sach');
Route::get('hoadon/xoa/{id}',[HoaDonController::class,'destroy'])->name('hoa-don.xoa');
