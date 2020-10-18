<?php

use Illuminate\Database\Seeder;

class TransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert([
            [
                'total_price' => 3800000,
                'status_payment' => 'paid',
                'user_id' => 1,
                'payment_id' => 1,
                'created_at' => '2020-10-04 18:00:00'
            ],
            [
                'total_price' => 7600000,
                'status_payment' => 'paid',
                'user_id' => 2,
                'payment_id' => 2,
                'created_at' => '2020-10-04 18:20:00'
            ],
            [
                'total_price' => 1200000,
                'status_payment' => 'paid',
                'user_id' => 3,
                'payment_id' => 3,
                'created_at' => '2020-10-04 18:30:00'
            ]
        ]);
    }
}
