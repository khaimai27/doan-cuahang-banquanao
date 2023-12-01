@extends('layout')
@section('content')

<link href="{{asset('bootstrap-5.2.3/css/bootstrap.min.css')}}" rel="stylesheet">

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Hồ Sơ Người Dùng</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class=
            "btn-group me-2">
            </div>
          </button>
        </div>
</div>
<div class="col-sm-5">
    <label class="form-label">Ảnh Đại Diện</label>
    @foreach($HinhAnhND as $ha)
        @if($ha->nguoi_dung_id==$khachhang->id)
         <img src="{{asset($ha->url)}}" style="width:200px" />
        @endif
    @endforeach
</div>
<div class="col-sm-5">
    <label class="form-label">Tên Người Dùng</label>
    <p>{{ $khachhang->ten }}</p>
</div>
<div class="col-sm-5">
    <label class="form-label">UserName</label>
    <p>{{ $khachhang->account }}</p>
</div>
<div class="col-sm-5">
    <label class="form-label">Password</label>
    <p>{{ $khachhang->password }}</p>
</div>
<div class="col-sm-5">
    <label class="form-label">Số Điện Thoại/label>
    <p>{{ $khachhang->so_dien_thoai }}</p>
</div>
<div class="col-sm-5">
    <label class="form-label">Địa Chỉ/label>
    <p>{{ $khachhang->dia_chi }}</p>
</div>
<div class="col-sm-5">
    <label class="form-label">Email/label>
    <p>{{ $khachhang->email }}</p>
</div>


<div>
    <a href="{{ route('account.khachhang.danh-sach')}}" class="btn btn-primary">Quay lại</a>
</div>
@endsection
