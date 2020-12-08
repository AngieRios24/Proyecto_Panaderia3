<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DuenoController extends Controller
{
    public function index(){
        return view('dueno.principal');
    }
}
