<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
    use HasFactory;
    protected $fillable = [
        "billing_country",
        "billing_fname",
        "billing_lname" ,
        "billing_address",
        "billing_city",
        "billing_email",
        "billing_number" ,
        "shpping_country",
        "shpping_fname",
        "shpping_lname",
        "shpping_address",
        "shpping_city",
        "shpping_email",
        "shpping_number" ,
        "shipping_method",
        "shipping_charge",
        "cart_total",
        "tax",
        "discount",
        "total",
        "method",
        "gateway_type",
        "currency_code",
        "order_number",
        "payment_status",
        "txnid",
        "charge_id",
        "order_status",
        'invoice_number',
        'receipt'
    ];


    public function orderitems() {
        return $this->hasMany('App\Models\OrderItem');
    }
}
