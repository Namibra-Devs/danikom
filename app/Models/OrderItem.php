<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $fillable = [
        "product_order_id",
        "product_id",
        "user_id",
        "title",
        "sku",
        "category",
        "image",
        "summary",
        "description",
        "price",
        "previous_price",
        "product_size"

    ];

    public function product() {
        return $this->belongsTo('App\Models\Product');
    }
}
