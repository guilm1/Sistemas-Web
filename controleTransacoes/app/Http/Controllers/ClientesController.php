<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $clientes = Clientes::orderBy('nome','asc')->get();
      return view('clientes.index')
             ->with('clientes', $clientes);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Clientes::create($request->all());
        return redirect()
        ->route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show(Clientes $clientes)
    {
        return view('clientes.show')
               ->with('cliente', $clientes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit($clientes)
    {
      return view('clientes.edit',
      ['cliente'
      => Clientes::findOrFail($clientes)]);
      // return view('clientes.edit')
      //       ->with('cliente',$clientes);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $clientes = Clientes::findOrFail($id);
        $clientes->fill($request->all());
        $clientes->save();

        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientes = Clientes::findOrFail($id);
        $clientes->delete();
        return redirect()->route('clientes.index');
    }
}
