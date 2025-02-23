<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\PricingSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        User::updateOrcreate(['email' => 'test@instructor.com'],
        [
            'first_name' => 'Test',
            'last_name' => 'User',
            'email' => 'test@instructor.com',
            'role' => 'instructor',
            'contact_number' => '09*********',
            'password' => bcrypt('password'),
            'email_verified_at' => now()
        ]);
        User::updateOrcreate(['email' => 'test@student.com'],
        [
            'first_name' => 'Test',
            'last_name' => 'User',
            'email' => 'test@student.com',
            'role' => 'student',
            'contact_number' => '09*********',
            'password' => bcrypt('password'),
            'email_verified_at' => now()
        ]);
        User::updateOrcreate(['email' => 'test@admin.com'],
        [
            'first_name' => 'Test',
            'last_name' => 'Admin',
            'email' => 'test@admin.com',
            'role' => 'admin',
            'contact_number' => '09*********',
            'password' => bcrypt('password'),
            'email_verified_at' => now()
        ]);

        $this->call([
            PricingSeeder::class,
        ]);
    }
}
