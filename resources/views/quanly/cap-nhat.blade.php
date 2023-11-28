@extends('layout')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cập Nhật Tài Khoản Quản Lý</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
</div>
<form method="POST" acction="">
    @csrf
    <table>

        <tr>
        <th>TÊN: </th>
        <th><input type="text" name="ten" value="{{ $quanly->ten }}"></th>
        <tr>
        <tr>
        <th>Account: </th>
        <th><input type="text" name="account" value="{{ $quanly->account }}"></th>
        <tr>
        <tr>
        <th>Pass: </th>
        <th><input type="text" name="password" value="{{ $quanly->password }}"></th>
        <tr>
        <tr>
        <th>Số điện thoại: </th>
        <th><input type="int" name="so_dien_thoai" value="{{$quanly->so_dien_thoai}}"></th>
        <tr>
        <tr>
        <th>Địa chỉ: </th>
        <th><input type="text" name="dia_chi" value="{{$quanly->dia_chi}}"></th>
        <tr>
        <tr>
        <th>Email: </th>
        <th><input type="email" name="email" value="{{ $quanly->email }}"></th>
        <tr>
        <tr>
        <tr>
        <th><input type="submit" name="them" value="Cập Nhật"></th>
        <tr>
    </table>
</form>
@endsection
