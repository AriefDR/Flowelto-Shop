<?php

use Illuminate\Database\Seeder;

class AddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('address')->insert([
            [
                'address' => 'Gading Serpong, Tangerang',
                'user_id' => 1,
            ],
            [
                'address' => 'Kampung Melayu, Jakarta',
                'user_id' => 2,
            ],
            [
                'address' => 'Kalideres, Tangerang',
                'user_id' => 3,
            ],
            [
                'address' => 'Kelapa gading, Jakarta Pusat',
                'user_id' => 4,
            ],
            [
                'address' => 'Pantai Indah Kapul, Jakarta',
                'user_id' => 5,
            ]
        ]);
    }
}
