@extends('layout')
@section('content')
<br>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">DANH SÁCH PHIẾU XUẤT</h1>
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
          @forelse($dsPhieuXuat as $phieuxuat)
          <tr>
              <td>{{ $phieuxuat->ma}}</td>
              <td>{{ $phieuxuat->nhan_vien->ten}}</td>
              <td>{{ $phieuxuat->san_pham->ten}}</td>
              <td>{{ $phieuxuat->mau_sac->ten}}</td>
              <td>{{ $phieuxuat->size->ten}}</td>
              <td>{{ $phieuxuat->so_luong}}</td>
            <td>
                <a href="{{route('phieu-xuat.xoa',['id'=>$phieuxuat->id])}}"class="btn btn-sm btn-outline-secondary">Xóa</a>
            </td>
            <td>
                <a href="{{route('phieu-xuat.cap-nhat',['id'=>$phieuxuat->id])}}"class="btn btn-sm btn-outline-secondary">Sửa</a>
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