<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sizes = [
            ['id' => 1, 'ten' => 'S', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'ten' => 'M', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'ten' => 'L', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'ten' => 'XL', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'ten' => '2XL', 'created_at' => now(), 'updated_at' => now()],
        ];
        DB::table('size')->insert($sizes);
    }
}
