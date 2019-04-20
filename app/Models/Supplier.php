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

    protected $fillable = [
        self::NAME,
        self::CITY,
        self::TELEPHONE
    ];

    public function products()
    {
        return $this->hasMany(Product::class,'sid','id');
    }
}
