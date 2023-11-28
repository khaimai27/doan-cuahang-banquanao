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
    $nhanVienData = [
        ['Hữu Thuận', 'admin', Hash::make('123456'), '0931412412', 'TP.HCM', '0306211200@caothang.edu.vn'],
        ['Mai Khải', 'khaimen57', Hash::make('123123'), '0368193004', 'Gia Lai', '0306211151@caothang.edu.vn'],
        ['An Bình', 'anbinh', Hash::make('123456'), '0931412412', 'Sóc Trăng', '0306211118@caothang.edu.vn'],
    ];

    foreach ($nhanVienData as $data) {
        $nhanvien = new NhanVien();
        $nhanvien->ten = $data[0];
        $nhanvien->account = $data[1];
        $nhanvien->password = $data[2];
        $nhanvien->so_dien_thoai = $data[3];
        $nhanvien->dia_chi = $data[4];
        $nhanvien->email = $data[5];
        $nhanvien->save();
    }

    echo "Thêm nhân viên thành công";
}
}
