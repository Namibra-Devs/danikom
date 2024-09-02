<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentGateway extends Model
{
  protected $fillable = ['title', 'details', 'subtitle', 'name', 'type', 'information'];
  public $timestamps = false;

  public function convertAutoData()
  {
    return json_decode($this->information, true);
  }

  public function getAutoDataText()
  {
    $text = $this->convertAutoData();
    return end($text);
  }

  public function showKeyword()
  {
    $data = $this->keyword == null ? 'other' : $this->keyword;
    return $data;
  }

  public function showCheckoutLink()
  {
    $link = '';
    $data = $this->keyword == null ? 'other' : $this->keyword;

    
      $link = route('front.paystack.submit');
    return $link;
  }
}
