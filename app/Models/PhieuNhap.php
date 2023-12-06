<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhieuNhap extends Model
{
    use HasFactory;
    protected $table='phieu_nhap';
    public function nhan_vien()
    {
        return $this->belongsTo(NhanVien::class,'nhan_vien_id');
    }
    public function san_pham()
    {
        return $this->belongsTo(SanPham::class,'san_pham_id');
    }
    public function mau_sac()
    {
        return $this->belongsTo(MauSac::class,'mau_sac_id');
    }
    public function size()
    {
        return $this->belongsTo(Size::class,'size_id');
    }
}
