@extends('layout')
@section('page-js')
    @if(session('thong_bao'))
        <script>
             swal.fire("{{session('thong_bao')}}");
        </script>
    @endif
@endsection
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Danh Sách Khách Hàng</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class=
            "btn-group me-2">
<a href="{{ route('account.khachhang.them-moi')}}" class="btn btn-sm btn-outline-secondary">Thêm mới</a>
            </div>
          </button>
        </div>
</div>
<div class="table-responsive">
<table class="table table-striped table-sm">
    <thead>
        <tr>
            <th scope="col">Mã khách Hàng</th>
            <th scope="col">Hình Ảnh</th>
            <th scope="col">Tên khách hàng</th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">Email</th>
            <th scope="col">Chức năng</th>

        </tr>
    </thead>
    <tbody>
        @forelse($khachhang as $nd)
        <tr>
        <th>{{$nd->id}}</th>
        <th>
            @foreach($HinhAnhND as $ha)
            @if($ha->nguoi_dung_id==$nd->id)
            <img src="{{asset($ha->url)}}" style="width:50px" />
            @endif
            @endforeach
        </th>
        <th>{{$nd->ten}}</th>

        <th>{{$nd->so_dien_thoai}}</th>
        <th>{{$nd->dia_chi}}</th>
        <th>{{$nd->email}}</th>

            <td>
            <a href="{{ route('account.khachhang.chitiet',['id'=>$nd->id])}}" class="btn btn-sm btn-outline-secondary">Chi tiết</a><a href="{{ route('account.khachhang.cap-nhat',['id'=>$nd->id])}}" class="btn btn-sm btn-outline-secondary">Sửa</a>  <a href="{{ route('account.khachhang.xoa',['id'=>$nd->id])}}" class="btn btn-sm btn-outline-secondary" onclick="confirmDelete('{{ route('account.khachhang.xoa',['id'=>$nd->id])}}', event)">Xóa</a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6">Danh sách rỗng.</td>
        </tr>
        @endforelse
    </tbody>
</table>
<script>
    function confirmDelete(deleteUrl, event) {
        Swal.fire({
            title: 'Bạn có chắc chắn muốn xóa?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Đồng ý',
            cancelButtonText: 'Hủy bỏ'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = deleteUrl;
            } else {
                event.preventDefault();
            }
        });
    }
</script>

@endsection
