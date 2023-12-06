<?php

namespace App\Http\Controllers;
use App\Models\SanPham;
use App\Models\MauSac;
use App\Models\Size;
use App\Models\NhanVien;
use App\Models\PhieuXuat;
use Illuminate\Http\Request;

class PhieuXuatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dsPhieuXuat=PhieuXuat::all();
        return view('phieuxuat/danh-sach',compact('dsPhieuXuat'));
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
        return view('phieuxuat/them-moi',compact('dsNhanVien','dsSanPham','dsMauSac','dsSize'));
    }

    public function xulithemmoi(Request $request)
    {
        $PhieuXuat=new PhieuXuat();
        $PhieuXuat->ma=$request->ma;
        $PhieuXuat->nhan_vien_id=$request->nhan_vien_id;
        $PhieuXuat->san_pham_id=$request->san_pham_id;
        $PhieuXuat->mau_sac_id=$request->mau_sac_id;
        $PhieuXuat->size_id=$request->size_id;
        $PhieuXuat->so_luong=$request->so_luong;
        $PhieuXuat->save();
        return "them thanh cong";
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
    public function update(Request $request,$id)
    {
        $PhieuXuat=PhieuXuat::find($id);
        $dsMauSac=MauSac::all();
        $dsSize=Size::all();
        $dsNhanVien=NhanVien::all();
        $dsSanPham=SanPham::all();
        return view('phieuxuat/cap-nhat',compact('dsNhanVien','dsSanPham','dsMauSac','dsSize','PhieuXuat'));
    }

    public function xulicapnhat(Request $request,$id)
    {
        $PhieuXuat=PhieuXuat::find($id);
        $PhieuXuat->nhan_vien_id=$request->nhan_vien_id;
        $PhieuXuat->san_pham_id=$request->san_pham_id;
        $PhieuXuat->mau_sac_id=$request->mau_sac_id;
        $PhieuXuat->size_id=$request->size_id;
        $PhieuXuat->so_luong=$request->so_luong;
        $PhieuXuat->save();
        return redirect()->route('phieu-xuat.danh-sach');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $PhieuXuat=PhieuXuat::find($id);
        $PhieuXuat->delete();
        return redirect()->name('phieu-xuat.danh-sach');
    }
}
