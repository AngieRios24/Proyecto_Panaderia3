<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TypeDocument;

class Vendor extends Model
{
    protected $primaryKey = 'vendor_document';
    use HasFactory;
    public function type_document (){
        return $this->belongsToMany('App\TypeDocument');
    }
}
