<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'name',
        'desc',
        'SKU',
        'image',
        'category_id',
        'quantity',
        'price',
    ];
    protected $primaryKey = 'id';
    public function categories() {
        return $this->belongsTo(\App\Models\Category::class,'category_id','id');
    }
    public function order_details() {
        return $this->hasMany(Order_Detail::class, 'product_id', 'id');
    }
    public function carts() {
        return $this->hasMany(Cart::class, 'product_id', 'id');
    }
}
