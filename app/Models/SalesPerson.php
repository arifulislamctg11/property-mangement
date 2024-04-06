<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesPerson extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'home_address',
        'gender',
        'civil_status',
        'citizenship',
        'mobile_number',
        'birthdate',
        'email_address',
        'facebook_account',
        'highest_education',
        'tin_number',
        'unit_sales_manager',
        'realty_name',
    ];
}
