<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Console\Helper\Table;

class Product extends Model
{
    protected $table = 'products';
    const TABLE = 'products';
    const ID = 'id';
    const NAME = 'pname';
    const QOH = 'qoh';
    const QOH_THRESHOLD = 'qoh_threshold';
    const ORIGINAL_PRICE = 'original_price';
    const DISCNT_RATE = 'discnt_rate';
    const SID = 'sid';

    protected $fillable = [
        self::NAME,
        self::QOH,
        self::QOH_THRESHOLD,
        self::ORIGINAL_PRICE,
        self::DISCNT_RATE,
        self::SID
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class,'sid','id');
    }

    public function purchases()
    {
        return $this->hasMany(Purchase::class,'pid','id');
    }
}
