<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Size;
use App\Models\MauSac;
use App\Models\DanhMuc;
use App\Models\HinhAnhSanPham;


class ThuocTinhSanPhamController extends Controller
{
    // Size
    public function danhSachSize(){
        $size=Size::all();
        return view('ThuocTinhProducts.danhsach-size',compact('dsSize'));
    }
    public function themSize(){
        return view('ThuocTinhProducts.them-moi-size');
    }
    public function xulyThemSize(Request $re){
        $size= new Size();
        $size->ten=$re->ten;
        $size->save();
    }
    // Danh Muc
    public function danhSachDanhMuc(){
        $danhmuc=DanhMuc::all();
        return view('ThuocTinhProducts.danhsach-danhMuc',compact('dsDanhMuc'));
    }
    public function themDanhMuc(){
        return view('ThuocTinhProducts.them-moi-DanhMuc');
    }
    public function xulyThemDanhMuc(Request $re){
        $danhmuc= new DanhMuc();
        $danhmuc->ten=$re->ten;
        $danhmuc->save();
    }
}
