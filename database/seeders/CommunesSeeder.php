<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Commune;

class CommunesSeeder extends Seeder
{
    public function run()
    {
        // Add some sample communes
        Commune::create(['id' => 1, 'name' => 'Commune 1' , 'wilaya_id'=> 1]);
        Commune::create(['id' => 2, 'name' => 'Commune 2', 'wilaya_id'=> 2]);
        Commune::create(['id' => 3, 'name' => 'Commune 3', 'wilaya_id'=> 3]);
        Commune::create(['id' => 4, 'name' => 'Commune 4', 'wilaya_id'=> 4]);
    }
}
