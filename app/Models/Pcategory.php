<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pcategory extends Model
{
    use HasFactory;
    protected $fillable = ['name','image', 'status','slug'];

    public function products() {
        return $this->hasMany('App\Models\Product','category_id','id');
    }
}
