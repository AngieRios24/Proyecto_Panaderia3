<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Category;
use App\Models\Product;
class VistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('cliente');
        }




    public function index()
    {
        return view('productos.productos',[
            'products' =>DB::select("SELECT * FROM  ListarProducts()")

        ]);
    }

}
