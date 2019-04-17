<?php

use App\Models\Emplyee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeTableSeeder extends Seeder
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
            [Emplyee::NAME => 'Bob', Emplyee::CITY => 'Binghamton' , Emplyee::CREATED_AT=>$now, Emplyee::UPDATED_AT=>$now],
            [Emplyee::NAME => 'John', Emplyee::CITY => 'Binghamton', Emplyee::CREATED_AT=>$now, Emplyee::UPDATED_AT=>$now],
            [Emplyee::NAME => 'Lisa', Emplyee::CITY => 'Binghamton', Emplyee::CREATED_AT=>$now, Emplyee::UPDATED_AT=>$now],
            [Emplyee::NAME => 'Matt', Emplyee::CITY => 'Vestal', Emplyee::CREATED_AT=>$now, Emplyee::UPDATED_AT=>$now],
        ];

        Emplyee::query()->insert($insert);
    }
}
