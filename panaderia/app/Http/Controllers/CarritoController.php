<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function index()
    {
        return view('vendedor.index',[

            'orders' =>DB::select("SELECT * FROM ListOrders()")

        ]);
    }
}
