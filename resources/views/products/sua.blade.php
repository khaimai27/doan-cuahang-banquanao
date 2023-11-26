@extends('layout')
@section('content')

<link href="{{asset('bootstrap-5.2.3/css/bootstrap.min.css')}}" rel="stylesheet">

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Chỉnh sửa sản phẩm</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class=
            "btn-group me-2">
            </div>
          </button>
        </div>
</div>

<form method="POST" action="{{ route('sanpham.xl.sua',['id'=>$sanpham->id])}}" enctype="multipart/form-data">
    @csrf
    <div class="col-sm-5">
        <label for="TEN_SANPHAM" class="form-label" style="margin: 10px">Tên sản phẩm</label>
        <input type="text" class="form-control" id="TEN_SANPHAM" value="{{$sanpham->ten}}" name="ten">
    </div>
    <div class="col-sm-5">
        <label for="danh_muc_id" class="form-label">Danh Mục</label>
        <select name="danh_muc_id" value="{{$sanpham->danhmuc->ten}}" class="form-control">
            @foreach($dsDanhMuc as $tendanhmuc)
                <option value='{{ $tendanhmuc->id }}'>
                    {{ $tendanhmuc->ten }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-5">
        <label for="mau_sac_id" class="form-label">Màu sắc</label>
        <select name="mau_sac_id" value="{{$sanpham->mausac->ten}}" class="form-control">
            @foreach($dsMauSac as $tenmausac)
                <option value='{{ $tenmausac->id }}'>
                    {{ $tenmausac->ten }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-5">
        <label for="so_luong_ton" class="form-label" style="margin: 10px">Số lượng tồn</label>
        <input type="text" class="form-control" id="so_luong_ton" value="{{$sanpham->so_luong_ton}}" name="so_luong_ton">
    </div>
    <div class="col-sm-5">
        <label for="gia" class="form-label" style="margin: 10px">Giá tiền</label>
        <input type="number" class="form-control" id="gia" value="{{$sanpham->gia}}" name="gia">
    </div>
    <div class="col-sm-5">
        <label for="size_id" class="form-label">Size</label>
        <select name="size_id" value="{{$sanpham->size->ten}}" class="form-control">
            @foreach($dsSize as $tensize)
                <option value='{{ $tensize->id }}'>
                    {{ $tensize->ten }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-5">
        <label for="mota" class="form-label" style="margin: 10px">Mô tả</label>
        <input type="text" class="form-control" id="gia" value="{{$sanpham->mo_ta}}" name="mo_ta">
    </div>
    <div class="col-sm-5">
        <label for="hinh_anh_id" class="form-label" style="margin: 10px">Hình ảnh</label>
        <input type="file" multiple class="form-control" id="hinh_anh_id" name="hinh_anh_id[]" >
    </div>
    <a href="{{ route('sanpham.danh-sach')}}" class="btn btn-primary">Quay lại</a>
    <button type="submit" class="btn btn-primary" style="margin: 20px">Lưu</button>
</form>
@endsection
