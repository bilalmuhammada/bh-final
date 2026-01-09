<?php

namespace Database\Seeders;

use App\Models\Chat;
use App\Models\Message;
use Illuminate\Database\Seeder;

class ChatSeeder extends Seeder
{
    public function run()
    {
        Chat::factory()
            ->count(10)
            ->create()
            ->each(function ($chat) {
                // Ensure the listing has an image attachment
                \App\Models\Attachment::create([
                    'name' => "listing-" . $chat->ad_id . ".jpg",
                    'file_name' => "listing-" . $chat->ad_id,
                    'type' => "jpg",
                    'object' => 'Listing',
                    'object_id' => $chat->ad_id,
                    'context' => 'Listing-image',
                ]);

                Message::factory()
                    ->count(rand(5, 15))
                    ->create([
                        'chat_id' => $chat->id,
                        'sender_id' => rand(0, 1) ? $chat->first_user_id : $chat->second_user_id,
                        'receiver_id' => function (array $attributes) use ($chat) {
                            return ($attributes['sender_id'] == $chat->first_user_id) ? $chat->second_user_id : $chat->first_user_id;
                        },
                    ]);
            });
    }
}
