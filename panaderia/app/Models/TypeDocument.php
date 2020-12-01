<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeDocument extends Model
{
    use HasFactory;
    public function vendor() {
        return $this->belongsToMany('App\Vendor');
    }
    public function customer() {
        return $this->belongsToMany('App\Customer');
    }
    public function Domiciliary() {
        return $this->belongsToMany('App\Domiciliary');
    }
}
