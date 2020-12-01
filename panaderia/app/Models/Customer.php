<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TypeDocument;

class Customer extends Model
{
    use HasFactory;

    public function type_document (){
        return $this->belongsToMany('App\TypeDocument');
    }
}
