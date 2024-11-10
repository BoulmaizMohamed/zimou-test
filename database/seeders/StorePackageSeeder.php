<?php

namespace Database\Seeders;

use App\Models\Store;
use App\Models\Package;
use Illuminate\Database\Seeder;

class StorePackageSeeder extends Seeder
{
    public function run()
    {
  // just change the number of stores (5000) and packeges (100)
        Store::factory(50)->create()->each(function ($store) {

            Package::factory(10)->create([
                'store_id' => $store->id,  
            ]);
        });
    }
}
