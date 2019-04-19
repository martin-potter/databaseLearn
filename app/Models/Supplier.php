<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'suppliers';
    const TABLE = 'suppliers';
    const ID = 'id';
    const NAME = 'sname';
    const CITY = 'city';
    const TELEPHONE = 'telephone_no';
}
