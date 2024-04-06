<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrokerAccreditation extends Model
{
    use HasFactory;
    protected $fillable = [
        'realty_name',
        'lead_broker',
        'office_address',
        'telephone_no',
        'mobile_no',
        'email_address',
        'website',
        'years_in_operation',
        'real_estate_license_no',
        'valid_from',
        'valid_until',
        'place_issued',
        'authorized_representative',
        'designation',
        'tin_no',
    ];
}
