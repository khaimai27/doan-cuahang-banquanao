<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NhanVien;
class NhanVienController extends Controller
{
    public function danhSach()
    {
        $nhanvien = NhanVien::all();
        return view('nhanvien.danh-sach', compact('nhanvien'));
    }
    public function themMoi(Request $rq)
    {
        $nhanvien = NhanVien::all();
        return view('nhanvien.them-moi', compact('nhanvien'));
    }
    public function xuLyThemMoi(Request $request )
    {
        $nhanvien = new NhanVien();
        $nhanvien->ten = $request->ten;
        $nhanvien->account = $request->account;
        $nhanvien->password = $request->password;
        $nhanvien->so_dien_thoai = $request->so_dien_thoai;
        $nhanvien->dia_chi = $request->dia_chi;
        $nhanvien->email= $request->email;
        $nhanvien->save();
        return redirect()->route('nhanvien.danh-sach')->with('thong-bao', 'Thêm thành công');
    }
    public function capNhat($id)
    {
        $nhanvien = NhanVien::find($id);
        return view('nhanvien/cap-nhat',compact('nhanvien'));
    }
    public function xuLyCapNhat(Request $request, $id)
    {
        $nhanvien = NhanVien::find($id);
        $nhanvien->ten = $request->ten;
        $nhanvien->account = $request->account;
        $nhanvien->password = $request->password;
        $nhanvien->so_dien_thoai = $request->so_dien_thoai;
        $nhanvien->dia_chi = $request->dia_chi;
        $nhanvien->email= $request->email;
        $nhanvien->save();


        return redirect()->route('nhanvien.danh-sach')->with('thong-bao', 'Cập nhật thành công');
    }
    public function xuLyXoa($id)
    {
        $nhanvien = NhanVien::find($id);
        if(empty($nhanvien))
        {
            return "Nhân viên không tồn tại";
        }
        $nhanvien->delete();
        return redirect()->route('nhanvien.danh-sach')->with('thong-bao', 'Xóa thành công');
    }
}
