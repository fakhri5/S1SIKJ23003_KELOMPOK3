<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartGroup extends Model
{
    public $timestamps = false;
    protected $table = 'cart_groups';
    protected $primaryKey = 'id_group';

    protected $fillable = [
        'id_user', 'id_store', 'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    public function store()
    {
        return $this->belongsTo(Store::class, 'id_store', 'id_store');
    }

    public function items()
    {
        return $this->hasMany(CartItem::class, 'id_group', 'id_group');
    }
}
