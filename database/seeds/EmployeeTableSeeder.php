<?php

use App\Models\Employee;
use Illuminate\Database\Seeder;

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
            [Employee::NAME => 'Bob', Employee::CITY => 'Binghamton' , Employee::CREATED_AT=>$now, Employee::UPDATED_AT=>$now],
            [Employee::NAME => 'John', Employee::CITY => 'Binghamton', Employee::CREATED_AT=>$now, Employee::UPDATED_AT=>$now],
            [Employee::NAME => 'Lisa', Employee::CITY => 'Binghamton', Employee::CREATED_AT=>$now, Employee::UPDATED_AT=>$now],
            [Employee::NAME => 'Matt', Employee::CITY => 'Vestal', Employee::CREATED_AT=>$now, Employee::UPDATED_AT=>$now],
        ];

        Employee::query()->insert($insert);
    }
}
