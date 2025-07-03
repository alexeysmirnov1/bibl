<?php

namespace Database\Seeders;

use App\Models\User;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        if (! config('app.admin_password')) {
            throw new Exception('Environment variable ADMIN_PASSWORD is required. You can set it in .env file');
        }

        if (User::where('email', config('app.admin_email'))->doesntExist()) {
            User::factory()->create([
                'name' => config('app.admin_email'),
                'email' => config('app.admin_email'),
                'password' => Hash::make(config('app.admin_password')),
            ]);
        }
    }
}
