<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\NhanVien;
class APINhanVienController extends Controller
{
    public function layDanhSach()
    {
        $nhanvien=NhanVien::all();
        return response()->json([
            'success' => true,
            'data' => $nhanvien
        ]);
    }
    public function layChiTiet($id)
    {
        $nhanvien=NhanVien::find($id);
        if(empty($nhanvien)){
        return response()->json([
            'success' => false,
            'message' => "Nhan Vien ID {$id} khong ton tai"
        ]);}
        return response()->json([
            'success' =>true,
            'data' =>$nhanvien
        ]);
    }
    public function themMoi(request $rq)
    {
        if(empty($rq->ten)){
            return response()->json([
                'succes' => false,
                'message' => "chưa nhập tên nhân viên"
            ]);
        }
        if(!empty($nhanvien))
        {
            return response()->json([
            'succes'=>false,
            'message'=>"Nhan vien {$rq -> ten} da ton tai"
            ]);
        }
        $nhanvien =new NhanVien;
        $nhanvien->ten=$request->ten;
        $nhanvien->save;

            return response()->json([
                'succes'=>true,
                'message'=>"them moi thanh cong"
            ]);
    }
    public function capNhat(request $request,$id)
    {
        $nhanvien=NhanVien::find($id);
        if(empty($nhanvien))
        {
            return response()->json([
                'succes'=>false,
                'message'=>"nhan vien {$id} khong ton tai"
            ]);
        }
        $count =NhanVien::where('id','<>',$id)->where('ten',$request->ten)->count();
        if($count >0)
        {
            return response()->json([
                'succes'=>false,
                'message'=>"nhan vien da ton tai"
            ]);
        }
        $nhanvien->ten=$request->ten;
        $nhanvien->save();
        return response()->json([
            'succes'=>true,
            'message'=>"Cap nhat thanh cong"
        ]);
    }
    public function xoa($id)
    {
        $nhanvien =NhanVien::find($id);
        if(empty($nhanvien))
        {
            return response()->json([
                'succes'=>true,
                'message'=>"nhan vien {$id} khong ton tai"
            ]);
        }
        $nhanvien->delete();
        return response()->json([
            'succes'=>true,
            'message'=>"xoa nhan vien thanh cong"
        ]);
    }
}
