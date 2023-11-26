<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HinhAnhSanPham extends Model
{
    use HasFactory;
    protected $table='hinh_anh_san_pham';
    public function sanpham(){
        return $this->beLongsTo(SanPham::class,'san_pham_id');
    }
}
