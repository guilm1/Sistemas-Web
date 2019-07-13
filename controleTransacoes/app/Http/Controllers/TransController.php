<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trans;
use App\Clientes;
use App\Tipos;

class TransController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trans = Trans::all();
        return view('trans.index')
              ->with('trans', $trans)
              ->with('clientes', Clientes::all())
              ->with('tipos', Tipos::all());;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trans.create')
                ->with('clientes', Clientes::all())
                ->with('tipos', Tipos::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Trans::create($request->all());
      return redirect()->route('transacoes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trans  $trans
     * @return \Illuminate\Http\Response
     */
    public function show(Trans $trans)
    {
      return view('trans.show')->with('trans',$trans);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trans  $trans
     * @return \Illuminate\Http\Response
     */
    public function edit(Trans $trans)
    {
        return view('trans.edit')->with('trans',$trans);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trans  $trans
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trans $trans)
    {
      $trans->save();

      return redirect()->route('trans.show', $trans->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trans  $trans
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trans $trans)
    {
      $trans->delete();
      return redirect()->route('trans.index');
    }
}
