<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\NguoiDungController;
use App\Http\Controllers\ThuocTinhSanPhamController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\HoaDonController;
use App\Http\Controllers\PhieuNhapController;
use App\Http\Controllers\PhieuXuatController;

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

Route::get('dang-nhap',[NhanVienController::class,'dangNhap'])->name('dang-nhap');
Route::post('dang-nhap',[NhanVienController::class,'dangNhapHandler'])->name('xl-dang-nhap');
Route::get('thongtin',[NhanVienController::class,'thongTinNguoiDung'])->name('thong-tin');
Route::get('dangxuat',[NhanVienController::class,'dangXuat'])->name('dang-xuat');

//Hóa Đơn
Route::get('hoadon/them-moi',[HoaDonController::class,'create'])->name('hoa-don.them-moi');
Route::post('hoadon/them-moi',[HoaDonController::class,'xulithemmoi'])->name('hoa-don.xl-them-moi');
Route::get('hoadon/danh-sach',[HoaDonController::class,'index'])->name('hoa-don.danh-sach');
Route::get('hoadon/xoa/{id}',[HoaDonController::class,'destroy'])->name('hoa-don.xoa');
Route::get('hoadon/cap-nhat/{id}',[HoaDonController::class,'update'])->name('hoa-don.cap-nhat');
Route::post('hoadon/cap-nhat/{id}',[HoaDonController::class,'xulicapnhat'])->name('hoa-don.xl-cap-nhat');

//Phiếu Nhập
Route::get('phieunhap/them-moi',[PhieuNhapController::class,'create'])->name('phieu-nhap.them-moi');
Route::post('phieunhap/them-moi',[PhieuNhapController::class,'xulithemmoi'])->name('phieu-nhap.xl-them-moi');
Route::get('phieunhap/danh-sach',[PhieuNhapController::class,'index'])->name('phieu-nhap.danh-sach');
Route::get('phieunhap/xoa/{id}',[PhieuNhapController::class,'destroy'])->name('phieu-nhap.xoa');
Route::get('phieunhap/cap-nhat/{id}',[PhieuNhapController::class,'update'])->name('phieu-nhap.cap-nhat');
Route::post('phieunhap/cap-nhat/{id}',[PhieuNhapController::class,'xulicapnhat'])->name('phieu-nhap.xl-cap-nhat');


//Phiếu Xuất
Route::get('phieuxuat/them-moi',[PhieuXuatController::class,'create'])->name('phieu-xuat.them-moi');
Route::post('phieuxuat/them-moi',[PhieuXuatController::class,'xulithemmoi'])->name('phieu-xuat.xl-them-moi');
Route::get('phieuxuat/danh-sach',[PhieuXuatController::class,'index'])->name('phieu-xuat.danh-sach');
Route::get('phieuxuat/xoa/{id}',[PhieuXuatController::class,'destroy'])->name('phieu-xuat.xoa');
Route::get('phieuxuat/cap-nhat/{id}',[PhieuXuatController::class,'update'])->name('phieu-xuat.cap-nhat');
Route::post('phieuxuat/cap-nhat/{id}',[PhieuXuatController::class,'xulicapnhat'])->name('phieu-xuat.xl-cap-nhat');