@extends('layout')
@section('content')
<br>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">DANH SÁCH HÓA ĐƠN</h1>
</div>
  <div class="table-responsive">
  <table class="table table-striped table-sm">
      <thead>
          <tr>
              <th scope="col">Mã Hóa Đơn</th>
              <th scope="col">Nhân viên</th>
              <th scope="col">Người đặt</th>
              <th scope="col">Địa chỉ</th>
              <th scope="col">SDT</th>
              <th scope="col">Sản phẩm</th>
              <th scope="col">Số lượng</th>
              <th scope="col">Tổng tiền</th>
              <th scope="col">Thao tác</th>
          </tr>
      </thead>
      <tbody>
          @forelse($dsHoaDon as $hd)
          <tr>
              <td>{{ $hd->ma}}</td>
              <td>{{ $hd->nhan_vien->ten}}</td>
              <td>{{ $hd->nguoi_dat}}</td>
              <td>{{ $hd->dia_chi}}</td>
              <td>{{ $hd->so_dien_thoai}}</td>
              <td>{{ $hd->san_pham->ten}}</td>
              <td>{{ $hd->so_luong}}</td>
              <td>{{ $hd->tong_tien}}</td>
            <td>
                <a href="{{route('hoa-don.xoa',['id'=>$hd->id])}}"class="btn btn-sm btn-outline-secondary">Xóa</a>
            </td>
            <td>
                <a href="{{route('hoa-don.xl-cap-nhat',['id'=>$hd->id])}}"class="btn btn-sm btn-outline-secondary">Sửa</a>
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