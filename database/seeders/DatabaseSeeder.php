<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
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

         User::create([
            'name' => 'SuperAdmin',
            'email' => 'admin@gmail.com',
            'phone' => '1234567890',
            'role' => 'superadmin',
            'password' => Hash::make('password'),
            
        ]);

         $this->call([
            RoleAndPermissionSeeder::class,
        ]);
    }
}
