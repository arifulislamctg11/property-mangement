<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesReceipt extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_name',
        'property_id',
        'buyer_id',
        // 'address',
        'amount',
        'type',
        'month',
        // 'lot_no',
        // 'lot_area',
        // 'floor_area',
    ];
    public function property() {
        return $this->belongsTo(Property::class);
    }
    public function buyer() {
        return $this->belongsTo(Buyer::class);
    }
}
