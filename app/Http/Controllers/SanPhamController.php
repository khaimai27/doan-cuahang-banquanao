<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SanPham;
use App\Models\DanhMuc;
use App\Models\MauSac;
use App\Models\Size;
use App\Models\HinhAnhSanPham;

class SanPhamController extends Controller
{
    public function danhSach(){
        $dsSanPham=SanPham::all();
        return view('products.danh-sach',compact('dsSanPham'));
    }
    public function themMoi(){
        $dsDanhMuc=DanhMuc::all();
        $dsMauSac=MauSac::all();
        $dsSize=Size::all();
        return view('products.them-moi', compact('dsDanhMuc', 'dsMauSac', 'dsSize'));
    }
    public function xulyThem(Request $re){
        
        $sanpham=new SanPham();
        $sanpham->ten=$re->ten;
        $sanpham->danh_muc_id=$re->danh_muc_id;
        $sanpham->mau_sac_id=$re->mau_sac_id;
        $sanpham->so_luong_ton=$re->so_luong_ton;
        $sanpham->gia=$re->gia;
        $sanpham->size_id=$re->size_id;
        $sanpham->mo_ta=$re->mo_ta;
        $sanpham->save();
        $files = $re->file('hinh_anh_id');
        
        foreach($files as $hinhanh){
            $pic = new HinhAnhSanPham();
            $pic->url = $hinhanh->store('uploads');
            $pic->san_pham_id = $sanpham->id;
            $pic->save();
        }
        return redirect()->route('sanpham.danh-sach')->with('thong_bao', 'THÊM SẢN PHẨM THÀNH CÔNG');
        }
        public function xulyXoa($id)
    {
        $sanpham=SanPham::find($id);
        if(empty($sanpham))
        {
            return redirect()->route('sanpham.danh-sach')->with('thong_bao', 'SẢN PHẨM KHÔNG TỒN TẠI');
        }
        $sanpham->delete();
        return redirect()->route('sanpham.danh-sach')->with('thong_bao','XÓA SẢN PHẨM THÀNH CÔNG');
    }
    public function sua($id)
    {
        $dsDanhMuc=DanhMuc::all();
        $dsMauSac=MauSac::all();
        $dsSize=Size::all();
        $sanpham = SanPham::find($id);
        if (empty( $sanpham)) {
            return redirect()->route('sanpham.danh-sach')->with('thong_bao', 'SẢN PHẨM KHÔNG TỒN TẠI');
        }
        return view('products.sua', compact('sanpham','dsDanhMuc', 'dsMauSac', 'dsSize'));
    }
    public function xulySua(Request $re,$id)
    {
        $sanpham = SanPham::find($id);
        if (empty( $sanpham)) {
            return redirect()->route('sanpham.danh-sach')->with('thong_bao', 'SẢN PHẨM KHÔNG TỒN TẠI');
        }      
        $sanpham->ten=$re->ten;
        $sanpham->danh_muc_id=$re->danh_muc_id;
        $sanpham->mau_sac_id=$re->mau_sac_id;
        $sanpham->so_luong_ton=$re->so_luong_ton;
        $sanpham->gia=$re->gia;
        $sanpham->size_id=$re->size_id;
        $sanpham->mo_ta=$re->mo_ta;
        $sanpham->save();
        $files = $re->file('hinh_anh_id');
        
        foreach($files as $hinhanh){
            $pic = new HinhAnhSanPham();
            $pic->url = $hinhanh->store('uploads');
            $pic->san_pham_id = $sanpham->id;
            $pic->save();
        }
        return redirect()->route('sanpham.danh-sach')->with('thong_bao', 'SỬA SẢN PHẨM THÀNH CÔNG');
    }
    public function chitiet($id){
        $dsDanhMuc=DanhMuc::all();
        $dsMauSac=MauSac::all();
        $dsSize=Size::all();
        $dsHinhanh=HinhAnhSanPham::all();
        $sanpham = SanPham::find($id);
        if (empty( $sanpham)) {
            return redirect()->route('sanpham.danh-sach')->with('thong_bao', 'SẢN PHẨM KHÔNG TỒN TẠI');
        }
        return view('products.chi-tiet', compact('sanpham','dsDanhMuc', 'dsMauSac', 'dsSize', 'dsHinhanh'));
    }
}
