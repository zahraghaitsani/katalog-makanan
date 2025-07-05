<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin Warteg',
            'email' => 'www1@admin.com',
            'password' => Hash::make('password123'),
            'role' => 'admin'
        ]);
    }
}
