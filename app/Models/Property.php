<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_name',
        'location',
        'model_type',
        'description',
        'total_contract_price',
        'lot_area',
        'floor_area',
        'block_no',
        'lot_no',
        'equity',
        'loanable_amount',
    ];
}
