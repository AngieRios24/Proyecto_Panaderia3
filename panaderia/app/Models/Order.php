<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
use App\Models\WayToPlay;
use App\Models\Domiciliary;
use App\Models\Product;

class Order extends Model
{
    use HasFactory;
    public function customer(){
         return $this->belongsToMany('App\Customer');
    }
    public function way_to_pay() {
        return $this->belongsToMany('App\WayToPay');
    }

    public function product() {
        return $this->belongsToMany('App\Product','order_products')->withPivote('product_id');
    }
    public function statu() {
        return $this->belongsToMany('App\Statu','statu_orders')->withPivote('status_id');
    }
    public function domiciliary() {
        return $this->belongsToMany('App\Domiciliary');
    }
    protected $fillable =[
        'codigo','order_price','status_name','id',
    ];

}
