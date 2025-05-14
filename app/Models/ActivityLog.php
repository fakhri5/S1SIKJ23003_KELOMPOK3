<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    public $timestamps = false;
    protected $table = 'activity_logs';
    protected $primaryKey = 'id_log';

    protected $fillable = [
        'id_user', 'action', 'entity', 'target_id', 'notes'
    ];

    public function admin()
    {
        return $this->belongsTo(User::class, 'id_admin', 'id_user');
    }
}
