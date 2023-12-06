@extends('layout')
@section('content')
<br>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">DANH SÁCH PHIẾU NHẬP</h1>
</div>
  <div class="table-responsive">
  <table class="table table-striped table-sm">
      <thead>
          <tr>
              <th scope="col">Mã Phiếu</th>
              <th scope="col">Nhân viên</th>
              <th scope="col">Sản phẩm</th>
              <th scope="col">Màu sắc</th>
              <th scope="col">Size</th>
              <th scope="col">Số lượng</th>
              <th scope="col">Thao tác</th>
          </tr>
      </thead>
      <tbody>
          @forelse($dsPhieuNhap as $phieunhap)
          <tr>
              <td>{{ $phieunhap->ma}}</td>
              <td>{{ $phieunhap->nhan_vien->ten}}</td>
              <td>{{ $phieunhap->san_pham->ten}}</td>
              <td>{{ $phieunhap->mau_sac->ten}}</td>
              <td>{{ $phieunhap->size->ten}}</td>
              <td>{{ $phieunhap->so_luong}}</td>
            <td>
                <a href="{{route('phieu-nhap.xoa',['id'=>$phieunhap->id])}}"class="btn btn-sm btn-outline-secondary">Xóa</a>
            </td>
            <td>
                <a href="{{route('phieu-nhap.xl-cap-nhat',['id'=>$phieunhap->id])}}"class="btn btn-sm btn-outline-secondary">Sửa</a>
            </td>
          </tr>
          @empty
          <tr>
              <td colspan="3">Không có phiếu nào.</td>
          </tr>
          @endforelse
      </tbody>
  </table>
          <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group me-2">
                <a href="{{asset('hoadon/them-moi')}}" class="btn btn-sm btn-outline-secondary">Thêm mới</a>
              </div>
          </div>
  </div>
@endsection