<?php

use Illuminate\Database\Seeder;

class ManagerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('manager')->insert([
                'username' => 'arief dr',
                'email' => 'arief@gmail.com',
                'password' => Hash::make('password'),
                'gender' => 'male',
                'dob' => '1992-02-12',
                'phone_number' => '08125148749',
                'remember_token' => Hash::make('token'),
                'created_at' => '2020-10-4 11:00:00'
        ]);
    }
}
