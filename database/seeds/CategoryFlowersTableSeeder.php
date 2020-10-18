<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CategoryFlowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_flowers')-> insert([
            [
                'category_name' => 'Fresh Flower',
                'category_img' => Hash::make('Fresh Flower'),
                'created_at'=> '2020-10-04 16:00:00'

            ],
            [
                'category_name' => 'Bouquet',
                'category_img' => Hash::make('Boquet'),
                'created_at'=> '2020-10-04 16:10:00'

            ],
            [
                'category_name' => 'Vase',
                'category_img' => Hash::make('Vase'),
                'created_at'=> '2020-10-04 16:20:00'

            ],
            [
                'category_name' => 'Blossom Box',
                'category_img' => Hash::make('Fresh Flower'),
                'created_at'=> '2020-10-04 16:30:00'

            ],
            [
                'category_name' => 'Acrylic Blossom Box',
                'category_img' => Hash::make('Fresh Flower'),
                'created_at'=> '2020-10-04 16:40:00'

            ],
            [
                'category_name' => 'New',
                'category_img' => Hash::make('New'),
                'created_at'=> '2020-10-04 16:50:00'

            ]
        ]);
    }
}
