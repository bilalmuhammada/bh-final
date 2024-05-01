<?php

namespace App\Models;

use App\Helpers\SiteHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Alert extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];
    protected $appends = ['created_at_formatted'];

    public function getCreatedAtFormattedAttribute()
    {
        return SiteHelper::reformatReadableDateNice($this->created_at);
    }

    protected static function booted()
    {

        static::created(function ($Alert) {
            /********************************
             * &Activity *
             ******************************/
            Activity::create([
                'object_id' => $Alert->id,
                'object' => 'Alert',
                'actor_id' => Auth::id(),
                'type' => 'alert-create'
            ]);
        });

        static::updating(function ($Alert) {
            /********************************
             * &Activity *
             ******************************/
            $dirty_cols = array_keys($Alert->getDirty());
            $old_values = $new_values = [];
            $excluded_cols = [];
            if (empty($Alert->creating)) {
                if (!empty($dirty_cols)) {
                    foreach ($dirty_cols as $col) {
                        if (!in_array($col, $excluded_cols)) {
                            $old_values[$col] = $Alert->getOriginal($col) ?: '';
                            $new_values[$col] = $Alert->getDirty()[$col];
                        }
                    }
                    if (!empty($old_values) || !empty($new_values)) {
                        Activity::create([
                            'object_id' => $Alert->id,
                            'object' => 'Alert',
                            'actor_id' => Auth::id(),
                            'old_value' => json_encode($old_values),
                            'new_value' => json_encode($new_values),
                            'type' => 'alert-update'
                        ]);
                    }
                }
            } else {
                unset($Alert->creating);
            }
        });

        static::deleting(function ($Alert) {
            /********************************
             * &Activity *
             ******************************/
            Activity::create([
                'object_id' => $Alert->id,
                'object' => 'Alert',
                'actor_id' => Auth::id(),
                'type' => 'alert-delete'
            ]);
        });
    }

}
