<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 100; $i < 120; $i++) {
            User::create([
                'name' => "test $i",
                'email' => "test$i@gmail.com",
                'password' => Hash::make('12345678'),
            ]);
        }
    }
}
