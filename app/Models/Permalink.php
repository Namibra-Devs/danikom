<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permalink extends Model
{
    use HasFactory;
    protected $fillable = ['permalink', 'type', 'details'];
    public $timestamps = false;
}
