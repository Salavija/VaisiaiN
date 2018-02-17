<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';

    protected $fillable = [
        'product_id',
        'first_name',
        'last_name',
        'volume',
        'price',
    ];

    public function product()
    {
        return $this->hasOne(\App\Product::class, 'id', 'product_id');
    }
}
