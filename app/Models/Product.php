<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'stock',
        'sku',
        'category_id',
        'tags',
        'feature_image',
        'summary',
        'description',
        'current_price',
        'previous_price',
        'rating',
        'status',
        'meta_keywords',
        'meta_description',
        'type',
        'download_link',
        'download_file'
    ];

    public function category() {
        return $this->hasOne('App\Models\Pcategory','id','category_id');
    }

    public function product_images() {
        return $this->hasMany('App\Models\ProductImage');
    }
}
