<?php

namespace App\Models;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
    use SoftDeletes;

    protected $table = 'stores';
    protected $primaryKey = 'id_store';

    protected $fillable = [
        'id_user',
        'store_name',
        'slug',
        'description',
        'store_address',
        'store_logo',
        'store_banner',
        'store_status'
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'id_store', 'id_store');
    }

    public function categories()
    {
        return $this->belongsToMany(ProductCategory::class, 'product_categories', 'id_category', 'id_store');
    }

    public function favoriteBy()
    {
        return $this->belongsToMany(User::class, 'favorite_stores', 'id_store', 'id_user')->withTimestamps();
    }
}
