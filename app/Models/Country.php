<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $appends = [
        'image_url'
    ];

    public function getImageUrlAttribute()
    {
        return asset('images/flags/' . $this->file_name_flag);
    }
}
