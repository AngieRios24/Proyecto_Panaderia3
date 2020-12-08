<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Product;
use App\Models\Category;
class VistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('productos.index',[
            'categories' =>DB::select("SELECT * FROM  ListarCategories()")
        ]);
    }
    public function show($id){

        $category = Category::findOrFail($id);
        return view('productos.productos',[
           //'category'  =>DB::select("SELECT * FROM  Products()"),
            'category' => $category
        ]);
    }

}
