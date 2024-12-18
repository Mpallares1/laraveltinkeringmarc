<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('films')->insert([
            [
                'Title' => 'Inception',
                'Genre' => 'Sci-Fi',
                'Sales' => 1000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Title' => 'The Dark Knight',
                'Genre' => 'Action',
                'Sales' => 1500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more default inserts as needed
        ]);
    }
}
