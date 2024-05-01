<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $appends = [
        'image_url'
    ];

    public function sub_categories()
    {
        return $this->hasMany(SubCategory::class, 'category_id', 'id');
    }

    public function attachment()
    {
        return $this->hasOne(Attachment::class, 'object_id', 'id')->where('object', 'Category');
    }

    public function getImageUrlAttribute()
    {
        $attachment = $this->attachment;
        if (!$attachment) {
            return asset('images/default/category.svg');
        }
        $file_name = $attachment->file_name . ".". $attachment->type;
        return asset("uploads/categories/" . $file_name) ;
    }
}
