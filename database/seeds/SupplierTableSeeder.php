<?php

use App\Models\Supplier;
use Illuminate\Database\Seeder;

class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = now()->format('Y-m-d H:i:s');
        $insert = [
            [Supplier::NAME => 'Supplier 1', Supplier::CITY => 'Binghamton', Supplier::TELEPHONE => '6075555431' , Supplier::CREATED_AT=>$now, Supplier::UPDATED_AT=>$now],
            [Supplier::NAME => 'Supplier 2', Supplier::CITY => 'NYC', Supplier::TELEPHONE => '6075555432' , Supplier::CREATED_AT=>$now, Supplier::UPDATED_AT=>$now],
        ];

        Supplier::query()->insert($insert);
    }
}
