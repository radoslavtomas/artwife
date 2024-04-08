<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Status;
use App\Models\User;
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

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);

        $statuses = ['draft', 'published', 'archived'];
        $roles = ['admin', 'editor'];

        foreach ($statuses as $status) {
            Status::factory()->create([
                'name' => $status
            ]);
        }

        foreach ($roles as $role) {
            Role::factory()->create([
                'name' => $role
            ]);
        }
    }
}
