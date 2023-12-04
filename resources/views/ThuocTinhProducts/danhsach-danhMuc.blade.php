
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
        <h1 class="h2">DANH MỤC</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class=
            "btn-group me-2">
            <a href="{{ route('danhMuc.them-moi')}}" class="btn btn-sm btn-outline-secondary">Thêm mới</a>
            </div>
          </button>
        </div>
</div>
<div class="table-responsive">
<table class="table table-striped table-sm">
    <thead>
        <tr>
            <th scope="col">Mã danh mục</th>
            <th scope="col">Tên danh mục</th>
            <th scope="col">Chức năng</th>
        </tr>
    </thead>
    <tbody>
        @forelse($dsDanhMuc as $danhmuc)
        <tr>
            <td>{{ $danhmuc->id }}</td>
            <td>{{ $danhmuc->ten }}</td>
            <td>
            <a href="{{ route('danhMuc.sua',['id'=>$danhmuc->id])}}" class="btn btn-sm btn-outline-secondary">Sửa</a>  <a class="btn btn-sm btn-outline-secondary" onclick="confirmDelete('{{ route('danhMuc.xl.xoa',['id'=>$danhmuc->id])}}', event)">Xóa</a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="3">Không có</td>
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
