<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
class QuanLy extends Authenticatable
{
    use HasFactory;
    protected $table = "quan_ly";
    public function hinh_anh_quan_ly(){
        return $this->beLongsTo(HinhAnhQuanLy::class,'hinh_anh_id');
    }
}
