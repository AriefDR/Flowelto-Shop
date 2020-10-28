<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryFlowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_flowers')->insert([
            [
                'category_name' => 'Fresh Flower',
                'category_img' => '1603867713$2y$10$F8AEHgpmp6ajaixK9NZdr.9.jBmH0CZ0lIaQ7Bp3iv79sXPmGE8wG.png',
                'created_at' => '2020-10-04 16:00:00'

            ],
            [
                'category_name' => 'Bouquet',
                'category_img' => '1603867750$2y$10$sDUVxShj4yeWITJ8F1ROvuWo6AHH6vKhkAdi3o7kgZ.fMm4hSA6m.jpeg',
                'created_at' => '2020-10-04 16:10:00'

            ],
            [
                'category_name' => 'Vase',
                'category_img' => '1603867801$2y$10$Mmy5mQERKnG6tO5i1nAXSOPdGXhax9y154GD09ZFsXVvYsqaBIuRu.jpeg',
                'created_at' => '2020-10-04 16:20:00'

            ],
            [
                'category_name' => 'Blossom Box',
                'category_img' => '1603867836$2y$10$Z7fksr3BbV1x3ln19SYJ5.dtTgSFyWoILiCkqACvyWKm3jRxkxh.u.png',
                'created_at' => '2020-10-04 16:30:00'

            ],
            [
                'category_name' => 'Acrylic Blossom Box',
                'category_img' => '1603867892$2y$10$CUDvw.eiRZYrtsVMotBKc.eHBXw1WiKLcpj335XYix75LCkbKcO5K.jpeg',
                'created_at' => '2020-10-04 16:40:00'

            ],
            [
                'category_name' => 'New Flower',
                'category_img' => '1603867950$2y$10$0hfwMa.EFuyvhOIg6K.aoeuv7N9ew1pgNdyVPY7RVtWlOWv4wBAke.jpeg',
                'created_at' => '2020-10-04 16:50:00'

            ]
        ]);
    }
}
