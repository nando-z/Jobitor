<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\Job;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $tags = Tag::factory(3)->create();
        Job::factory(30)->hasAttached($tags)->create(
            new Sequence(

                [
                    'featured' => true,
                ]

            )
        );
        // Employer::factory(10)->create();

    }
}
