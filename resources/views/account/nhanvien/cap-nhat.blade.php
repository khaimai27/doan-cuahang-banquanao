
@extends('layout')
@section('content')

<link href="{{asset('bootstrap-5.2.3/css/bootstrap.min.css')}}" rel="stylesheet">

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Chỉnh sửa thông tin tài khoản thành viên</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class=
            "btn-group me-2">
            </div>
          </button>
        </div>
</div>

<form method="POST" action="" enctype="multipart/form-data">
    @csrf
    <div class="col-sm-5">
        <label for="TEN_NhanVien" class="form-label" style="margin: 10px">Tên Nhân Viên</label>
        <input type="text" class="form-control" id="TEN_NhanVien" value="{{$nhanvien->ten}} " name="ten">
</div>
<div class="col-sm-5">
        <label for="NhanVien_Account" class="form-label" style="margin: 10px">Account</label>
        <input type="text" class="form-control" id="NhanVien_Account" value="{{$nhanvien->account}}" name="account">
</div>
<div class="col-sm-5">
        <label for="NhanVien_Password" class="form-label" style="margin: 10px">Password</label>
        <input type="text" class="form-control" id="NhanVien_Password" value="{{$nhanvien->password}}" name="password">
</div>
<div class="col-sm-5">
        <label for="NhanVien_SDT" class="form-label" style="margin: 10px">Số Điện Thoại</label>
        <input type="text" class="form-control" id="NhanVien_SDT" value="{{$nhanvien->so_dien_thoai}}" name="so_dien_thoai">
</div>
<div class="col-sm-5">
        <label for="NhanVien_dia_chi" class="form-label" style="margin: 10px">Địa Chỉ</label>
        <input type="text" class="form-control" id="NhanVien_dia_chi" value="{{$nhanvien->dia_chi}}" name="dia_chi">
</div>
<div class="col-sm-5">
        <label for="NhanVien_email" class="form-label" style="margin: 10px">Email</label>
        <input type="text" class="form-control" id="NhanVien_email" value="{{$nhanvien->email}}" name="email">
</div>
<div class="col-sm-5">
        <label for="HinhAnh_NhanVien" class="form-label" style="margin: 10px">Chọn ảnh đại diện</label>
        <input type="file" class="form-control" id="TEN_NhanVien" name="hinh_anh[]">
</div>
<button type="submit" class="btn btn-primary" style="margin:20px">Lưu</button>
<a href="{{ route('nhanvien.danh-sach')}}" class="btn btn-primary">Quay lại</a>
</form>
@endsection
