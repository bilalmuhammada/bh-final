<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class UserNotification extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $appends = ['is_read'];

    public function notification()
    {
        return $this->belongsTo(Notification::class);
    }

    public function getIsReadAttribute()
    {
        if ($this->read_at == NULL) {
            return 0;
        } else {
            return 1;
        }
    }

    protected static function booted()
    {

        static::created(function ($UserNotification) {
            /********************************
             * &Activity *
             ******************************/
            Activity::create([
                'object_id' => $UserNotification->id,
                'object' => 'UserNotification',
                'actor_id' => Auth::id(),
                'type' => 'user-notification-create'
            ]);
        });

        static::updating(function ($UserNotification) {
            /********************************
             * &Activity *
             ******************************/
            $dirty_cols = array_keys($UserNotification->getDirty());
            $old_values = $new_values = [];
            $excluded_cols = [];
            if (empty($UserNotification->creating)) {
                if (!empty($dirty_cols)) {
                    foreach ($dirty_cols as $col) {
                        if (!in_array($col, $excluded_cols)) {
                            $old_values[$col] = $UserNotification->getOriginal($col) ?: '';
                            $new_values[$col] = $UserNotification->getDirty()[$col];
                        }
                    }
                    if (!empty($old_values) || !empty($new_values)) {
                        Activity::create([
                            'object_id' => $UserNotification->id,
                            'object' => 'UserNotification',
                            'actor_id' => Auth::id(),
                            'old_value' => json_encode($old_values),
                            'new_value' => json_encode($new_values),
                            'type' => 'user-notification-update'
                        ]);
                    }
                }
            } else {
                unset($UserNotification->creating);
            }
        });

        static::deleted(function ($UserNotification) {
            /********************************
             * &Activity *
             ******************************/
            Activity::create([
                'object_id' => $UserNotification->id,
                'object' => 'UserNotification',
                'actor_id' => Auth::id(),
                'type' => 'user-notification-delete'
            ]);
        });
    }
}
