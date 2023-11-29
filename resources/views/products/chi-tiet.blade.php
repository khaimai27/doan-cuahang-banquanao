@extends('layout')
@section('content')

<link href="{{asset('bootstrap-5.2.3/css/bootstrap.min.css')}}" rel="stylesheet">

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Chi tiết sản phẩm</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class=
            "btn-group me-2">
            </div>
          </button>
        </div>
</div>
<div class="col-sm-5">
    <label class="form-label">Hình ảnh</label>
    <div style="display: flex; flex-wrap: wrap; gap: 10px;">
        @foreach($dsHinhanh as $hinhanh)
            @if($hinhanh->san_pham_id == $sanpham->id)
                <div style="flex: 0 0 30%; max-width: 30%; text-align: center;">
                    <img src="{{asset($hinhanh->url)}}" style="width: 100%; border-radius: 8px;" />
                </div>
            @endif
        @endforeach
    </div>
</div>
<div class="col-sm-5">
    <label class="form-label">Tên sản phẩm</label>
    <p>{{ $sanpham->ten }}</p>
</div>
<div class="col-sm-5">
    <label class="form-label">Loại sản phẩm</label>
    <p>{{ $sanpham->danhmuc->ten }}</p>
</div>
<div class="col-sm-5">
    <label class="form-label">Màu sắc</label>
    <p>{{ $sanpham->mausac->ten }}</p>
</div>
<div class="col-sm-5">
    <label class="form-label">Số lượng tồn</label>
    <p>{{ $sanpham->so_luong_ton }}</p>
</div>
<div class="col-sm-5">
    <label class="form-label">Giá tiền</label>
    <p>{{ $sanpham->gia }}</p>
</div>
<div class="col-sm-5">
    <label class="form-label">Size</label>
    <p>{{ $sanpham->size->ten }}</p>
</div>
<div class="col-sm-5">
    <label class="form-label">Mô tả</label>
    <p>{{ $sanpham->mo_ta }}</p>
</div>

<div>
    <a href="{{ route('sanpham.danh-sach')}}" class="btn btn-primary">Quay lại</a>
</div>
@endsection
