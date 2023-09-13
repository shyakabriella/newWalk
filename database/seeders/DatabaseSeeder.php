<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\User::factory(10)->create();
        \App\Models\HomeSectionOne::factory(1)->create();
        \App\Models\HomeSectionTwo::factory(1)->create();
        \App\Models\HomeSectionThree::factory(1)->create();
        \App\Models\HomeSectionFour::factory(1)->create();
       \App\Models\HomeSectionFive::factory(1)->create();
        \App\Models\HomeSectionSix::factory(1)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
