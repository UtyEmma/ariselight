<?php

namespace Database\Seeders;

use App\Enums\Roles;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $email = implode(['admin@', env('APP_DOMAIN')]);
        User::create([
            'email' => $email,
            'firstname' => "Super",
            'lastname' => 'Admin',
            'password' => Hash::make('1234567890'),
            "role" => Roles::SUPERADMIN,
        ]);
    }
}
