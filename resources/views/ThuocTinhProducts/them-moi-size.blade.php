@extends('layout')
@section('content')

<link href="{{asset('bootstrap-5.2.3/css/bootstrap.min.css')}}" rel="stylesheet">

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">THÊM KÍCH CỠ SẢN PHẨM</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class=
            "btn-group me-2">
            </div>
          </button>
        </div>
</div>

<form method="POST"action="{{route('size.xl-them-moi')}}">
@csrf
  <div class="col-sm-5">
    <label for="ten_sanpham" class="form-label" style="margin:10px">Tên size</label>
    <input type="text" class="form-control" id="TEN_SANPHAM" name="ten">
  </div>
  <button type="submit" class="btn btn-primary" style="margin:20px">Lưu</button>
</form>
@endsection
