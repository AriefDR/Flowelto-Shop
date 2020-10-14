<?php

use Illuminate\Database\Seeder;

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
                'username' => 'ryanda kusuma',
                'email' => 'ryanda@gmail.com',
                'password' => Hash::make('password'),
                'gender' => 'male',
                'dob' => '1999-12-12',
                'phone_number' => '08127178349',
                'remember_token' => Hash::make('token'),
                'created_at' => '2020-10-4 11:00:00'
            ],
            [
                'username' => 'febio irsadad',
                'email' => 'febio@gmail.com',
                'password' => Hash::make('password'),
                'gender' => 'male',
                'dob' => '2000-08-09',
                'phone_number' => '08982276451',
                'remember_token' => Hash::make('token'),
                'created_at' => '2020-10-4 11:00:00'
            ],
            [
                'username' => 'dameria octaviani',
                'email' => 'dame@gmail.com',
                'password' => Hash::make('password'),
                'gender' => 'female',
                'dob' => '1998-12-22',
                'phone_number' => '081237284756',
                'remember_token' => Hash::make('token'),
                'created_at' => '2020-10-4 11:20:00'
            ],
            [
                'username' => 'david setiawan',
                'email' => 'david@gmail.com',
                'password' => Hash::make('password'),
                'gender' => 'male',
                'dob' => '2000-12-02',
                'phone_number' => '086254324182',
                'remember_token' => Hash::make('token'),
                'created_at' => '2020-10-4 11:30:00'
            ],
            [
                'username' => 'hellen clasrisa',
                'email' => 'helen@gmail.com',
                'password' => Hash::make('password'),
                'gender' => 'female',
                'dob' => '2000-10-11',
                'phone_number' => '081223556784',
                'remember_token' => Hash::make('token'),
                'created_at' => '2020-10-4 11:35:00'
            ]
        ]);
    }
}
