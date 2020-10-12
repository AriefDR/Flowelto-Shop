<?php

use Illuminate\Database\Seeder;

class ImgFlowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('img_flowers')->insert([
            [
                'img_flower' => Hash::make('Magical Blue Majesty'),
                'flower_id' => 1
            ],
            [
                'img_flower' => Hash::make('Romantic Day in Blause'),
                'flower_id' => 2
            ],
            [
                'img_flower' => Hash::make('Sweet Elegance Luxury Vase'),
                'flower_id' => 3
            ],
            [
                'img_flower' => Hash::make('Fall Romance Blossom Box'),
                'flower_id' => 4
            ],
            [
                'img_flower' => Hash::make('Luxury Pink in Acrylic Round Box'),
                'flower_id' => 5
            ],
            [
                'img_flower' => Hash::make('Sunset ON Mars'),
                'flower_id' => 6
            ]
        ]);
    }
}
