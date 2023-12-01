@extends('layout')
@section('content')
<br>
<h1 class="h2">TẠO HÓA ĐƠN</h1>
<form method="POST" action="">
    @csrf
    <table>
    <tr>
        <label for="exampleDataList" class="form-label">Mã hóa đơn</label>
        <input class="form-control" list="datalistOptions" id="ma" name="ma" placeholder="Nhập mã hóa đơn">
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
    <tr>
    <tr>
        <label for="exampleDataList" class="form-label">Số lượng</label>
        <input class="form-control" list="datalistOptions" id="so_luong" name="so_luong" placeholder="Nhập số lượng sản phẩm">
    <tr>
    <tr>
        <label for="exampleDataList" class="form-label">Giá bán</label>
        <input class="form-control" list="datalistOptions" id="gia_ban" name="gia_ban" placeholder="Nhập giá bán sản phẩm">
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