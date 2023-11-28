@extends('layout')
@section('content')

<link href="{{asset('bootstrap-5.2.3/css/bootstrap.min.css')}}" rel="stylesheet">

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Hồ Sơ Tài Khoản Quản Lý</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class=
            "btn-group me-2">
            </div>
          </button>
        </div>
</div>
<div class="col-sm-5">
    <label class="form-label">Tên Quản Lý</label>
    <p>{{ $quanly->ten }}</p>
</div>
<div class="col-sm-5">
    <label class="form-label">UserName</label>
    <p>{{ $quanly->account }}</p>
</div>
<div class="col-sm-5">
    <label class="form-label">Password</label>
    <p>{{ $quanly->password }}</p>
</div>
<div class="col-sm-5">
    <label class="form-label">Số Điện Thoại</label>
    <p>{{ $quanly->so_dien_thoai }}</p>
</div>
<div class="col-sm-5">
    <label class="form-label">Địa Chỉ</label>
    <p>{{ $quanly->dia_chi }}</p>
</div>
<div class="col-sm-5">
    <label class="form-label">Email</label>
    <p>{{ $quanly->email }}</p>
</div>

<div>
    <a href="{{ route('quanly.danh-sach')}}" class="btn btn-primary">Quay lại</a>
</div>
@endsection
