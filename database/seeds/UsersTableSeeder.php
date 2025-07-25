<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'username' => 'arief dr',
                'email' => 'arief@gmail.com',
                'password' => bcrypt(123123123),
                'gender' => 'male',
                'dob' => '1999-12-12',
                'phone_number' => '08127178349',
                'created_at' => '2020-10-4 11:00:00',
                'role' => 'manager'
            ],
            [
                'username' => 'febio irsadad',
                'email' => 'febio@gmail.com',
                'password' => bcrypt(123123123),
                'gender' => 'male',
                'dob' => '2000-08-09',
                'phone_number' => '08982276451',
                'created_at' => '2020-10-4 11:00:00',
                'role' => 'manager'
            ],
            [
                'username' => 'dameria octaviani',
                'email' => 'dame@gmail.com',
                'password' => bcrypt(123123123),
                'gender' => 'female',
                'dob' => '1998-12-22',
                'phone_number' => '081237284756',
                'created_at' => '2020-10-4 11:20:00',
                'role' => 'user'
            ],
            [
                'username' => 'david setiawan',
                'email' => 'david@gmail.com',
                'password' => bcrypt(123123123),
                'gender' => 'male',
                'dob' => '2000-12-02',
                'phone_number' => '086254324182',
                'created_at' => '2020-10-4 11:30:00',
                'role' => 'user'
            ],
            [
                'username' => 'hellen clasrisa',
                'email' => 'helen@gmail.com',
                'password' => bcrypt(123123123),
                'gender' => 'female',
                'dob' => '2000-10-11',
                'phone_number' => '081223556784',
                'created_at' => '2020-10-4 11:35:00',
                'role' => 'user'
            ]
        ]);
    }
}
