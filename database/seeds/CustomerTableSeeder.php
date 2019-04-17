<?php

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
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
            [Customer::NAME => 'Kathy', Customer::CITY => 'Vestal', Customer::VISITS_MADE => 2, Customer::LAST_VISIT_TIME=>  '2017-11-28 10:25:32', Customer::CREATED_AT=>$now, Customer::UPDATED_AT=>$now],
            [Customer::NAME => 'Brown', Customer::CITY => 'Binghamton', Customer::VISITS_MADE => 1, Customer::LAST_VISIT_TIME=>  '2013-12-05 09:12:30', Customer::CREATED_AT=>$now, Customer::UPDATED_AT=>$now],
            [Customer::NAME => 'Anne', Customer::CITY => 'Vestal', Customer::VISITS_MADE => 1, Customer::LAST_VISIT_TIME=>  '2016-11-29 14:30:00', Customer::CREATED_AT=>$now, Customer::UPDATED_AT=>$now],
            [Customer::NAME => 'Jack', Customer::CITY => 'Vestal', Customer::VISITS_MADE => 1, Customer::LAST_VISIT_TIME=>  '2016-12-04 16:48:02', Customer::CREATED_AT=>$now, Customer::UPDATED_AT=>$now],
            [Customer::NAME => 'Mike', Customer::CITY => 'Binghamton', Customer::VISITS_MADE => 1, Customer::LAST_VISIT_TIME=>  '2016-11-30 11:52:16', Customer::CREATED_AT=>$now, Customer::UPDATED_AT=>$now],
        ];

        Customer::query()->insert($insert);
    }
}
