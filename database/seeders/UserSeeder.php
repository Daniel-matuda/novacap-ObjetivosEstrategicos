<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->count(100)->create();
        // $faker = Factory::create('pt_BR');

        // for ($i=0; $i <= 20 ; $i++) { 
        //     DB::table('users')->insert([
        //         'firstName' => $faker->firstName,
        //         'lastName' => $faker->lastName,
        //         'email' => $faker->email,
        //         'password' => bcrypt('123')
        //     ]);
        // }
    }
}
