<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primary_categories')->insert([
            [
                'name' => '世界の絶景',
                'sort_order' => 1
            ],
            [
                'name' => '世界の人々',
                'sort_order' => 2
            ],
            [
                'name' => '世界の日常',
                'sort_order' => 3
            ],
        ]);

        DB::table('secondary_categories')->insert([
            [
                'name' => 'フィッツロイ',
                'sort_order' => 1,
                'primary_category_id' => 1
            ],
            [
                'name' => 'ニーラゴンゴ',
                'sort_order' => 2,
                'primary_category_id' => 1
            ],
            [
                'name' => 'サニパス',
                'sort_order' => 3,
                'primary_category_id' => 1
            ],
            [
                'name' => 'エジプト',
                'sort_order' => 4,
                'primary_category_id' => 2
            ],
            [
                'name' => 'インド',
                'sort_order' => 5,
                'primary_category_id' => 2
            ],
            [
                'name' => 'ペルー',
                'sort_order' => 6,
                'primary_category_id' => 2
            ],
        ]);
    }
}
