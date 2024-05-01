<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListingUserApproval extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['listing_name', 'user_name'];

    public function listing()
    {
        return $this->belongsTo(Listing::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getListingNameAttribute()
    {
        return $this->listing->title ?? '';
    }

    public function getUserNameAttribute()
    {
        return $this->user->name;
    }
}
