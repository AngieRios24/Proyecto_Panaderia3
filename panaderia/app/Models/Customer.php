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
    protected $fillable =[
        'customer_document','customer_name','customer_lastname','customer_phone',
        'customer_mail','typedocument_id'
    ];
}
