<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriberModel extends Model
{
    use HasFactory;
    protected $table = 'subscribers';
    public static function getRecord()
    {
        return self::select('subscribers.*')
            ->orderBy('created_at', 'desc')
            ->get();
    }

    public static function getActive()
    {
        return self::select('subscribers.*')
            ->where(['status' => 1])
            ->orderBy('created_at', 'desc')
            ->get();
    }
}
