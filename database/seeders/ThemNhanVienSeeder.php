<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NhanVien;
Use Illuminate\Support\Facades\Hash;
class ThemNhanVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nhanvien=new NhanVien();
        $nhanvien->ten='thuan';
        $nhanvien->account='admin';
        $nhanvien->password=Hash::make('123456');
        $nhanvien->so_dien_thoai='0931412412';
        $nhanvien->dia_chi='TP.HCM';
        $nhanvien->email='0306211200@caothang.edu.vn';
        $nhanvien->save();
        echo"them admin thanh cong";
    }
}
