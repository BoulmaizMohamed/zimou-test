<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $table = 'stores';

    protected $fillable = [
        'code',
        'name',
        'email',
        'phones',
        'company_name',
        'capital',
        'address',
        'register_commerce_number',
        'nif',
        'legal_form',
        'status',
        'can_update_preparing_packages',
    ];
}
