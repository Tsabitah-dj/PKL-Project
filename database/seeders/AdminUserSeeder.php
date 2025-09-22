<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'omega@example.com'],
            [
                'name' => 'omega',
                'password' => Hash::make('010203'),
                'role' => 'admin',
            ]
        );
    }
}
