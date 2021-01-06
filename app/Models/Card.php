<?php

namespace App\Models;

use App\Models\Bank;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Card extends Model
{
    use HasFactory;

    public function bank()
    {
        return $this->belongsTo(Bank::class, 'bank_id');
    }
}
