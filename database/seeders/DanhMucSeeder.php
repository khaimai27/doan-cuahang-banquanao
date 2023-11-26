<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DanhMucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $danhMucs = [
            ['id' => 1, 'ten' => 'T-Shirt', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'ten' => 'Quần', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'ten' => 'Hoodie', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'ten' => 'Áo khoác', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'ten' => 'Khác', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('danh_muc')->insert($danhMucs);
    }
}
