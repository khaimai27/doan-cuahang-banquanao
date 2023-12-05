@extends('layout')
@section('content')

<link href="{{asset('bootstrap-5.2.3/css/bootstrap.min.css')}}" rel="stylesheet">

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Chi tiết Nhân Viên</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class=
            "btn-group me-2">
            </div>
          </button>
        </div>
</div>
<section style="background-color: #eee;">
<div class="container py-5">
<div class="row">
      <div class="col-lg-4">
        <div class="card mb-4" style="width:600px;background:smoke;left:400px">
          <div class="card-body text-center" style="positon:auto">
          @foreach($HinhAnh as $hinhsp)
            @if($hinhsp->nhan_vien_id == $nhanvien->id)
            <img src="{{asset($hinhsp->url)}}" alt="avatar"
              class="rounded-circle img-fluid" style="width: 190px;margin-left: auto;margin-right: auto;height:160px">
            @endif
            @endforeach
        <div class="card mb-4" style="color:green">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Tên :</p>
              </div>
              <div class="col-sm-9">
                <p class="" style="color:blue">{{ $nhanvien->ten }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">UserName:</p>
              </div>
              <div class="col-sm-9">
                <p class="" style="color:blue">{{ $nhanvien->account }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Password:</p>
              </div>
              <div class="col-sm-9">
                <p class="" style="color:blue">{{ $nhanvien->password }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Số điện thoại :</p>
              </div>
              <div class="col-sm-9">
                <p class="" style="color:blue">{{ $nhanvien->so_dien_thoai }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Địa chỉ : </p>
              </div>
              <div class="col-sm-9">
                <p class="" style="color:blue">{{ $nhanvien->dia_chi }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email : </p>
              </div>
              <div class="col-sm-9">
                <p class="" style="color:blue">{{ $nhanvien->email }}</p>
              </div>
            </div>
          </div>
        </div>
        <a href="{{ route('nhanvien.danh-sach')}}" class="btn btn-primary">Quay lại</a>
          </div>
        </div>
        <div>

</div>
</section>

@endsection
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"
></script>
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css"
  rel="stylesheet"
/>
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
