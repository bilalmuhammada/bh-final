<?php

namespace Database\Seeders;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => "Business for Sale",
                'form_view' => 'business_for_sale_details',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => "Shares for Sale",
                'form_view' => 'shares_for_sale_details',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => "Business Ideas",
                'form_view' => 'business_idea_details',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => "Investors",
                'form_view' => 'investors_details',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => "Investors Required",
                'form_view' => 'investors_required_details',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => "Franchise Opportunities",
                'form_view' => 'franchise_opportunities_details',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => "Export & Import Trade",
                'form_view' => 'export_import_trade_details',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => "Machinery & Supplies",
                'form_view' => 'machine_supplies_details',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        Category::insert($categories);

    }
}
