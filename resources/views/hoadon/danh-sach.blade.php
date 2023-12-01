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
          </tr>
      </thead>
      <tbody>
          @forelse($dsHoaDon as $hd)
          <tr>
              <td>{{ $hd->ma}}</td>
              <td>{{ $hd->nhan_vien->ten}}</td>
              <td><a href="{{route('hoa-don.xoa',['id'=>$hd->id])}}">Xóa</a></td>
              <td><a href="">Sửa</a></td>
          </tr>
          @empty
          <tr>
              <td colspan="5">Không có phiếu nào.</td>
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