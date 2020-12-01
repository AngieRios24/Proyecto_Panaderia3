<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Vendor;
use App\Models\TypeDocument;
class VendorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vendor.index',[
            'vendor' =>DB::select("SELECT * FROM  ListarVendors()"),
            'type_document'=>TypeDocument::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendor.create',[
            'typedocuments'=>TypeDocument::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, TypeDocument $typedocument )
    {
        $vendor= new Vendor();
        $vendor->vendor_document=$request->get('id');
        $vendor->vendor_name=$request->get('nombre');
        $vendor->vendor_lastname=$request->get('apellido');
        $vendor->vendor_phone=$request->get('telefono');
        $vendor->vendor_mail = $request->get('usuario');
        $vendor->vendor_password=$request->get('contraseña');
        $vendor->typedocument_id=$request->get('tipo');

        DB::select("SELECT AddVendors('$vendor->vendor_document','$vendor->vendor_name',
        '$vendor->vendor_lastname','$vendor->vendor_phone', ' $vendor->vendor_mail',
        '$vendor->vendor_password','$vendor->typedocument_id')");
        return redirect("/vendors");
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
    public function edit($vendor_document)
    {
        $vendor = Vendor::find($vendor_document);
        return view('vendor.edit',[
            'vendor'=>$vendor,
            'type_document'=>TypeDocument::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $vendor_document)
    {
        $vendor= new Vendor();
        $vendor->vendor_document=$request->get('id');
        $vendor->vendor_name=$request->get('nombre');
        $vendor->vendor_lastname=$request->get('apellido');
        $vendor->vendor_phone=$request->get('telefono');
        $vendor->vendor_mail = $request->get('usuario');
        $vendor->vendor_password=$request->get('contraseña');
        $vendor->typedocument_id=$request->get('tipo');

        DB::select("SELECT UpdateVendors('$vendor->vendor_document','$vendor->vendor_name',
        '$vendor->vendor_lastname','$vendor->vendor_phone', ' $vendor->vendor_mail',
        '$vendor->vendor_password','$vendor->typedocument_id')");
        return redirect("/vendors");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($vendor_document)
    {
        DB::select("select DeleteVendors('$vendor_document')");
        return back();

    }
}
