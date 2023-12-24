<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'SuperAdmin',
            'role' => 'super_admin',
            'email' => 'superadmin@mail.com',
            'password' => bcrypt('password'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        \App\Models\User::factory()->create([
            'name' => 'HotelManager',
            'role' => 'hotel_manager',
            'email' => 'hotelmanager@mail.com',
            'password' => bcrypt('password'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Reservation',
            'role' => 'reservation',
            'email' => 'reservation@mail.com',
            'password' => bcrypt('password'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
