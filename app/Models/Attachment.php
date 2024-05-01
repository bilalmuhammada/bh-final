<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $appends = [
        'listing_image_url'
    ];

    public function getListingImageUrlAttribute()
    {
        $file_name = $this->name;
        if ($this->context == 'Listing-image') {
            return asset('uploads/listings') . '/' . $file_name;
        } else {
            return asset('uploads/listings/documents') . '/' . $file_name;
        }
        return '';
    }
}
