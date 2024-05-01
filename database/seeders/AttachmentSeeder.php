<?php

namespace Database\Seeders;

use App\Models\Attachment;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttachmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attachments = [
            [
                'name' => "business_for_sale.jpg",
                'file_name' => "business_for_sale",
                'type' => "jpg",
                'object' => 'Category',
                'object_id' => 1,
                'context' => 'Category-image',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => "business_ideas.jpg",
                'file_name' => "business_ideas",
                'type' => "jpg",
                'object' => 'Category',
                'object_id' => 3,
                'context' => 'Category-image',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => "import_and_export.jpg",
                'file_name' => "import_and_export",
                'type' => "jpg",
                'object' => 'Category',
                'object_id' => 7,
                'context' => 'Category-image',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => "franchise.jpg",
                'file_name' => "franchise",
                'type' => "jpg",
                'object' => 'Category',
                'object_id' => 6,
                'context' => 'Category-image',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => "investors.jpg",
                'file_name' => "investors",
                'type' => "jpg",
                'object' => 'Category',
                'object_id' => 4,
                'context' => 'Category-image',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => "investors_required.jpg",
                'file_name' => "investors_required",
                'type' => "jpg",
                'object' => 'Category',
                'object_id' => 5,
                'context' => 'Category-image',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => "machinery_and_supplies.jpg",
                'file_name' => "machinery_and_supplies",
                'type' => "jpg",
                'object' => 'Category',
                'object_id' => 8,
                'context' => 'Category-image',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => "share_for_sale.jpg",
                'file_name' => "share_for_sale",
                'type' => "jpg",
                'object' => 'Category',
                'object_id' => 2,
                'context' => 'Category-image',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];
        Attachment::insert($attachments);
    }
}
