<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrivilegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Privilege::insert([
            [
                'name' => 'Post Create',
                'slug' => 'post-create',
                'description' => 'Create a new post',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Post Edit',
                'slug' => 'post-edit',
                'description' => 'Edit a post',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Post Delete',
                'slug' => 'post-delete',
                'description' => 'Delete a post',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
