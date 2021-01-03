<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'bank',
        'password',
        'app_link',
        'img_path',
        'business',
        'cashback',
        'premium',
        'annual_fee'
    ];

    protected $attributes = [
        'business'    => false,
        'cashback'    => false,
        'premium'     => false,
        'annual_fee'  => false,
    ];
}
