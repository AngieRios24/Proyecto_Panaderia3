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
    public function index()
    {
        return view('productos.index',[
            'categories' =>DB::select("SELECT * FROM  ListarCategories()")
        ]);

    }

    public function show($id)
    {

        $category = Category:: findOrFail($id);
        return view('productos.productos',[
            'category'=> $category,
        ]);

    }
}
