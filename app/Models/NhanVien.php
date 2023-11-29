<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
class NhanVien extends Authenticatable
{
    use HasFactory;
    protected $table = "nhan_vien";
    public function hinh_anh(){
        return $this->beLongsTo(HinhAnh::class,'hinh_anh_id');
    }
    public function hinhAnh()
    {
        return $this->hasOne(HinhAnh::class, 'nhan_vien_id');
    }
}
