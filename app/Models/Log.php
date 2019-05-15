<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table = 'logs';
    const WHO = 'who';
    const TIME = 'time';
    const TABLE_NAME = 'table_name';
    const OPERATION = 'operation';
    const KEY_VALUE = 'key_value';
    protected $fillable = [
        self::WHO,
        self::TIME,
        self::TABLE_NAME,
        self::KEY_VALUE,
        self::OPERATION
    ];
}
