<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle(),
            'salary'=>fake()->randomElement(['$30,00','$50,00' , '$60,00','84,000']),
            'location'=>fake()->randomElement(['Remotly' , 'Reyad,KSD','London,UK' ,'Cairo,Egypt']),
            'salary'=>fake()->randomElement(['$30,00','$50,00' , '$60,00','84,000']),
            'schedule'=>fake()->randomElement(['Full Time' , 'Part Time' ]),
            'url'=>fake()->url,
            'featured'=>false
        ];
    }
}
