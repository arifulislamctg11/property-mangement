<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;
    protected $fillable = [
        'ev_number',
        'date',
        'property',
        'amount',
        'invoice_number',
        'supplier',
        'description',
    ];
    public function property()
    {
        return $this->belongsTo(Property::class, 'property_name', 'property');
    }
}
