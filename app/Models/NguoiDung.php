<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
class NguoiDung extends Authenticatable
{
    use HasFactory;
    protected $table = "nguoi_dung";
    public function hinh_anh_nguoi_dung(){
        return $this->beLongsTo(HinhAnhNguoiDung::class,'nguoi_dung_id');
    }
    public function hinh_anh_nhan_vien(){
        return $this->beLongsTo(HinhAnh::class,'nhan_vien_id');
    }

    public function phan_quyen(){
        return $this->beLongsTo(PhanQuyen::class);
    }
}
