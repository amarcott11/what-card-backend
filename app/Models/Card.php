<?php

namespace App\Models;

use App\Models\Bank;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Card extends Model
{
    use HasFactory;

    // public $timestamps = false;

    // protected $fillable = [
    //     'name',
    //     'bank',
    //     'password',
    //     'app_link',
    //     'img_path',
    //     'business',
    //     'cashback',
    //     'premium',
    //     'annual_fee'
    // ];

    // protected $attributes = [
    //     'business'    => false,
    //     'cashback'    => false,
    //     'premium'     => false,
    //     'annual_fee'  => false,
    // ];

    public function bank()
    {
        return $this->belongsTo(Bank::class, 'bank_id');
    }
}
