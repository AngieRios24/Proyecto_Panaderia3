<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TypeDocument;

class Domiciliary extends Model
{
    protected $primaryKey = 'domiciliary_document';
    use HasFactory;
    public function type_document (){
        return $this->belongsToMany('App\TypeDocument');
    }
    public function oder() {
        return $this->belongsToMany('App\Order');
    }
}
