<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'id_order';

    protected $fillable = [
        'id_user', 'order_date', 'pickup_time', 'total_amount', 'order_status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    public function details()
    {
        return $this->hasMany(OrderDetail::class, 'id_order', 'id_order');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class, 'id_order', 'id_order');
    }
}
