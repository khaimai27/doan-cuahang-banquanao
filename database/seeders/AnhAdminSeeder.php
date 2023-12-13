<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnhAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['url' => 'images/nhanvien/WdQfDcKRCpbz9fWLul1J4ajYe8VPyaFKIQBoLsl1.gif', 'nhan_vien_id' => 11, 'created_at' => '2023-11-28 07:19:28', 'updated_at' => '2023-11-28 07:19:28'],
            ['url' => 'images/nhanvien/i9YDM7koZNbFDBHCgZqWgPFQQH19pbTnkLXOAuME.webp', 'nhan_vien_id' => 16, 'created_at' => '2023-11-28 08:18:48', 'updated_at' => '2023-11-28 08:18:48'],
            ['url' => 'images/nhanvien/vRF5fl6ARXiOlPFE8ZHPlVPaTGBYLtyTcvDc4i2m.jpg', 'nhan_vien_id' => 14, 'created_at' => '2023-11-28 14:55:14', 'updated_at' => '2023-11-28 14:55:14'],
            ['url' => 'images/nhanvien/4cgmfJsggkzU4nXkHCovJgUY8f3AFAXHTcqNeGOV.jpg', 'nhan_vien_id' => 13, 'created_at' => '2023-11-28 14:57:12', 'updated_at' => '2023-11-28 14:57:12'],
            ['url' => 'images/nhanvien/KqY8fSjNcAPb4tVZgdWYNxq9BNhMr2qzzqxc1dmW.jpg', 'nhan_vien_id' => 15, 'created_at' => '2023-11-28 14:57:54', 'updated_at' => '2023-11-28 14:57:54'],
            ['url' => 'images/nhanvien/9cC2uvlSkayIbC2rh7ifI9h56DuKshGbdMAzEBJW.webp', 'nhan_vien_id' => 17, 'created_at' => '2023-12-04 06:59:58', 'updated_at' => '2023-12-04 06:59:58'],
        ];

        DB::table('hinh_anh')->insert($data);
    }
}
