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
}
