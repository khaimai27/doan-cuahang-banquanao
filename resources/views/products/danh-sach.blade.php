
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
        <h1 class="h2">DANH SÁCH SẢN PHẨM</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class=
            "btn-group me-2">
            <a href="{{ route('sanpham.them-moi')}}" class="btn btn-sm btn-outline-secondary">Thêm mới</a>
            </div>
          </button>
        </div>
</div>
<div class="table-responsive">
<table class="table table-striped table-sm">
    <thead>
        <tr>
            <th scope="col">Mã sản phẩm</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Danh Mục</th>
            <th scope="col">Giá</th>
            <th scope="col">Số lượng tồn</th>
            <th scope="col">Mô tả</th>
            <th scope="col">Thao Tác</th>
        </tr>
    </thead>
    <tbody>
        @forelse($dsSanPham as $sanpham)
        <tr>
            <td>{{ $sanpham->id }}</td>
            <td>{{ $sanpham->ten }}</td>
            <td>{{ $sanpham->danhmuc->ten }}</td>
            <td>{{ $sanpham->gia }}</td>
            <td>{{ $sanpham->so_luong_ton }}</td>
            <td>{{ $sanpham->mo_ta }}</td>
            <td>
            <a href="#" class="btn btn-sm btn-outline-secondary">Chi tiết</a>  <a href="{{ route('sanpham.sua',['id'=>$sanpham->id])}}" class="btn btn-sm btn-outline-secondary">Sửa</a>  <a href="{{ route('sanpham.xl.xoa',['id'=>$sanpham->id])}}" class="btn btn-sm btn-outline-secondary" onclick="confirmDelete('{{ route('sanpham.xl.xoa',['id'=>$sanpham->id])}}', event)">Xóa</a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="7">Không có sản phẩm nào.</td>
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