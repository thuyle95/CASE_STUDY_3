<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
    use HasFactory;
    protected $table = "order_details";
    protected $primaryKey = "id";
    protected $quarded = [];

    public function orders() {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }
    public function products() {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
