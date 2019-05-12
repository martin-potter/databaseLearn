<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $table = 'purchases';
    const TABLE = 'purchases';
    const ID = 'id';
    const CID = 'cid';
    const EID = 'eid';
    const PID = 'pid';
    const QTY = 'qty';
    const PTIME = 'ptime';
    const TOTAL_PRICE = 'total_price';

    protected $fillable = [
        self::CID,
        self::EID,
        self::PID,
        self::QTY,
        self::PTIME,
        self::TOTAL_PRICE
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class,'cid','id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class,'eid','id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class,'pid','id');
    }

}
