<?php

namespace App\Models;

use App\Helpers\SiteHelper;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $appends = [
        // 'other_user',
        // 'latest_message',
        // 'unread_count',
        // 'latest_message_recieved_time_diff',
        // 'unread_ids',
        // 'latest_message_sender_id'
    ];

    public function messages()
    {
        return $this->hasMany(Message::class, 'chat_id', 'id');
    }

    public function firstUser()
    {
        return $this->belongsTo(User::class, 'first_user_id');
    }

    public function secondUser()
    {
        return $this->belongsTo(User::class, 'second_user_id');
    }

    public function latestMessage()
    {
        return $this->hasOne(Message::class, 'chat_id')->latest();
    }

    public function unreadMessages()
    {
        return $this->hasMany(Message::class, 'chat_id')->where('is_readed', false);
    }

    public function getOtherUserAttribute()
    {
        $current_user_id = SiteHelper::getLoginUserId();
        if ($this->first_user_id == $current_user_id) {
            return $this->secondUser;
        }
        return $this->firstUser;
    }

    public function getLatestMessageAttribute()
    {
        if ($this->status == 'requested') {
            return "Sent you a message request!";
        }
        return $this->latestMessage ? $this->latestMessage->message : null;
    }

    public function getLatestMessageSenderIdAttribute()
    {
        if ($this->status == 'requested') {
            return 0;
        }
        return $this->latestMessage ? $this->latestMessage->sender_id : 0;
    }

    public function getUnreadCountAttribute()
    {
        return $this->unreadMessages()->count();
    }

    public function getLatestMessageRecievedTimeDiffAttribute()
    {
        $msg = $this->latestMessage;
        if ($msg) {
            return Carbon::parse($msg->sended_at)->diffForHumans();
        }
        return Carbon::parse($this->created_at)->diffForHumans();
    }

    public function getUnreadIdsAttribute()
    {
        return $this->unreadMessages()->pluck('id');
    }

    public function ad() {
        return $this->belongsTo(Listing::class);
    }
}
