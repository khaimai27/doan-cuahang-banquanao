<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NguoiDung;
use App\Models\HinhAnhNguoiDung;

use App\Models\QuanLy;
class NguoiDungController extends Controller
{
    public function danhSach()
    {
        $HinhAnhND=HinhAnhNguoiDung::all();
        $khachhang = NguoiDung::all();
        return view('account.khachhang.danh-sach', compact('khachhang','HinhAnhND'));
    }
    public function themMoi(Request $rq)
    {
        $khachhang = NguoiDung::all();
        return view('account.khachhang.them-moi', compact('khachhang'));
    }
    public function xuLyThemMoi(Request $request )
    {
        $khachhang = new NguoiDung();
        $khachhang->ten = $request->ten;
        $khachhang->account = $request->account;
        $khachhang->password = $request->password;
        $khachhang->so_dien_thoai = $request->so_dien_thoai;
        $khachhang->dia_chi = $request->dia_chi;
        $khachhang->email= $request->email;
        $khachhang->save();
        $files = $request->hinh_anh;

        foreach($files as $hinhnd){
            $pic = new HinhAnhNguoiDung();
            $pic->url = $hinhnd->store('images/khachhang');
            $pic->nguoi_dung_id = $khachhang->id;
            $pic->save();
        }
        return redirect()->route('account.khachhang.danh-sach')->with('thong-bao', 'Thêm thành công');
    }
    public function capNhat($id)
    {
        $khachhang = NguoiDung::find($id);
        return view('nguoidung/cap-nhat',compact('khachhang'));
    }
    public function xuLyCapNhat(Request $request, $id)
    {
        $khachhang = NguoiDung::find($id);
        $khachhang->ten = $request->ten;
        $khachhang->account = $request->account;
        $khachhang->password = $request->password;
        $khachhang->so_dien_thoai = $request->so_dien_thoai;
        $khachhang->dia_chi = $request->dia_chi;
        $khachhang->email= $request->email;
        $khachhang->role_id=$request->role_id;
        $khachhang->save();


        return redirect()->route('account.khachhang.danh-sach')->with('thong-bao', 'Cập nhật thành công');
    }
    public function xuLyXoa($id)
    {
        $khachhang = NguoiDung::find($id);
        if(empty($khachhang))
        {
            return "Nhân viên không tồn tại";
        }
        $khachhang->delete();
        return redirect()->route('account.khachhang.danh-sach')->with('thong-bao', 'Xóa thành công');
    }
    public function chitiet($id)
    {
        $HinhAnhND=HinhAnhNguoiDung::all();
        $khachhang = nguoidung::find($id);
        if (empty( $khachhang)) {
            return redirect()->route('account.khachhang.danh-sach')->with('thong_bao', 'KHÁCH HÀNG KHÔNG TỒN TẠI');
        }
        return view('account.khachhang.chi-tiet', compact('khachhang','HinhAnhND'));
    }
}

// public function danhSach()
//     {
//         $quanly = QuanLy::all();
//         return view('quanly.danh-sach', compact('quanly'));
//     }
//     public function themMoi(Request $rq)
//     {
//         $quanly = QuanLy::all();
//         return view('quanly.them-moi', compact('quanly'));
//     }
//     public function xuLyThemMoi(Request $request )
//     {
//         $quanly = new quanly();
//         $quanly->ten = $request->ten;
//         $quanly->account = $request->account;
//         $quanly->password = $request->password;
//         $quanly->so_dien_thoai = $request->so_dien_thoai;
//         $quanly->dia_chi = $request->dia_chi;
//         $quanly->email= $request->email;
//         $quanly->save();
//         return redirect()->route('quanly.danh-sach')->with('thong_bao', 'Thêm thành công');
//     }
//     public function capNhat($id)
//     {
//         $quanly = QuanLy::find($id);
//         return view('quanly/cap-nhat',compact('quanly'));
//     }
//     public function xuLyCapNhat(Request $request, $id)
//     {
//         $quanly = QuanLy::find($id);
//         $quanly->ten = $request->ten;
//         $quanly->account = $request->account;
//         $quanly->password = $request->password;
//         $quanly->so_dien_thoai = $request->so_dien_thoai;
//         $quanly->dia_chi = $request->dia_chi;
//         $quanly->email= $request->email;
//         $quanly->save();


//         return redirect()->route('quanly.danh-sach')->with('thong_bao', 'Cập nhật thành công');
//     }
//     public function xuLyXoa($id)
//     {
//         $quanly = QuanLy::find($id);
//         if(empty($quanly))
//         {
//             return "Nhân viên không tồn tại";
//         }
//         $quanly->delete();
//         return redirect()->route('quanly.danh-sach')->with('thong_bao', 'Xóa thành công');
//     }
//     public function chitiet($id)
//     {
//         $quanly = QuanLy::find($id);
//         return view('quanly.chi-tiet',compact('quanly'));
//     }
