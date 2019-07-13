<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipos;

class TiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $tipos = Tipos::orderBy('nome','asc')->get();
      return view('tipos.index')
             ->with('tipos', $tipos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tipos::create($request->all());
        return redirect()
        ->route('tipos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tipos  $tipos
     * @return \Illuminate\Http\Response
     */
    public function show(Tipos $tipos)
    {
        return view('tipos.show')
               ->with('tipo', $tipos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tipos  $tipos
     * @return \Illuminate\Http\Response
     */
    public function edit($tipos)
    {
      return view('tipos.edit',
      ['tipo'
      => Tipos::findOrFail($tipos)]);
      // return view('tipos.edit')
      //       ->with('cliente',$tipos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tipos  $tipos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tipos = Tipos::findOrFail($id);
        $tipos->fill($request->all());
        $tipos->save();

        return redirect()->route('tipos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tipos  $tipos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipos = Tipos::findOrFail($id);
        $tipos->delete();
        return redirect()->route('tipos.index');
    }
}
