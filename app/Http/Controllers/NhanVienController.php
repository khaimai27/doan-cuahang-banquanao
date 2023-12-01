<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NguoiDung;
use App\Models\HinhAnh;
use App\Models\PhanQuyen;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
class NhanVienController extends Controller
{
    public function dangNhap()
    {
        return view('dang-nhap');
    }
    public function dangNhapHandler(Request $request)
    {

        if(Auth::attempt(['account'=>$request->account,'password'=>$request->password,'phan_quyen_id'=>$request->phan_quyen_id]))
        {
            $nhanvien=Auth::user();
            $HinhAnh=HinhAnh::all();
            session(['nhanvien' => $nhanvien]);
            return view('layout',compact('HinhAnh'))->with('thong_bao', 'Xin chào');
        }
        return redirect()->route('dang-nhap')->with('thong_bao', 'Sai tên đăng nhập hoặc mật khẩu');

    }
    public function thongTinNhanVien()
    {
        if(Auth::check())
        {
            $user =Auth::user();
            return $user;

        }
        return "Nguoi dung chua dang nhap";
    }
    public function dangXuat()
    {
        Auth::logout();
        return view('dang-nhap');
    }
    public function danhSach()
    {
        $HinhAnh=HinhAnh::all();
        $nhanvien = NguoiDung::all();
        $dsQuyen=PhanQuyen::all();
        return view('account.nhanvien.danh-sach', compact('nhanvien','HinhAnh','dsQuyen'));
    }
    public function themMoi(Request $rq)
    {
        $nhanvien = NguoiDung::all();
        $dsQuyen=PhanQuyen::all();
        return view('account.nhanvien.them-moi', compact('nhanvien','dsQuyen'));
    }
    public function xuLyThemMoi(Request $request)
    {

        $nhanvien = new NhanVien();
        $nhanvien->ten = $request->ten;
        $nhanvien->account = $request->account;
        $nhanvien->password = $request->password;
        $nhanvien->so_dien_thoai = $request->so_dien_thoai;
        $nhanvien->dia_chi = $request->dia_chi;
        $nhanvien->email= $request->email;
        $nhanvien->role_id=$request->role_id;
        $nhanvien->save();
        $files=$request->hinh_anh;


        foreach($files as $ha){
            $pic = new HinhAnh;
            $pic->nhan_vien_id=$nhanvien->id;
            $path=$ha->store('images/nhanvien');
            $pic->url=$path;

            $pic->save();
        }
        return redirect()->route('account.nhanvien.danh-sach')->with('thong-bao', 'Thêm thành công');
    }
    public function capNhat($id)
    {
        $nhanvien = NguoiDung::find($id);
        return view('account.nhanvien/cap-nhat',compact('nhanvien'));
    }
    public function xuLyCapNhat(Request $request, $id)
    {
        $nhanvien = NguoiDung::find($id);
        $nhanvien->ten = $request->ten;
        $nhanvien->account = $request->account;
        $nhanvien->password = $request->password;
        $nhanvien->so_dien_thoai = $request->so_dien_thoai;
        $nhanvien->dia_chi = $request->dia_chi;
        $nhanvien->email= $request->email;
        $nhanvien->save();


        return redirect()->route('account.nhanvien.danh-sach')->with('thong-bao', 'Cập nhật thành công');
    }
    public function xuLyXoa($id)
    {
        $nhanvien = NguoiDung::find($id);
        if(empty($nhanvien))
        {
            return "Nhân viên không tồn tại";
        }
        $nhanvien->delete();
        return redirect()->route('account.nhanvien.danh-sach')->with('thong-bao', 'Xóa thành công');
    }
    public function chitiet($id){

        $HinhAnh=HinhAnh::all();
        $nhanvien = NguoiDung::find($id);
        if (empty( $nhanvien)) {
            return redirect()->route('account.nhanvien.danh-sach')->with('thong_bao', 'NHÂN VIÊN KHÔNG TỒN TẠI');
        }
        return view('account.nhanvien.chi-tiet', compact('nhanvien','HinhAnh'));
    }
}
