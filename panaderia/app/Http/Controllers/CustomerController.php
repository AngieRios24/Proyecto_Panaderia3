<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Auth;


class CustomerController extends Controller
{




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(Auth::user()->role=='cliente'){

echo(Auth::user());

            $customer= new customer();
        $customer->customer_document=Auth::user()->documento;
        $customer->customer_name=Auth::user()->name;
        $customer->customer_lastname=Auth::user()->apellido;
        $customer->customer_phone=Auth::user()->telefono;
        $customer->customer_mail=Auth::user()->mail;
        $customer->typedocument_id=Auth::user()->tipo;

        DB::select("SELECT AddCustomers('$customer->customer_document','$customer->customer_name',
        '$customer->customer_lastname','$customer->customer_phone', '$customer->customer_mail',
        '$customer->typedocument_id')");
    }



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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
