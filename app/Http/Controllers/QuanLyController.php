<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuanLy;

use Illuminate\Support\Facades\Auth;
class QuanLyController extends Controller
{
    public function danhSach()
    {
        $quanly = QuanLy::all();
        return view('quanly.danh-sach', compact('quanly'));
    }
    public function themMoi(Request $rq)
    {
        $quanly = QuanLy::all();
        return view('quanly.them-moi', compact('quanly'));
    }
    public function xuLyThemMoi(Request $request )
    {
        $quanly = new quanly();
        $quanly->ten = $request->ten;
        $quanly->account = $request->account;
        $quanly->password = $request->password;
        $quanly->so_dien_thoai = $request->so_dien_thoai;
        $quanly->dia_chi = $request->dia_chi;
        $quanly->email= $request->email;
        $quanly->save();
        return redirect()->route('quanly.danh-sach')->with('thong_bao', 'Thêm thành công');
    }
    public function capNhat($id)
    {
        $quanly = QuanLy::find($id);
        return view('quanly/cap-nhat',compact('quanly'));
    }
    public function xuLyCapNhat(Request $request, $id)
    {
        $quanly = QuanLy::find($id);
        $quanly->ten = $request->ten;
        $quanly->account = $request->account;
        $quanly->password = $request->password;
        $quanly->so_dien_thoai = $request->so_dien_thoai;
        $quanly->dia_chi = $request->dia_chi;
        $quanly->email= $request->email;
        $quanly->save();


        return redirect()->route('quanly.danh-sach')->with('thong_bao', 'Cập nhật thành công');
    }
    public function xuLyXoa($id)
    {
        $quanly = QuanLy::find($id);
        if(empty($quanly))
        {
            return "Nhân viên không tồn tại";
        }
        $quanly->delete();
        return redirect()->route('quanly.danh-sach')->with('thong_bao', 'Xóa thành công');
    }
    public function chitiet($id)
    {
        $quanly = QuanLy::find($id);
        return view('quanly.chi-tiet',compact('quanly'));
    }
}
