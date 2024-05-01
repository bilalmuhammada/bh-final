<?php

namespace Database\Seeders;

use App\Models\Plan;
use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Plans = [
            [
                'name' => "Standard Plan",
                'rank' => "standard",
                'price' => 1000,
                'currency' => "AED",
                'period' => "monthly",
                'auto_refresh_times' => "1",
                'allowed_images' => "",
                'featured_days' => "0",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => "Premium Plan",
                'rank' => "premium",
                'price' => 1500,
                'currency' => "AED",
                'period' => "monthly",
                'auto_refresh_times' => "3",
                'allowed_images' => "",
                'featured_days' => "5",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        Plan::insert($Plans);
    }
}
