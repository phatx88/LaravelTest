<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class OrderItem extends Pivot
{
    use HasFactory;
    protected $table = 'order_item';
    public $timestamps = false;
    public function product(){
        return $this->belongsTo(Product::class , 'product_id');
    }
    public function order(){
        return $this->belongsTo(Order::class , 'order_id');
    }

}
