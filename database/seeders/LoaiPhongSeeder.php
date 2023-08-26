<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\loai_phong;
class LoaiPhongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'Standard',
            'Superior (SUP)',
            'Deluxe (DLX)',
            'SUITE',
            'Presidential Suite',
            'Executive Suite',
            'Junior Suite',
            'Royal Suite room',
        ];

        $id = 1; // ID bắt đầu từ 1

        foreach ($data as $item) {
            loai_phong::create([
                'id' => $id,
                'loaiphong' => $item,
            ]);

            $id++; // Tăng ID lên sau khi chèn
        }
    }
}
