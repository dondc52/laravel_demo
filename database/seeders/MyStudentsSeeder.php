<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MyStudent;
use Faker\Generator;
use Illuminate\Container\Container;

class MyStudentsSeeder extends Seeder
{

    protected $faker;

    public function __construct() {
        $this->faker = $this->withFaker();
    }

    protected function withFaker()
    {
        return Container::getInstance()->make(Generator::class);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        for ($i = 0; $i < 300; $i++) {
            MyStudent::create([
                'full_name' => $this->faker->name,
                'email' => $this->faker->email                   ,
                'gender' => random_int(0,1),
                'phone' => $this->faker->phoneNumber ,
                'full_name' => $this->faker->name,
                'address' => $this->faker->address,
                'birthday' => $this->faker->dateTimeThisCentury->format('Y-m-d'),
            ]);
        }
        
    }
}
