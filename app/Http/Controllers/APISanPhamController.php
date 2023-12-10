<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SanPham;

class APISanPhamController extends Controller
{
    public function danhSach(){
        $dsSanPham=SanPham::all();
        return response()->json([
            'success' => true,
            'data'=>    $dsSanPham
        ]);
    }
    public function detailProduct($id){
        $product=SanPham::find($id);
        if(empty($product))
            {
                return response()->json([
                    'success' => false,
                    'data'=>    "San pham khong ton tai"
                ]);
            }
            return response()->json([
                'success' => true,
                'data'=>    $product
            ]);
    }
    public function editProduct(Request $request,$id){
        $product=SanPham::find($id);
        if(empty($product))
        {
            return response()->json([
                'success' => false,
                'data'=>    "San pham khong ton tai"
            ]);
        }
        $product->ten_sanpham         = $request->ten_sanpham;
        $product->gia     = $request->gia;
        $product->mota_sanpham          = $request->mota_sanpham;
        $product->save();
        return response()->json([
            'success' => true,
            'data'=>    $product
        ]);
    }
    public function addProduct(Request $request){
        $product=new SanPham();
        $count=SanPham::where('ten_sanpham',$request->ten_sanpham)->count();
        if($count>0)
        {
            return response()->json([
                'success' => false,
                'data'=>    'San Pham da ton tai'
            ]);   
        }
        $product->ten_sanpham= $request->ten_sanpham;
        $product->loaisanpham_id=$request->loaisanpham_id;
        $product->gia     = $request->gia;
        $product->mota_sanpham          = $request->mota_sanpham;
        $product->save();
        return response()->json([
            'success' => true,
            'data'=>    $product
        ]);
    }
    public function deleteProduct($id){
        $product=SanPham::find($id);
        if(empty($product)){
            return response()->json([
                'success' => false,
                'data'=>    'San pham khong ton tai'
            ]);
        }
        $product->delete();
        return response()->json([
            'success' => true,
            'data'=>    'Xoa san pham thanh cong'
        ]);
    }
    public function searchProduct(Request $request){
        $searchKeyword = $request->input('search');
        
        $products = SanPham::where('ten_sanpham', 'like', '%' . $searchKeyword . '%')->get();
        
        if($products->isEmpty())
        {
            return response()->json([
                'success' => false,
                'data' => 'khong tim thay san pham'
            ]);
        }
    
        return response()->json([
            'success' => true,
            'data' => $products
        ]);
    }
    public function danhSachtheoLoaiSP($danh_muc_id){
        $products = SanPham::where('danh_muc_id', $danh_muc_id)->get();
        
        if($products->isEmpty())
        {
            return response()->json([
                'success' => false,
                'data' => 'Khong co san pham thuoc loai nay'
            ]);
        }
    
        return response()->json([
            'success' => true,
            'data' => $products
        ]);
    }
    
    
}
