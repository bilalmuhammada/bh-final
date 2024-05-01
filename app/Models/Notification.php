<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Notification extends Model
{
    use HasFactory;

    protected static function booted()
    {

        static::created(function ($Notification) {
            /********************************
             * &Activity *
             ******************************/
            Activity::create([
                'object_id' => $Notification->id,
                'object' => 'Notification',
                'actor_id' => Auth::id(),
                'type' => 'notification-create'
            ]);
        });

        static::updating(function ($Notification) {
            /********************************
             * &Activity *
             ******************************/
            $dirty_cols = array_keys($Notification->getDirty());
            $old_values = $new_values = [];
            $excluded_cols = [];
            if (empty($Notification->creating)) {
                if (!empty($dirty_cols)) {
                    foreach ($dirty_cols as $col) {
                        if (!in_array($col, $excluded_cols)) {
                            $old_values[$col] = $Notification->getOriginal($col) ?: '';
                            $new_values[$col] = $Notification->getDirty()[$col];
                        }
                    }
                    if (!empty($old_values) || !empty($new_values)) {
                        Activity::create([
                            'object_id' => $Notification->id,
                            'object' => 'Notification',
                            'actor_id' => Auth::id(),
                            'old_value' => json_encode($old_values),
                            'new_value' => json_encode($new_values),
                            'type' => 'notification-update'
                        ]);
                    }
                }
            } else {
                unset($Notification->creating);
            }
        });

        static::deleting(function ($Notification) {
            /********************************
             * &Activity *
             ******************************/
            Activity::create([
                'object_id' => $Notification->id,
                'object' => 'Notification',
                'actor_id' => Auth::id(),
                'type' => 'notification-delete'
            ]);
        });
    }
}
