<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function freeSubscription()
    {
        return self::where('id', 1)->first();
    }
    
    public static function monthlySubscription()
    {
        return self::where('id', 2)->first();
    }
    
    public static function yearlySubscription()
    {
        return self::where('id', 3)->first();
    }
}