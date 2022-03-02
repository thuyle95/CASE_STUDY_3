<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = "orders";
    protected $primaryKey = "id";
    protected $guarded = [];

    public function order_details() {
        return $this->hasMany(Order_Detail::class, 'order_id', 'id');
    }
    public function users() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
