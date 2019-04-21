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
        $this->call(CustomerTableSeeder::class);
        $this->call(EmployeeTableSeeder::class);
        $this->call(SupplierTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(PurchaseTableSeeder::class);
    }
}
