<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $appends = [
        'image_url',
        'created_at_formatted',
        'active_ads_count',
        'is_subscription_active',
    ];

    protected $guarded = [];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function attachment()
    {
        return $this->hasOne(Attachment::class, 'object_id', 'id')->where('object','User')->where('context', 'profile-image');
    }

    public function listings()
    {
        return $this->hasMany(Listing::class, 'created_by', 'id');
    }

    public function subscription()
    {
        return $this->hasOne(Subscription::class, 'user_id', 'id')->where('is_active', 1);
    }

    public function getCreatedAtFormattedAttribute()
    {
        return Carbon::parse($this->created_at)->format('M Y');
    }

    public function getActiveAdsCountAttribute()
    {
        return $this->listings->where('status', 'active')->count();
    }

    public function getImageUrlAttribute()
    {
        $attachment = $this->attachment;
        if ($attachment) {
           $profile_image = $attachment;
           if (!empty($profile_image)) {
               return asset('uploads/users/profile-images/' . $profile_image->name);
           }
        }
        return asset('images/default/profile.jpg');
    }

    public function getIsSubscriptionActiveAttribute()
    {
        if ($this->plan_id != null || $this->subscription()->where('is_active', 1)->exists()) {
            return true;
        }

        return false;
    }

}
