@extends('layout')
@section('content')

<h1 class="h2">Thêm Tài Khoản Khách Hàng</h1>
<form method="POST" acction="" enctype="multipart/form-data">
    @csrf

    <div class="col-sm-5">
        <label for="TEN_QuanLy" class="form-label" style="margin: 10px">Tên Quản Lý</label>
        <input type="text" class="form-control" id="TEN_QuanLy" name="ten">
</div>
<div class="col-sm-5">
        <label for="QuanLy_Account" class="form-label" style="margin: 10px">Account</label>
        <input type="text" class="form-control" id="QuanLy_Account" name="account">
</div>
<div class="col-sm-5">
        <label for="QuanLy_Password" class="form-label" style="margin: 10px">Password</label>
        <input type="text" class="form-control" id="QuanLy_Password" name="password">
</div>
<div class="col-sm-5">
        <label for="QuanLy_SDT" class="form-label" style="margin: 10px">Số Điện Thoại</label>
        <input type="text" class="form-control" id="QuanLy_SDT" name="so_dien_thoai">
</div>
<div class="col-sm-5">
        <label for="QuanLy_dia_chi" class="form-label" style="margin: 10px">Địa Chỉ</label>
        <input type="text" class="form-control" id="QuanLy_dia_chi" name="dia_chi">
</div>
<div class="col-sm-5">
        <label for="QuanLy_email" class="form-label" style="margin: 10px">Email</label>
        <input type="text" class="form-control" id="QuanLy_email" name="email">
</div>
<button type="submit" class="btn btn-primary" style="margin:20px">Lưu</button>
</form>
@endsection
