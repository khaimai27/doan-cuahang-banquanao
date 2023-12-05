<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NhanVien;
use App\Models\HinhAnh;
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

        if(Auth::attempt(['account'=>$request->account,'password'=>$request->password]))
        {
            $nhanvien=Auth::user();
            $HinhAnh=HinhAnh::all();
            // session(['nhanvien' => $nhanvien, 'hinh_anh_url' => $nhanvien->HinhKH->url]);
            return view('layout',compact('HinhAnh'))->with('thong_bao', 'Xin chào');
        }
        return redirect()->route('dang-nhap')->with('thong_bao', 'Sai tên đăng nhập hoặc mật khẩu');

    }
    public function thongTinNguoiDung()
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
        $nhanvien = NhanVien::all();
        return view('nhanvien.danh-sach', compact('nhanvien','HinhAnh'));
    }
    public function themMoi(Request $rq)
    {
        $nhanvien = NhanVien::all();
        return view('nhanvien.them-moi', compact('nhanvien'));
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
        $nhanvien->save();
        $files=$request->hinh_anh;


        foreach($files as $ha){
            $pic = new HinhAnh;
            $pic->nhan_vien_id=$nhanvien->id;
            $path=$ha->store('images/nhanvien');
            $pic->url=$path;

            $pic->save();
        }
        return redirect()->route('nhanvien.danh-sach')->with('thong-bao', 'Thêm thành công');
    }
    public function capNhat($id)
    {
        $nhanvien = NhanVien::find($id);
        $HinhAnh=HinhAnh::all();
        return view('nhanvien/cap-nhat',compact('nhanvien','HinhAnh'));
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
        $HinhAnh=HinhAnh::find($id);
        if(empty($nhanvien)&&emty($HinhAnh))
        {
            return "Nhân viên không tồn tại";
        }
        $nhanvien->delete();
        $HinhAnh->delete();
        return redirect()->route('nhanvien.danh-sach')->with('thong-bao', 'Xóa thành công');
    }
    public function chitiet($id){
        $HinhAnh=HinhAnh::all();
        $nhanvien = NhanVien::find($id);
        if (empty( $nhanvien)) {
            return redirect()->route('nhanvien.danh-sach')->with('thong_bao', 'NHÂN VIÊN KHÔNG TỒN TẠI');
        }
        return view('nhanvien.chi-tiet', compact('nhanvien', 'HinhAnh'));
    }
}
