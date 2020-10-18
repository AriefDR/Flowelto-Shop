<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RelationCategoryFlowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('relation_category_flowers')->insert([
            [
                'flower_id' => 1,
                'category_id' => 1
            ],
            [
                'flower_id' => 2,
                'category_id' => 2
            ],
            [
                'flower_id' => 3,
                'category_id' => 3
            ],
            [
                'flower_id' => 4,
                'category_id' => 5
            ],
            [
                'flower_id' => 5,
                'category_id' => 6
            ],
            [
                'flower_id' => 6,
                'category_id' => 4
            ]
        ]);
    }
}
