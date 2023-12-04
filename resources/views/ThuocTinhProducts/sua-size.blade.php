@extends('layout')
@section('content')

<link href="{{asset('bootstrap-5.2.3/css/bootstrap.min.css')}}" rel="stylesheet">

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">SỬA SIZE</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class=
            "btn-group me-2">
            </div>
          </button>
        </div>
</div>

<form method="POST" action="{{ route('size.xl.sua',['id'=>$size->id])}}" enctype="multipart/form-data">
    @csrf
    <div class="col-sm-5">
        <label for="TEN_SANPHAM" class="form-label" style="margin: 10px">Tên size</label>
        <input type="text" class="form-control" id="TEN_SANPHAM" value="{{$size->ten}}" name="ten">
    </div>
    <a href="{{ route('size.danh-sach')}}" class="btn btn-primary">Quay lại</a>
    <button type="submit" class="btn btn-primary" style="margin: 20px">Lưu</button>
</form>
@endsection
