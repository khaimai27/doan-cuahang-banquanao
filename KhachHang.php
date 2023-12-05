<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    use HasFactory;
    protected $table = "khach_hang";
    public function hinh_anh_khach_hang(){
        return $this->beLongsTo(HinhAnhKhacHang::class,'khach_hang_id');
    }
}
