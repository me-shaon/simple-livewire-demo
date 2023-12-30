<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{
    use HasFactory;

    protected $fillable = [
        'city',
        'temperature',
        'condition'
    ];

    public const CONDITION_SUNNY = 'sunny';
    public const CONDITION_CLOUDY = 'cloudy';

    public const CONDITION_LIST = [
        self::CONDITION_SUNNY,
        self::CONDITION_CLOUDY
    ];
}
