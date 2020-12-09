<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use DB;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('product.index',[
            'product' =>DB::select("SELECT * FROM  ListarProducts()"),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create',[
            'categories'=>Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Category $category)
    {

        /*$cover = $request->file('productImag');
        $extension = $cover->getClientOriginalExtension();
        \Storage::disk('public')->put($cover->getFilename().'.'.$extension,  \File::get($cover));*/

        $product= new Product();
        $product->id=$request->get('id');
        $product->product_name=$request->get('nombre');
        $product->product_description=$request->get('descripcion');
        $product->product_price=$request->get('precio');
        $product->product_photo = $request->get('productImag');
        $product->category_id=$request->get('categoria_id');

        DB::select("SELECT AgregarProducts('$product->id','$product->product_name', '$product->product_description',
        '$product->product_price', '$product->product_photo', '$product->category_id')");
        return redirect("/products");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product =Product::find($id);
        return view('product.edit',[
            'product'=>$product,
            'categories'=>Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product= new Product();
        $product->id=$request->get('id');
        $product->product_name=$request->get('nombre');
        $product->product_description=$request->get('descripcion');
        $product->product_price=$request->get('precio');
        $product->product_photo = $request->get('productImag');
        $product->category_id=$request->get('categoria_id');

        DB::select("SELECT UpdateProducts('$product->id','$product->product_name', '$product->product_description',
        '$product->product_price', '$product->product_photo', '$product->category_id')");
        return redirect("/products");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::select("select DeleteProducts('$id')");
        return back();
    }
}
