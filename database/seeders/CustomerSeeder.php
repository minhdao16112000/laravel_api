<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = \Faker\Factory::create();

        // DB::table("customer")->insert([
        //     'name_customer' => $faker->firstname,
        //     'phone_customer' => $faker->phoneNumber,
        //     'address_customer' => $faker->address,
        //     'email_customer' => $faker->unique()->safeEmail,
        //     'city_customer' => $faker->city
        // ]);
        Customer::factory()->count(30)->create();
    }
}
