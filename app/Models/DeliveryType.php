<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryType extends Model
{
    use HasFactory;

    
    protected $table = 'delivery_types';

    


    protected $fillable = ['name'];

    
    public function packages()
    {
        return $this->hasMany(Package::class);
    }
}
