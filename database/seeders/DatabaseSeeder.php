<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name' => 'Sohojware',
            'email' => 'sohojwareltd@gmail.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
        ]);

        $this->call([
            ProviderSeeder::class,
            ServiceSeeder::class,
            PatientResourceSeeder::class,
            FAQSeeder::class,
            SettingsSeeder::class,
        ]);
    }
}
