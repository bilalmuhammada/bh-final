<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\SubCategory;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sub_categories = [
            // First Subcategory
            [
                'category_id' => Category::find(1)->id,
                'name' => 'Business Services',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(1)->id,
                'name' => 'Government Services',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(1)->id,
                'name' => 'Trading & Forex',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(1)->id,
                'name' => 'Real Estate',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(1)->id,
                'name' => 'Commercial',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(1)->id,
                'name' => 'Retail & Services',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(1)->id,
                'name' => 'Food & Beverage',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(1)->id,
                'name' => 'Industrial',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(1)->id,
                'name' => 'Healthcare & Laboratory Industrial Supplies',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(1)->id,
                'name' => 'Businesses for Rent',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(1)->id,
                'name' => 'Assets & Interiors',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(1)->id,
                'name' => 'Trade Licenses',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(1)->id,
                'name' => 'Electrical Equipments',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(1)->id,
                'name' => 'Veterinary',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(1)->id,
                'name' => 'Manufacturing',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(1)->id,
                'name' => 'Marketing',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(1)->id,
                'name' => 'Garage & Workshops',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(1)->id,
                'name' => 'Construction',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(1)->id,
                'name' => 'Packaging & Shipping',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(1)->id,
                'name' => 'Office Furniture & Equipments',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(1)->id,
                'name' => 'Agriculture & Forestry',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(1)->id,
                'name' => 'Trade & Distribution',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(1)->id,
                'name' => 'Others',
                'created_at' => Carbon::now()
            ],
            // Second Subcategory
            [
                'category_id' => Category::find(2)->id,
                'name' => 'Running Businesses',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(2)->id,
                'name' => 'Start-up Businesses',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(2)->id,
                'name' => 'International Businesses',
                'created_at' => Carbon::now()
            ],
            // 3rd Subcategory
            [
                'category_id' => Category::find(3)->id,
                'name' => 'Business Services',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(3)->id,
                'name' => 'Government Services',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(3)->id,
                'name' => 'Al',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(3)->id,
                'name' => 'Electronics',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(3)->id,
                'name' => 'Trading & Forex',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(3)->id,
                'name' => 'Real Estate',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(3)->id,
                'name' => 'Commercial',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(3)->id,
                'name' => 'Retail & Services',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(3)->id,
                'name' => 'Food & Beverage',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(3)->id,
                'name' => 'Industrial',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(3)->id,
                'name' => 'Healthcare & Laboratory',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(3)->id,
                'name' => 'Veterinary',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(3)->id,
                'name' => 'Manufacturing',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(3)->id,
                'name' => 'Marketing',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(3)->id,
                'name' => 'Garage & Workshops',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(3)->id,
                'name' => 'Construction',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(3)->id,
                'name' => 'Packaging & Shipping',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(3)->id,
                'name' => 'Agriculture & Forestry',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(3)->id,
                'name' => 'Trade & Distribution',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(3)->id,
                'name' => 'Others',
                'created_at' => Carbon::now()
            ],
            //4th Subcategory
            [
                'category_id' => Category::find(4)->id,
                'name' => 'Business Services',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(4)->id,
                'name' => 'Government Services',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(4)->id,
                'name' => 'Al',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(4)->id,
                'name' => 'Electronics',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(4)->id,
                'name' => 'Trading & Forex',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(4)->id,
                'name' => 'Real Estate',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(4)->id,
                'name' => 'Commercial',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(4)->id,
                'name' => 'Retail & Services',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(4)->id,
                'name' => 'Food & Beverage',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(4)->id,
                'name' => 'Industrial',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(4)->id,
                'name' => 'Healthcare & Laboratory',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(4)->id,
                'name' => 'Veterinary',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(4)->id,
                'name' => 'Manufacturing',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(4)->id,
                'name' => 'Marketing',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(4)->id,
                'name' => 'Garage & Workshops',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(4)->id,
                'name' => 'Construction',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(4)->id,
                'name' => 'Packaging & Shipping',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(4)->id,
                'name' => 'Agriculture & Forestry',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(4)->id,
                'name' => 'Trade & Distribution',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(4)->id,
                'name' => 'Others',
                'created_at' => Carbon::now()
            ],
            // 5th Subcategory
            [
                'category_id' => Category::find(5)->id,
                'name' => 'Business Services',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(5)->id,
                'name' => 'Government Services',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(5)->id,
                'name' => 'Al',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(5)->id,
                'name' => 'Electronics',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(5)->id,
                'name' => 'Trading & Forex',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(5)->id,
                'name' => 'Real Estate',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(5)->id,
                'name' => 'Commercial',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(5)->id,
                'name' => 'Retail & Services',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(5)->id,
                'name' => 'Food & Beverage',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(5)->id,
                'name' => 'Industrial',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(5)->id,
                'name' => 'Healthcare & Laboratory',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(5)->id,
                'name' => 'Veterinary',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(5)->id,
                'name' => 'Manufacturing',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(5)->id,
                'name' => 'Marketing',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(5)->id,
                'name' => 'Garage & Workshops',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(5)->id,
                'name' => 'Construction',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(5)->id,
                'name' => 'Packaging & Shipping',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(5)->id,
                'name' => 'Agriculture & Forestry',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(5)->id,
                'name' => 'Industrial Supplies',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(5)->id,
                'name' => 'Assets & Interiors',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(5)->id,
                'name' => 'Electrical Equipments',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(5)->id,
                'name' => 'Office Furniture & Equipments',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(5)->id,
                'name' => 'Trade & Distribution',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(5)->id,
                'name' => 'Others',
                'created_at' => Carbon::now()
            ],
// 6th Subcategory
            [
                'category_id' => Category::find(6)->id,
                'name' => 'Business Services',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(6)->id,
                'name' => 'Government Services',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(6)->id,
                'name' => 'Al',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(6)->id,
                'name' => 'Electronics',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(6)->id,
                'name' => 'Trading & Forex',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(6)->id,
                'name' => 'Real Estate',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(6)->id,
                'name' => 'Commercial',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(6)->id,
                'name' => 'Retail & Services',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(6)->id,
                'name' => 'Food & Beverage',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(6)->id,
                'name' => 'Industrial',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(6)->id,
                'name' => 'Healthcare & Laboratory',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(6)->id,
                'name' => 'Veterinary',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(6)->id,
                'name' => 'Manufacturing',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(6)->id,
                'name' => 'Marketing',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(6)->id,
                'name' => 'Garage & Workshops',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(6)->id,
                'name' => 'Construction',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(6)->id,
                'name' => 'Packaging & Shipping',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(6)->id,
                'name' => 'Agriculture & Forestry',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(6)->id,
                'name' => 'Industrial Supplies',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(6)->id,
                'name' => 'Assets & Interiors',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(6)->id,
                'name' => 'Electrical Equipments',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(6)->id,
                'name' => 'Office Furniture & Equipments',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(6)->id,
                'name' => 'Trade & Distribution',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(6)->id,
                'name' => 'Others',
                'created_at' => Carbon::now()
            ],
// 7th Subcategory
            [
                'category_id' => Category::find(7)->id,
                'name' => 'Manufacturer',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(7)->id,
                'name' => 'Distributor',
                'created_at' => Carbon::now()
            ],
// 8th Subcategory

            [
                'category_id' => Category::find(8)->id,
                'name' => 'Business Services',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(8)->id,
                'name' => 'Government Services',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(8)->id,
                'name' => 'Al',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(8)->id,
                'name' => 'Electronics',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(8)->id,
                'name' => 'Trading & Forex',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(8)->id,
                'name' => 'Real Estate',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(8)->id,
                'name' => 'Commercial',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(8)->id,
                'name' => 'Retail & Services',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(8)->id,
                'name' => 'Food & Beverage',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(8)->id,
                'name' => 'Industrial',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(8)->id,
                'name' => 'Healthcare & Laboratory',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(8)->id,
                'name' => 'Veterinary',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(8)->id,
                'name' => 'Manufacturing',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(8)->id,
                'name' => 'Marketing',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(8)->id,
                'name' => 'Garage & Workshops',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(8)->id,
                'name' => 'Construction',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(8)->id,
                'name' => 'Packaging & Shipping',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(8)->id,
                'name' => 'Agriculture & Forestry',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(8)->id,
                'name' => 'Industrial Supplies',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(8)->id,
                'name' => 'Assets & Interiors',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(8)->id,
                'name' => 'Electrical Equipments',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(8)->id,
                'name' => 'Office Furniture & Equipments',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(8)->id,
                'name' => 'Trade & Distribution',
                'created_at' => Carbon::now()
            ],
            [
                'category_id' => Category::find(8)->id,
                'name' => 'Others',
                'created_at' => Carbon::now()
            ],

        ];

        SubCategory::insert($sub_categories);
    }
}
