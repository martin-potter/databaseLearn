<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    const TABLE = 'employees';
    const ID = 'id';
    const NAME = 'ename';
    const CITY = 'city';
}
