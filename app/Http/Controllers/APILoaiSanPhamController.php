<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanhMuc;

class APILoaiSanPhamController extends Controller
{
    public function danhSach(){
        $dsDanhMuc=DanhMuc::all();
        return response()->json([
            'success' => true,
            'data'=>    $dsDanhMuc
        ]);
    }
    public function detailLoaiSP($id){
        $danhmuc=DanhMuc::find($id);
        if(empty($danhmuc))
            {
                return response()->json([
                    'success' => false,
                    'data'=>    "Loai San pham khong ton tai"
                ]);
            }
            return response()->json([
                'success' => true,
                'data'=>    $danhmuc
            ]);
    }
    public function editLoaiSP(Request $request,$id){
        $danhmuc=DanhMuc::find($id);
        if(empty($danhmuc))
            {
                return response()->json([
                    'success' => false,
                    'data'=>    "Loai San pham khong ton tai"
                ]);
            }
        $danhmuc->ten=$request->ten;
        $danhmuc->save();
        return response()->json([
            'success' => true,
            'data'=>    $danhmuc
        ]);
    }
    public function deleteLoaiSP($id){
        $danhmuc=DanhMuc::find($id);
        if(empty($danhmuc)){
            return response()->json([
                'success' => false,
                'data'=>    "Loai San pham khong ton tai"
            ]);
        }
        $danhmuc->delete();
        return response()->json([
            'success' => true,
            'data'=>    'Xoa loai san pham thanh cong'
        ]);
    }
    public function searchLoaiSP(Request $request){
        $searchKeyword = $request->input('search');
        
        $danhmuc = DanhMuc::where('ten_loaisanpham', 'like', '%' . $searchKeyword . '%')->get();
        
        if($danhmuc->isEmpty())
        {
            return response()->json([
                'success' => false,
                'data' => 'khong tim thay loai san pham'
            ]);
        }
    
        return response()->json([
            'success' => true,
            'data' => $danhmuc
        ]);
    }
}
