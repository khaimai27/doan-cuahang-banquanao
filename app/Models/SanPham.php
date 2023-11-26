<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;
    protected $table='san_pham';
    public function mausac(){
        return $this->beLongsTo(MauSac::class,'mau_sac_id');
    }
    public function size(){
        return $this->beLongsTo(Size::class,'size_id');
    }
    public function danhmuc(){
        return $this->beLongsTo(DanhMuc::class,'danh_muc_id');
    }
    public function hinhanh(){
        return $this->beLongsTo(HinhAnhSanPham::class,'hinh_anh_id');
    }
}
