<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::query()->updateOrCreate(
            ['email' => 'info@myvisaroute.com'],
            ['name' => 'Latika Gupta', 'password' => Hash::make('Latika#1234'), 'is_admin' => true],
        );

        User::query()->updateOrCreate(
            ['email' => 'suryakant@myvisaroute.com'],
            ['name' => 'Surya Kant', 'password' => Hash::make('Surya#0710'), 'is_admin' => false],
        );
    }
}