@extends('layout')
@section('content')

<h1 class="h2">Thêm Tài Khoản Khách Hàng</h1>
<form method="POST" acction="" enctype="multipart/form-data">
    @csrf
    <div class="col-sm-5">
        <label for="HinhAnh_KhachHang" class="form-label" style="margin: 10px">Chọn ảnh đại diện</label>
        <input type="file" class="form-control" id="hinh_anh_id" name="hinh_anh[]">
</div>
    <div class="col-sm-5">
        <label for="TEN_KhachHang" class="form-label" style="margin: 10px">Tên Khách Hàng</label>
        <input type="text" class="form-control" id="TEN_KhachHang" name="ten">
</div>
<div class="col-sm-5">
        <label for="KhachHang_Account" class="form-label" style="margin: 10px">Account</label>
        <input type="text" class="form-control" id="KhachHang_Account" name="account">
</div>
<div class="col-sm-5">
        <label for="KhachHang_Password" class="form-label" style="margin: 10px">Password</label>
        <input type="text" class="form-control" id="KhachHang_Password" name="password">
</div>
<div class="col-sm-5">
        <label for="KhachHang_SDT" class="form-label" style="margin: 10px">Số Điện Thoại</label>
        <input type="text" class="form-control" id="KhachHang_SDT" name="so_dien_thoai">
</div>
<div class="col-sm-5">
        <label for="KhachHang_dia_chi" class="form-label" style="margin: 10px">Địa Chỉ</label>
        <input type="text" class="form-control" id="KhachHang_dia_chi" name="dia_chi">
</div>
<div class="col-sm-5">
        <label for="KhachHang_email" class="form-label" style="margin: 10px">Email</label>
        <input type="text" class="form-control" id="KhachHang_email" name="email">
</div>
<button type="submit" class="btn btn-primary" style="margin:20px">Lưu</button>
</form>
@endsection
