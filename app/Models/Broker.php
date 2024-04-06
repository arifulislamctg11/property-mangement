<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Broker extends Model
{
    use HasFactory;
    protected $fillable = [
        'realty_name',
        'lead_broker',
        'office_address',
        'telephone_number',
        'mobile_number',
        'email_address',
        'website',
        'years_in_operation',
        'real_estate_license_number',
        'valid_from',
        'valid_until',
        'place_issued',
        'authorized_representative',
        'designation',
        'tin_number',
        'admin',
    ];
}
