<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Way_To_Play extends Model
{
    use HasFactory;
    public function order() {
        return $this->belongsToMany('App\Order');
    }
}
