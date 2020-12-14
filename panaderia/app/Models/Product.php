<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Order;
class Product extends Model
{
    use HasFactory;

    public function categories() {
        return $this->belongsTo(Category::class);
    }
    public function order() {
        return $this->belongsToMany('App\Order','order_products')->withPivote('order_id');
    }

}
