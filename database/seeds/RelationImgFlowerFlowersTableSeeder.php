<?php

use Illuminate\Database\Seeder;

class RelationImgFlowerFlowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('relation_imgFlower_flowers')->insert([
            [
                'flower_id' => 1,
                'img_flower_id' => 1
            ],
            [
                'flower_id' => 2,
                'img_flower_id' => 2
            ],
            [
                'flower_id' => 3,
                'img_flower_id' => 3
            ],
            [
                'flower_id' => 4,
                'img_flower_id' => 5
            ],
            [
                'flower_id' => 5,
                'img_flower_id' => 6
            ],
            [
                'flower_id' => 6,
                'img_flower_id' => 4
            ]
        ]);
    }
}
