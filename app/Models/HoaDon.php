<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    use HasFactory;
    protected $table='hoa_don';
    public function nhan_vien()
    {
        return $this->beLongsTo(NhanVien::class,'nhan_vien_id'); 
    }
    public function san_pham()
    {
        return $this->beLongsTo(SanPham::class,'san_pham_id'); 
    }
}
