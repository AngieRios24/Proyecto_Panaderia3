<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Order;
class VendorController extends Controller
{
    public function index()
    {
        return view('vendedor.index',[

            'orders' =>DB::select("SELECT * FROM ListOrders()")

        ]);
    }
}
