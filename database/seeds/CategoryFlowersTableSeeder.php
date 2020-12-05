<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
                'slug' => Str::slug('Fresh Flower', '-'),
                'category_img' => '1603867713$2y$10$F8AEHgpmp6ajaixK9NZdr.9.jBmH0CZ0lIaQ7Bp3iv79sXPmGE8wG.png',
                'created_at' => '2020-10-04 16:00:00'

            ],
            [
                'category_name' => 'Bouquet',
                'slug' => Str::slug('Bouquet', '-'),
                'category_img' => '1603867750$2y$10$sDUVxShj4yeWITJ8F1ROvuWo6AHH6vKhkAdi3o7kgZ.fMm4hSA6m.jpeg',
                'created_at' => '2020-10-04 16:10:00'

            ],
            [
                'category_name' => 'Vase',
                'slug' => Str::slug('Vase', '-'),
                'category_img' => '1603867801$2y$10$Mmy5mQERKnG6tO5i1nAXSOPdGXhax9y154GD09ZFsXVvYsqaBIuRu.jpeg',
                'created_at' => '2020-10-04 16:20:00'

            ],
            [
                'category_name' => 'Blossom Box',
                'slug' => Str::slug('Blossom Box', '-'),
                'category_img' => '1603867836$2y$10$Z7fksr3BbV1x3ln19SYJ5.dtTgSFyWoILiCkqACvyWKm3jRxkxh.u.png',
                'created_at' => '2020-10-04 16:30:00'

            ],
            [
                'category_name' => 'Christmas Boquete',
                'slug' => Str::slug('Christmas Boquete', '-'),
                'category_img' => '1607046080$2y$10$voAiTZOEDQtcwCp8iO176e8K1L01DpOCRAdK1yXZ.iijRxBXwBVie.jpeg',
                'created_at' => '2020-12-03 08:20:00'

            ],
            [
                'category_name' => 'Sun Flowers',
                'slug' => Str::slug('Sun Flowers', '-'),
                'category_img' => '1607046205$2y$10$GABXA9jIKpEHAHzVTG1MLOcH8UGVRvvwYaBBJJwnlZPIlSo5L47Wq.jpeg',
                'created_at' => '2020-12-03 09:10:00'

            ],
            [
                'category_name' => 'Orchids Flowers',
                'slug' => Str::slug('Orchids Flowers', '-'),
                'category_img' => '1607046278$2y$10$ICDoeKd37FuG9BceU53elO2yb5VvU.HKhIUiTQVgIeffvl8MZbPb6.jpeg',
                'created_at' => '2020-12-03 08:30:00'
            ],
            [
                'category_name' => 'Tulip Flowers',
                'slug' => Str::slug('Tulip Flowers', '-'),
                'category_img' => '1607046649$2y$10$PXBynrI6.2dtov90rB4II.IwseS5EIg7E6zT4yhGs5sl1Q1qV1TsK.jpeg',
                'created_at' => '2020-12-03 08:30:00'
            ],
        ]);
    }
}
