<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DeliveryType;

class DeliveryTypesSeeder extends Seeder
{
    public function run()
    {
        // Add some sample delivery types
        DeliveryType::create(['id' => 1, 'name' => 'Standard']);
        DeliveryType::create(['id' => 2, 'name' => 'bereau']);
        DeliveryType::create(['id' => 3, 'name' => 'home']);
        DeliveryType::create(['id' => 4, 'name' => 'post']);
    }
}
