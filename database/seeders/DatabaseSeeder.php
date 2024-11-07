<?php

namespace Database\Seeders;

use App\Models\Service;
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
        User::factory()->create([
            "name" => "Diego",
            "email" => "diego@example.com",
        ]);

        User::factory()->count(15)->create();

        User::query()
            ->inRandomOrder()
            ->limit(10)
            ->get()
            ->each(function (User $user) {
                Service::factory()->create([
                    "user_id" => $user->id,
                ]);
            });
    }
}
