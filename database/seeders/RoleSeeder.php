<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Roles = array(
            array('name' => 'Admin', 'role_key' => 'admin'),
            array('name' => 'User', 'role_key' => 'user'),
        );

        Role::insert($Roles);
    }
}
