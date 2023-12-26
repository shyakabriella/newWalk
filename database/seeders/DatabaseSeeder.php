<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Request;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Seed some dummy data
        Request::create(['title' => 'Request 1']);
        Request::create(['title' => 'Request 2']);
        Request::create(['title' => 'Request 3']);
    }
}
