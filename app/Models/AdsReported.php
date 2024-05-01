<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdsReported extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = 'ads_reported';
}
