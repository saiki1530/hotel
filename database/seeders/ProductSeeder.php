<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\san_pham;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
          // Xóa dữ liệu cũ nếu cần
          san_pham::truncate();

          // Chèn dữ liệu mới
          $faker = \Faker\Factory::create();

          for ($i = 1; $i <= 500; $i++) {
            $imageNumber = $i <= 200 ? $i : $faker->numberBetween(1, 200);
            san_pham::create([

                  'id_lp' => $faker->numberBetween(1, 8),
                  'tenSP' => $faker->word,
                  'anh' => 'upload/img/'. $imageNumber . '.jpg',
                  'gia_goc' => $faker->randomFloat(2, 10, 1000),
                  'so_luong' => $faker->numberBetween(1, 100),
                  'gia_khuyen_mai' => $faker->randomFloat(2, 5, 900),
                  'tinh_trang' => $faker->randomElement(['Còn', 'Hết']),
                  'mo_ta' => $faker->text,
                  'hot' => $faker->boolean,
                  'rate' => $faker->randomFloat(1, 1, 5),
                  'view' => $faker->numberBetween(0, 1000),
              ]);
          }
          DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
