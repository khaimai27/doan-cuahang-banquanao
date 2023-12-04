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
        $dsSize=Size::all();
        return view('ThuocTinhProducts.danhsach-size',compact('dsSize'));
    }
    public function themSize(){
        return view('ThuocTinhProducts.them-moi-size');
    }
    public function xulyThemSize(Request $re){
        $size= new Size();
        $size->ten=$re->ten;
        $size->save();
        return redirect()->route('size.danh-sach')->with('thong_bao','THÊM THÀNH CÔNG');
    }
    public function xulyXoa($id)
    {
        $size=Size::find($id);
        if(empty($size))
        {
            return redirect()->route('size.danh-sach')->with('thong_bao', 'KHÔNG TỒN TẠI');
        }
        $size->delete();
        return redirect()->route('size.danh-sach')->with('thong_bao','XÓA THÀNH CÔNG');
    }
    public function sua($id)
    {
        $size = Size::find($id);
        if (empty( $size)) {
            return redirect()->route('size.danh-sach')->with('thong_bao', 'KHÔNG TỒN TẠI');
        }
        return view('ThuocTinhProducts.sua-size', compact('size'));
    }
    public function xulySua(Request $re,$id)
    {
        $size = Size::find($id);
        if (empty( $size)) {
            return redirect()->route('size.danh-sach')->with('thong_bao', 'KHÔNG TỒN TẠI');
        }
        $size->ten=$re->ten;
        $size->save();
        return redirect()->route('size.danh-sach')->with('thong_bao', 'SỬA SẢN PHẨM THÀNH CÔNG');
    }
       
    // Danh Muc
    public function danhSachDanhMuc(){
        $dsDanhMuc=DanhMuc::all();
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
    public function xulyxoaDanhMuc($id)
    {
        $danhmuc=DanhMuc::find($id);
        if(empty($danhmuc))
        {
            return redirect()->route('danhmuc.danh-sach')->with('thong_bao', 'KHÔNG TỒN TẠI');
        }
        $danhmuc->delete();
        return redirect()->route('danhmuc.danh-sach')->with('thong_bao','XÓA THÀNH CÔNG');
    }
    public function suadanhMuc($id)
    {
        $danhmuc = DanhMuc::find($id);
        if (empty( $danhmuc)) {
            return redirect()->route('danhmuc.danh-sach')->with('thong_bao', 'KHÔNG TỒN TẠI');
        }
        return view('ThuocTinhProducts.sua-danhmuc', compact('danhmuc'));
    }
    public function xulysuaDanhMuc(Request $re,$id)
    {
        $danhmuc = DanhMuc::find($id);
        if (empty( $size)) {
            return redirect()->route('danhmuc.danh-sach')->with('thong_bao', 'KHÔNG TỒN TẠI');
        }
        $size->ten=$re->ten;
        $size->save();
        return redirect()->route('danhmuc.danh-sach')->with('thong_bao', 'THÀNH CÔNG');
    }

}
