<?php

// database/factories/CustomerFactory.php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    protected $model = Customer::class;

    public function definition()
    {
        return [
            'customer_name' => $this->faker->name,
            'fiscal_data' => $this->faker->text,
            'delivery_address' => $this->faker->address,
        ];
    }
}
