<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Tag::insert([
            [
                'name' => 'example',
                'slug' => 'example',
                'description' => 'example',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'technology',
                'slug' => 'technology',
                'description' => 'technology',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
