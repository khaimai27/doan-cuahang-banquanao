<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnhSPSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 12,
                'url' => 'uploads/A0d7AbMrrregFXoOqz9BIdKbr8ECMKB3RcwF2S5P.webp',
                'san_pham_id' => 12,
                'created_at' => '2023-12-01 16:37:14',
                'updated_at' => '2023-12-01 16:37:14',
            ],
            [
                'id' => 13,
                'url' => 'uploads/wqdAiJUW74FiZC7DEQwY8Lxp8IAkOSoFXhvx8ttZ.webp',
                'san_pham_id' => 14,
                'created_at' => '2023-12-01 16:41:31',
                'updated_at' => '2023-12-01 16:41:31',
            ],
            [
                'id' => 14,
                'url' => 'uploads/qUhJK50pFjTYwKgHD6MJwzZtwmqcE4mOEgAYWAEK.webp',
                'san_pham_id' => 15,
                'created_at' => '2023-12-01 16:42:54',
                'updated_at' => '2023-12-01 16:42:54',
            ],
            [
                'id' => 15,
                'url' => 'uploads/SeFj3lRTkGccNaPvL3vX0F9xP2xATIWdgIB2CSew.webp',
                'san_pham_id' => 16,
                'created_at' => '2023-12-01 16:43:57',
                'updated_at' => '2023-12-01 16:43:57',
            ],
        ];

        DB::table('hinh_anh_san_pham')->insert($data);
    }
}
