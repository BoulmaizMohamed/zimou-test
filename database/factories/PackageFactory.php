<?php

namespace Database\Factories;

use App\Models\Package;
use App\Models\Store;
use Illuminate\Database\Eloquent\Factories\Factory;

class PackageFactory extends Factory
{
    protected $model = Package::class;

    public function definition()
    {
        return [
            'uuid' => $this->faker->unique()->uuid,
            'tracking_code' => $this->faker->unique()->numerify('TRACK-#####'),
            'commune_id' => $this->faker->randomElement([1, 2, 3, 4]), 
            'delivery_type_id' => $this->faker->randomElement([1, 2, 3, 4]), 
            'status_id' => $this->faker->randomElement([1, 2, 3, 4]), 
            'store_id' => Store::all()->random()->id, 
            'address' => $this->faker->address,
            'can_be_opened' => $this->faker->boolean,
            'name' => $this->faker->word,
            'client_first_name' => $this->faker->firstName,
            'client_last_name' => $this->faker->lastName,
            'client_phone' => $this->faker->phoneNumber,
            'client_phone2' => $this->faker->optional()->phoneNumber,
            'cod_to_pay' => $this->faker->randomFloat(2, 0, 1000),
            'commission' => $this->faker->randomFloat(2, 10, 500),
            'status_updated_at' => $this->faker->dateTime,
            'delivered_at' => $this->faker->optional()->dateTime,
            'delivery_price' => $this->faker->randomFloat(2, 5, 50),
            'extra_weight_price' => $this->faker->randomNumber(),
            'free_delivery' => $this->faker->boolean,
            'packaging_price' => $this->faker->randomNumber(),
            'partner_cod_price' => $this->faker->randomFloat(2, 0, 200),
            'partner_delivery_price' => $this->faker->randomNumber(),
            'partner_return' => $this->faker->randomFloat(2, 0, 100),
            'price' => $this->faker->randomFloat(2, 50, 1000),
            'price_to_pay' => $this->faker->randomFloat(2, 50, 1000),
            'return_price' => $this->faker->randomFloat(2, 0, 500),
            'total_price' => $this->faker->randomFloat(2, 100, 2000),
            'weight' => $this->faker->randomNumber(3),
        ];
    }
}
