<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MauSacSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mauSacs = [
            ['id' => 1, 'ten' => 'Xanh', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'ten' => 'Đỏ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'ten' => 'Tím', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'ten' => 'Vàng', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('mau_sac')->insert($mauSacs);
    }
}
