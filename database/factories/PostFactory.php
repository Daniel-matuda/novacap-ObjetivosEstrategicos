<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $project = $this->faker->sentence(3);
        $stage = $this->faker->sentence(3);
        //não pensei em como fazer pro concluded ainda
        $status = $this->faker->sentence(2);
        $deadline = $this->faker->date;
        $concluded = $this->faker->randomFloat(2, 0, 1);
        
        return [
            'project' => $project,
            'sector' => Str::slug($project),
            'comments' => $this->faker->paragraph(),
            'user_id' => User::pluck('id')->random(),

            'stage' => $stage,
            'concluded' => $concluded,
            'status' => $status,
            'deadline' => $deadline,
            'sei' => '',
            'delete_status' => false
        ];
    }
}
