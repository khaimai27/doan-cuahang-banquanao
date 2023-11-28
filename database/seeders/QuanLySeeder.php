<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\QuanLy;
Use Illuminate\Support\Facades\Hash;
class QuanLySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $quanly=new quanly();
        $quanly->ten='thuan';
        $quanly->account='QuanLy01';
        $quanly->password=Hash::make('123456');
        $quanly->so_dien_thoai='0931412412';
        $quanly->dia_chi='TP.HCM';
        $quanly->email='0306211200@caothang.edu.vn';
        $quanly->save();
        echo"them admin thanh cong";
    }
}
