<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role_id' => Role::firstWhere('role_key', 'admin')->id,
            'name' => 'Admin',
            'email' => 'admin@web.com',
            'phone' => '1111111111',
            'dob' => '2001-01-01',
            'country_id' => '99',
            'nationality_id' => '99',
            'password' => Hash::make('123456'),
        ]);

        User::create([
            'role_id' => Role::firstWhere('role_key', 'user')->id,
            'name' => 'User',
            'email' => 'user@web.com',
            'phone' => '1111111111',
            'dob' => '2001-01-01',
            'country_id' => '99',
            'nationality_id' => '99',
            'password' => Hash::make('123456'),
        ]);
    }
}
