<?php

namespace App\Http\Controllers;
use App\Models\NhanVien;
use App\Models\SanPham;
use Illuminate\Http\Request;
use App\Models\HoaDon;

class HoaDonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dsHoaDon=HoaDon::all();
        return view('hoadon/danh-sach',compact('dsHoaDon'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dsSanPham=SanPham::all();
        $dsNhanVien=NhanVien::all();
        return view('hoadon/them-moi',compact('dsNhanVien','dsSanPham'));
    }

    public function xulithemmoi(Request $request)
    {
        $HoaDon=new HoaDon();
        $HoaDon->ma=$request->ma;
        $HoaDon->nhan_vien_id=$request->nhan_vien_id;
        $HoaDon->san_pham_id=$request->san_pham_id;
        $HoaDon->so_luong=$request->so_luong;
        $HoaDon->gia_ban=$request->gia_ban;
        $HoaDon->save();
        return redirect()->route('hoa-don.danh-sach');
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $HoaDon=HoaDon::find($id);
        $HoaDon->delete();
        return redirect()->route('hoa-don.danh-sach');
    }
}
