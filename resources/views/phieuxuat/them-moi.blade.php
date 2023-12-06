@extends('layout')
@section('content')
<br>
<h1 class="h2">TẠO PHIẾU XUẤT</h1>
<form method="POST" action="{{route('phieu-xuat.xl-them-moi')}}">
    @csrf
    <table>
    <tr>
        <label for="exampleDataList" class="form-label">Mã phiếu</label>
        <input class="form-control" list="datalistOptions" id="ma" name="ma" placeholder="Nhập mã phiếu nhập">
    <tr>
    <tr>
        <label for="exampleDataList" class="form-label">Tên nhân viên tạo</label>
        <select id="nhan_vien_id" name="nhan_vien_id">
                    @foreach($dsNhanVien as $nv){
                    <option value='{{$nv->id}}'>
                        {{$nv->ten}}
                    </option>
                    }
                    @endforeach
        </select>
    <tr>
    <tr>
        <label for="exampleDataList" class="form-label">Sản phẩm</label>
        <select id="san_pham_id" name="san_pham_id">
                    @foreach($dsSanPham as $sp){
                    <option value='{{$sp->id}}'>
                        {{$sp->ten}}
                    </option>
                    }
                    @endforeach
        </select>
        <br>
    <tr>
    <tr>
        <label for="exampleDataList" class="form-label">Màu sắc</label>
        <select id="mau_sac_id" name="mau_sac_id">
                    @foreach($dsMauSac as $ms){
                    <option value='{{$ms->id}}'>
                        {{$ms->ten}}
                    </option>
                    }
                    @endforeach
        </select>
        <br>
    <tr>
    <tr>
        <label for="exampleDataList" class="form-label">Size</label>
        <select id="size_id" name="size_id">
                    @foreach($dsSize as $s){
                    <option value='{{$s->id}}'>
                        {{$s->ten}}
                    </option>
                    }
                    @endforeach
        </select>
        <br>
    <tr>
    <tr>
        <label for="exampleDataList" class="form-label">Số lượng</label>
        <input class="form-control" list="datalistOptions" id="so_luong" name="so_luong" placeholder="Nhập số lượng sản phẩm" oninput="tong()">
    <tr>
    <br>
    <tr>
        <button class="btn btn-primary" type="submit">Thêm phiếu</button>
    <tr>
    </table>
</form>
<style>
    .button{
        padding: bottom 50px;
    }
</style>
@endsection