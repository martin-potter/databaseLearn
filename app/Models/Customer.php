<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    const TABLE = 'customers';
    const ID = 'id';
    const NAME = 'cname';
    const CITY = 'city';
    const VISITS_MADE = 'visits_made';
    const LAST_VISIT_TIME = 'last_visit_time';

    protected $fillable = [
        self::NAME,
        self::CITY,
        self::VISITS_MADE,
        self::LAST_VISIT_TIME
    ];

    public function purchases()
    {
        return $this->hasMany(Purchase::class,'cid','id');
    }
}
