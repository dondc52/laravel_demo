<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use Faker\Generator;
use Illuminate\Container\Container;

class DatabaseStudentSeeder extends Seeder
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
            Student::create([
                'student_id' => $this->faker->phoneNumber,
                'student_name' => $this->faker->name,
                'student_email' => $this->faker->email,
                'student_age' => random_int(18, 30),
                'student_gender' => random_int(0, 1, 2),
                'full_name' => $this->faker->name,
                'student_address' => $this->faker->address,
                'class' => 'TH0' . $i,
            ]);
        }
        
    }
}
