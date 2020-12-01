<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Domiciliary;
use Illuminate\Http\Request;
use App\Models\TypeDocument;

class DomiciliaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('domiciliary.index',[
            'domiciliary' =>DB::select("SELECT * FROM  ListarDomiciliary()"),
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
        return view('domiciliary.create',[
            'type_document'=>TypeDocument::all()
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
        $domiciliary= new Domiciliary();
        $domiciliary->domiciliary_document=$request->get('id');
        $domiciliary->domiciliary_name=$request->get('nombre');
        $domiciliary->domiciliary_lastname=$request->get('apellido');
        $domiciliary->domiciliary_phone=$request->get('telefono');
        $domiciliary->domiciliary_mail = $request->get('usuario');
        $domiciliary->domiciliary_password=$request->get('contraseña');
        $domiciliary->typedocument_id=$request->get('tipo');

        DB::select("SELECT AddDomiciliaries('$domiciliary->domiciliary_document',
        '$domiciliary->domiciliary_name','$domiciliary->domiciliary_lastname',
        '$domiciliary->domiciliary_phone', ' $domiciliary->domiciliary_mail',
        '$domiciliary->domiciliary_password','$domiciliary->typedocument_id')");
        return redirect("/domiciliary");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($domiciliary_document)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($domiciliary_document)
    {
        $domiciliary = Domiciliary::find($domiciliary_document);
        return view('domiciliary.edit',[
            'domiciliary'=>$domiciliary,
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
    public function update(Request $request, $domiciliary_document)
    {
        $domiciliary= new Domiciliary();
        $domiciliary->domiciliary_document=$request->get('id');
        $domiciliary->domiciliary_name=$request->get('nombre');
        $domiciliary->domiciliary_lastname=$request->get('apellido');
        $domiciliary->domiciliary_phone=$request->get('telefono');
        $domiciliary->domiciliary_mail = $request->get('usuario');
        $domiciliary->domiciliary_password=$request->get('contraseña');
        $domiciliary->typedocument_id=$request->get('tipo');

        DB::select("SELECT UpdateDomiciliaries('$domiciliary->domiciliary_document',
        '$domiciliary->domiciliary_name','$domiciliary->domiciliary_lastname',
        '$domiciliary->domiciliary_phone', ' $domiciliary->domiciliary_mail',
        '$domiciliary->domiciliary_password','$domiciliary->typedocument_id')");
        return redirect("/domiciliary");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($domiciliary_document)
    {
        DB::select("select DeleteDomiciliaries('$domiciliary_document')");
        return back();

    }
}
