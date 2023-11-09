<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\CheckinLog;
use App\Models\Ipad;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::factory()->create([
            'name' => 'mattot',
            'email' => 'mattot@test.com',
            'role' => 'admin',
            'password' => bcrypt('password'),
        ]);

        for ($i = 2; $i < 700; $i++) {
            User::factory()->create();
        }

        for ($i = 2; $i < 700; $i++) {
            Ipad::factory()->create(['user_id' => $i]);
        }


        for ($i = 2; $i < 700; $i++) {
            CheckinLog::factory()->create(['user_id' => $i]);
            CheckinLog::factory()->create(['user_id' => $i]);
            CheckinLog::factory()->create(['user_id' => $i]);
            CheckinLog::factory()->create(['user_id' => $i]);
            CheckinLog::factory()->create(['user_id' => $i]);
            CheckinLog::factory()->create(['user_id' => $i]);
        }
    }
}
