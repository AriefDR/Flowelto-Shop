<?php

use Illuminate\Database\Seeder;

class DetailTransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_transactions')->insert([
            [
                'id_transaction' => 1,
                'quantity' => 1,
                'sub_price' => 2000000,
                'flower_id' => 1,
            ],
            [
                'id_transaction' => 1,
                'quantity' => 1,
                'sub_price' => 1800000,
                'flower_id' => 2,
            ],
            [
                'id_transaction' => 2,
                'quantity' => 1,
                'sub_price' => 3200000,
                'flower_id' => 3,
            ],
            [
                'id_transaction' => 2,
                'quantity' => 1,
                'sub_price' => 2200000,
                'flower_id' => 5,
            ],
            [
                'id_transaction' => 2,
                'quantity' => 1,
                'sub_price' => 2200000,
                'flower_id' => 6,
            ],
            [
                'id_transaction' => 3,
                'quantity' => 1,
                'sub_price' => 1200000,
                'flower_id' => 4,
            ]
        ]);
    }
}
