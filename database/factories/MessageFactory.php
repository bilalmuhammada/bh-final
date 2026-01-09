<?php

namespace Database\Factories;

use App\Models\Message;
use App\Models\Chat;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class MessageFactory extends Factory
{
    protected $model = Message::class;

    public function definition()
    {
        return [
            'chat_id' => Chat::factory(),
            'sender_id' => function (array $attributes) {
                $chat = Chat::find($attributes['chat_id']);
                return rand(0, 1) ? $chat->first_user_id : $chat->second_user_id;
            },
            'receiver_id' => function (array $attributes) {
                $chat = Chat::find($attributes['chat_id']);
                return ($attributes['sender_id'] == $chat->first_user_id) ? $chat->second_user_id : $chat->first_user_id;
            },
            'message' => $this->faker->realText(100),
            'is_readed' => $this->faker->boolean(50),
            'is_delivered' => 1,
            'sended_at' => $this->faker->dateTimeBetween('-1 month', 'now'),
        ];
    }
}
