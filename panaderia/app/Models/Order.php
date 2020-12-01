<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
use App\Models\Way_To_Play;
use App\Models\Domiciliary;

class Order extends Model
{
    use HasFactory;
    public function customer(){
         return $this->belongsToMany('App\Customer');
    }
    public function way_to_play() {
        return $this->belongsToMany('App\Way_To_Play');
    }
    public function statu() {
        return $this->belongsToMany('App\Statu');
    }
    public function product() {
        return $this->belongsToMany('App\Product');
    }
    public function domiciliary() {
        return $this->belongsToMany('App\Domiciliary');
    }
}
