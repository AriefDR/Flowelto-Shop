<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
            UsersTableSeeder::class,
            CategoryFlowersTableSeeder::class,
            ManagerTableSeeder::class,
            FlowersTableSeeder::class,
            ImgFlowersTableSeeder::class,
            TypePaymentsTableSeeder::class,
            TransactionsTableSeeder::class,
            DetailTransactionsTableSeeder::class,
            AddressTableSeeder::class,
            RelationCategoryFlowersTableSeeder::class
        ]);
    }
}
