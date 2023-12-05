<?php

namespace App\Http\Controllers;
use App\Models\KhachHang;
use App\Models\HinhAnhKhachHang;
use Illuminate\Http\Request;

class KhachHangController extends Controller
{
    public function danhSach()
    {
        $khachhang = KhachHang::all();
        $HinhKH=HinhAnhKhachHang::all();
        return view('khachhang/danh-sach', compact('khachhang','HinhKH'));
    }
    public function themMoi(Request $rq)
    {
        $khachhang = KhachHang::all();
        return view('khachhang.them-moi', compact('khachhang'));
    }
    public function xuLyThemMoi(Request $request )
    {
        $khachhang = new khachhang();
        $khachhang->ten = $request->ten;
        $khachhang->account = $request->account;
        $khachhang->password = $request->password;
        $khachhang->so_dien_thoai = $request->so_dien_thoai;
        $khachhang->dia_chi = $request->dia_chi;
        $khachhang->email= $request->email;
        $khachhang->save();

        return redirect()->route('khachhang.danh-sach')->with('thong-bao', 'Thêm thành công');
    }
    public function capNhat($id)
    {
        $HinhKH=HinhAnhKhachHang::all();
        $khachhang = KhachHang::find($id);
        return view('khachhang/cap-nhat',compact('khachhang','HinhKH'));
    }
    public function xuLyCapNhat(Request $request, $id)
    {
        $khachhang = KhachHang::find($id);
        $khachhang->ten = $request->ten;
        $khachhang->account = $request->account;
        $khachhang->password = $request->password;
        $khachhang->so_dien_thoai = $request->so_dien_thoai;
        $khachhang->dia_chi = $request->dia_chi;
        $khachhang->email= $request->email;
        $khachhang->save();


        return redirect()->route('khachhang.danh-sach')->with('thong-bao', 'Cập nhật thành công');
    }
    public function xuLyXoa($id)
    {
        $khachhang = KhachHang::find($id);
        if(empty($khachhang))
        {
            return "Nhân viên không tồn tại";
        }
        $khachhang->delete();
        return redirect()->route('khachhang.danh-sach')->with('thong-bao', 'Xóa thành công');
    }
    public function chitiet($id){
        $HinhKH=HinhAnhKhachHang::all();
        $khachhang = KhachHang::find($id);
        if (empty( $khachhang)) {
            return redirect()->route('khachhang.danh-sach')->with('thong_bao', 'NHÂN VIÊN KHÔNG TỒN TẠI');
        }
        return view('khachhang.chi-tiet', compact('khachhang', 'HinhKH'));
    }
}
