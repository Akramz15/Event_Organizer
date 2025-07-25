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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'EventOrganizerASM@gmail.com',
            'password' => Hash::make('akramkasep'),
        ]);

        $this->call(GuestStarSeeder::class);
    }
}
