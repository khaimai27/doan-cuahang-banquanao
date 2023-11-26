@extends('layout')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Danh Sách Nhân Viên</h1>
</div>
@if(session('thong-bao'))
  <script>
    Swal.fire("{{session('thong-bao')}}")
  </script>
@endif
@if(session('message'))
  <script>
    Swal.fire("{{session('message')}}")
  </script>
@endif
<table class="table">
  <thead class="thead-dark">
    <tr>

        <th><p style="color:white;padding-top:9px;font-size:20px">Tên Nhân Viên</p></th>

        <th><p style="color:white;padding-top:9px;font-size:20px">Account</p></th>
        <th><p style="color:white;padding-top:9px;font-size:20px">Password</p></th>
        <th><p style="color:white;padding-top:9px;font-size:20px">Số điện thoại</p></th>
        <th><p style="color:white;padding-top:9px;font-size:20px">Địa chỉ</p></th>
        <th><p style="color:white;padding-top:9px;font-size:20px">Email</p></th>
        <th><p style="color:white;padding-top:9px;font-size:20px">Edit</p></th>
    </tr>
</thead>
    @foreach($nhanvien as $nv)
    <tr>
        <th>{{$nv->ten}}</th>
        <th>{{$nv->account}}</th>
        <th>{{$nv->password}}</th>
        <th>{{$nv->so_dien_thoai}}</th>
        <th>{{$nv->dia_chi}}</th>
        <th>{{$nv->email}}</th>
        <th><a href="{{route('nhanvien.xoa',['id'=>$nv->id])}}">Xóa</a> | <a
                href="{{ route('nhanvien.cap-nhat',['id'=>$nv->id]) }}">Sửa</a></th>
    </tr>
    @endforeach

</table>

    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <a href="{{ route('nhanvien.them-moi')}}" type="button" class="btn btn-sm btn-outline-secondary" >Thêm mới</a>
        </div>
    </div>

@endsection
