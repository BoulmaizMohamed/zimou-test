<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\CommunesSeeder;
use Database\Seeders\WilayaSeeder;
use Database\Seeders\DeliveryTypesSeeder;
use Database\Seeders\PackageStatusesSeeder;
use Database\Seeders\StorePackageSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            WilayaSeeder::class,
            CommunesSeeder::class,
            DeliveryTypesSeeder::class,
            PackageStatusesSeeder::class,
            StorePackageSeeder::class,
        ]);


        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
