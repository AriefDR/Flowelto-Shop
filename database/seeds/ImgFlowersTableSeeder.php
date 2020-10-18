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
            ],
            [
                'img_flower' => Hash::make('Romantic Day in Blause'),
            ],
            [
                'img_flower' => Hash::make('Sweet Elegance Luxury Vase'),
            ],
            [
                'img_flower' => Hash::make('Fall Romance Blossom Box'),
            ],
            [
                'img_flower' => Hash::make('Luxury Pink in Acrylic Round Box'),
            ],
            [
                'img_flower' => Hash::make('Sunset ON Mars'),
            ]
        ]);
    }
}
