<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const ID = 'id';
    const NAME = 'pname';
    const QOH = 'qoh';
    const QOH_THRESHOLD = 'qoh_threshold';
    const ORIGINAL_PRICE = 'original_price';
    const DISCNT_RATE = 'discnt_rate';
    const SID = 'sid';
}
