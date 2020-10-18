<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TypePaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_payments')->insert([
            [
                'type_payment_name' => 'cash',
                'created_at' => '2020-10-04 18:00:00'
            ],
            [
                'type_payment_name' => 'debit',
                'created_at' => '2020-10-04 18:00:00'
            ],
            [
                'type_payment_name' => 'ovo',
                'created_at' => '2020-10-04 18:00:00'
            ],
            [
                'type_payment_name' => 'gopay',
                'created_at' => '2020-10-04 18:00:00'
            ],
        ]);
    }
}
