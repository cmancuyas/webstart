<?php

use Illuminate\Database\Seeder;
use App\Model\Customer;
use Faker\Provider\zh_TW\DateTime;
use Faker\Provider\Base;
use Faker\Provider\Biased;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();

        for($i=0; $i<1000; $i++){
            Customer::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'company_id' => $faker->numberBetween(1, 4)
            ]);
        }
    }
}
