<?php

namespace Database\Factories;

use App\Models\Store;
use Illuminate\Database\Eloquent\Factories\Factory;

class StoreFactory extends Factory
{
    protected $model = Store::class;

    public function definition()
    {
        return [
            'code' => $this->faker->unique()->lexify('??????????'),
            'name' => $this->faker->company,
            'email' => $this->faker->unique()->companyEmail,
            'phones' => $this->faker->phoneNumber,
            'company_name' => $this->faker->company,
            'capital' => $this->faker->randomFloat(2, 10000, 500000),
            'address' => $this->faker->address,
            'register_commerce_number' => $this->faker->unique()->numberBetween(100000, 999999),
            'nif' => $this->faker->unique()->randomNumber(9),
            'legal_form' => $this->faker->randomElement([1, 2, 3, 4]), 
            'status' => 1,
            'can_update_preparing_packages' => $this->faker->boolean,
        ];
    }
}
