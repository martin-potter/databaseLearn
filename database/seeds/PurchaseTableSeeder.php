<?php

use App\Models\Purchase;
use Illuminate\Database\Seeder;

class PurchaseTableSeeder extends Seeder
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
            [Purchase::CID => 0, Purchase::EID => 0, Purchase::PID => 0, Purchase::QTY=> 1, Purchase::PTIME=> '2017-10-22 12:34:22', Purchase::TOTAL_PRICE=>2.16, Purchase::CREATED_AT=>$now, Purchase::UPDATED_AT=>$now],
            [Purchase::CID => 1, Purchase::EID => 3, Purchase::PID => 3, Purchase::QTY=> 2, Purchase::PTIME=> '2016-12-05 09:12:30', Purchase::TOTAL_PRICE=>2.80, Purchase::CREATED_AT=>$now, Purchase::UPDATED_AT=>$now],
            [Purchase::CID => 2, Purchase::EID => 3, Purchase::PID => 0, Purchase::QTY=> 1, Purchase::PTIME=> '2016-11-29 14:30:00', Purchase::TOTAL_PRICE=>2.16, Purchase::CREATED_AT=>$now, Purchase::UPDATED_AT=>$now],
            [Purchase::CID => 0, Purchase::EID => 1, Purchase::PID => 1, Purchase::QTY=> 5, Purchase::PTIME=> '2016-11-28 10:25:32', Purchase::TOTAL_PRICE=>6.00, Purchase::CREATED_AT=>$now, Purchase::UPDATED_AT=>$now],
            [Purchase::CID => 4, Purchase::EID => 4, Purchase::PID => 2, Purchase::QTY=> 3, Purchase::PTIME=> '2016-11-30 11:52:16', Purchase::TOTAL_PRICE=>3.24, Purchase::CREATED_AT=>$now, Purchase::UPDATED_AT=>$now],
            [Purchase::CID => 3, Purchase::EID => 2, Purchase::PID => 5, Purchase::QTY=> 1, Purchase::PTIME=> '2016-12-04 16:48:02', Purchase::TOTAL_PRICE=>7.19, Purchase::CREATED_AT=>$now, Purchase::UPDATED_AT=>$now],
        ];

        Purchase::query()->insert($insert);
    }
}
