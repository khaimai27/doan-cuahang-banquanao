<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\KhachHang;
class APIKhachHangController extends Controller
{
    public function layDanhSach()
    {
        $khachhang=KhachHang::all();
        return response()->json([
            'success' => true,
            'data' => $khachhang
        ]);
    }
    public function layChiTiet($id)
    {
        $khachhang=KhachHang::find($id);
        if(empty($khachhang)){
        return response()->json([
            'success' => false,
            'message' => "KhachHang ID {$id} khong ton tai"
        ]);}
        return response()->json([
            'success' =>true,
            'data' =>$khachhang
        ]);
    }
    public function themMoi(request $rq)
    {
        if(empty($rq->ten)){
            return response()->json([
                'succes' => false,
                'message' => "chưa nhập tên khách hàng"
            ]);
        }
        if(!empty($khachhang))
        {
            return response()->json([
            'succes'=>false,
            'message'=>"khach hang {$rq -> ten} da ton tai"
            ]);
        }
        $khachhang =new KhachHang;
        $khachhang->ten=$request->ten;
        $khachhang->save;

            return response()->json([
                'succes'=>true,
                'message'=>"them moi thanh cong"
            ]);
    }
    public function capNhat(request $request,$id)
    {
        $khachhang=KhachHang::find($id);
        if(empty($khachhang))
        {
            return response()->json([
                'succes'=>false,
                'message'=>"khach hang {$id} khong ton tai"
            ]);
        }
        $count =KhachHang::where('id','<>',$id)->where('ten',$request->ten)->count();
        if($count >0)
        {
            return response()->json([
                'succes'=>false,
                'message'=>"khach hang da ton tai"
            ]);
        }
        $khachhang->ten=$request->ten;
        $khachhang->save();
        return response()->json([
            'succes'=>true,
            'message'=>"Cap nhat thanh cong"
        ]);
    }
    public function xoa($id)
    {
        $khachhang =KhachHang::find($id);
        if(empty($khachhang))
        {
            return response()->json([
                'succes'=>true,
                'message'=>"khach hang {$id} khong ton tai"
            ]);
        }
        $khachhang->delete();
        return response()->json([
            'succes'=>true,
            'message'=>"xoa khach hang thanh cong"
        ]);
    }
}
