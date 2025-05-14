<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FavoriteStore extends Model
{
    public $timestamps = false;
    protected $table = 'favorite_stores';
    protected $primaryKey = null;
    public $incrementing = false;

    protected $fillable = [
        'id_user', 'id_store'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    public function store()
    {
        return $this->belongsTo(Store::class, 'id_store', 'id_store');
    }
}
