<?php

// database/seeders/CustomersTableSeeder.php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    public function run()
    {
        Customer::factory()->count(10)->create();
    }
}

