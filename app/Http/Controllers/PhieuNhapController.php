<?php

namespace App\Http\Controllers;
use App\Models\SanPham;
use App\Models\MauSac;
use App\Models\Size;
use App\Models\NhanVien;
use App\Models\PhieuNhap;
use Illuminate\Http\Request;

class PhieuNhapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dsPhieuNhap=PhieuNhap::all();
        return view('phieunhap/danh-sach',compact('dsPhieuNhap'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dsMauSac=MauSac::all();
        $dsSize=Size::all();
        $dsNhanVien=NhanVien::all();
        $dsSanPham=SanPham::all();
        return view('phieunhap/them-moi',compact('dsNhanVien','dsSanPham','dsMauSac','dsSize'));
    }

    public function xulithemmoi(Request $request)
    {
        $PhieuNhap=new PhieuNhap();
        $PhieuNhap->ma=$request->ma;
        $PhieuNhap->nhan_vien_id=$request->nhan_vien_id;
        $PhieuNhap->san_pham_id=$request->san_pham_id;
        $PhieuNhap->mau_sac_id=$request->mau_sac_id;
        $PhieuNhap->size_id=$request->size_id;
        $PhieuNhap->so_luong=$request->so_luong;
        $PhieuNhap->save();
        return redirect()->route('phieu-nhap.danh-sach');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $PhieuNhap=PhieuNhap::find($id);
        $PhieuNhap->delete();
        return redirect()->route('phieu-nhap.danh-sach');
    }

    public function update(Request $request,$id)
    {
        $PhieuNhap=PhieuNhap::find($id);
        $dsMauSac=MauSac::all();
        $dsSize=Size::all();
        $dsNhanVien=NhanVien::all();
        $dsSanPham=SanPham::all();
        return view('phieunhap/cap-nhat',compact('dsNhanVien','dsSanPham','dsMauSac','dsSize','PhieuNhap'));
    }

    public function xulicapnhat(Request $request,$id)
    {
        $PhieuNhap=PhieuNhap::find($id);
        $PhieuNhap->nhan_vien_id=$request->nhan_vien_id;
        $PhieuNhap->san_pham_id=$request->san_pham_id;
        $PhieuNhap->mau_sac_id=$request->mau_sac_id;
        $PhieuNhap->size_id=$request->size_id;
        $PhieuNhap->so_luong=$request->so_luong;
        $PhieuNhap->save();
        return redirect()->route('phieu-nhap.danh-sach');
    }
}
