<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NguoiDung;
use App\Models\HinhAnh;
class NguoiDungController extends Controller
{
    public function danhSach()
    {
        $nguoidung = NguoiDung::all();
        return view('nguoidung/danh-sach', compact('nguoidung'));
    }
    public function themMoi(Request $rq)
    {
        $nguoidung = NguoiDung::all();
        return view('nguoidung.them-moi', compact('nguoidung'));
    }
    public function xuLyThemMoi(Request $request )
    {
        $nguoidung = new NguoiDung();
        $nguoidung->ten = $request->ten;
        $nguoidung->account = $request->account;
        $nguoidung->password = $request->password;
        $nguoidung->so_dien_thoai = $request->so_dien_thoai;
        $nguoidung->dia_chi = $request->dia_chi;
        $nguoidung->email= $request->email;
        $nguoidung->save();

        return redirect()->route('nguoidung.danh-sach')->with('thong-bao', 'Thêm thành công');
    }
    public function capNhat($id)
    {
        $nguoidung = NguoiDung::find($id);
        return view('nguoidung/cap-nhat',compact('nguoidung'));
    }
    public function xuLyCapNhat(Request $request, $id)
    {
        $nguoidung = NguoiDung::find($id);
        $nguoidung->ten = $request->ten;
        $nguoidung->account = $request->account;
        $nguoidung->password = $request->password;
        $nguoidung->so_dien_thoai = $request->so_dien_thoai;
        $nguoidung->dia_chi = $request->dia_chi;
        $nguoidung->email= $request->email;
        $nguoidung->save();


        return redirect()->route('nguoidung.danh-sach')->with('thong-bao', 'Cập nhật thành công');
    }
    public function xuLyXoa($id)
    {
        $nguoidung = NguoiDung::find($id);
        if(empty($nguoidung))
        {
            return "Nhân viên không tồn tại";
        }
        $nguoidung->delete();
        return redirect()->route('nguoidung.danh-sach')->with('thong-bao', 'Xóa thành công');
    }
    public function chitiet($id)
    {
        $nguoidung = nguoidung::find($id);
        return view('nguoidung.chi-tiet',compact('nguoidung'));
    }
}
