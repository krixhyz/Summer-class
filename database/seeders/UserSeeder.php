<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    User::create([
        'name' => 'John Doe',
        'email' => 'john@example.com',
        'password' => 'password123',
    ]);

    User::create([
        'name' => 'Jane Smith',
        'email' => 'jane@example.com',
        'password' => 'password123',
    ]);

    User::create([
        'name' => 'Alice Johnson',
        'email' => 'alice@example.com',
        'password' => 'password123',
    ]);

    User::create([
        'name' => 'Bob Anderson',
        'email' => 'bob@example.com',
        'password' => 'password123',
    ]);

    User::create([
        'name' => 'Charlie Brown',
        'email' => 'charlie@example.com',
        'password' => 'password123',
    ]);

    User::create([
        'name' => 'Emily Davis',
        'email' => 'emily@example.com',
        'password' => 'password123',
    ]);

    User::create([
        'name' => 'David Wilson',
        'email' => 'david@example.com',
        'password' => 'password123',
    ]);

    User::create([
        'name' => 'Sophia Martinez',
        'email' => 'sophia@example.com',
        'password' => 'password123',
    ]);

    User::create([
        'name' => 'Michael Lee',
        'email' => 'michael@example.com',
        'password' => 'password123',
    ]);

    User::create([
        'name' => 'Olivia White',
        'email' => 'olivia@example.com',
        'password' => 'password123',
    ]);
}
}
