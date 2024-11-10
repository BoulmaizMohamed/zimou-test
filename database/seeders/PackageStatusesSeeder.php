<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PackageStatus;

class PackageStatusesSeeder extends Seeder
{
    public function run()
    {
        // Add some sample package statuses
        PackageStatus::create(['id' => 1, 'name' => 'Pending']);
        PackageStatus::create(['id' => 2, 'name' => 'Shipped']);
        PackageStatus::create(['id' => 3, 'name' => 'Delivered']);
        PackageStatus::create(['id' => 4, 'name' => 'Returned']);
    }
}
