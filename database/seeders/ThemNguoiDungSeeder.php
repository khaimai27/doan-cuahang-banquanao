<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NguoiDung;
Use Illuminate\Support\Facades\Hash;
class ThemNguoiDungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nguoidung=new NguoiDung();
        $nguoidung->ten='thuan';
        $nguoidung->account='NguoiDung02';
        $nguoidung->password=Hash::make('123456');
        $nguoidung->so_dien_thoai='0931412412';
        $nguoidung->dia_chi='TP.HCM';
        $nguoidung->email='0306211200@caothang.edu.vn';
        $nguoidung->save();
        echo"them admin thanh cong";
    }
}
