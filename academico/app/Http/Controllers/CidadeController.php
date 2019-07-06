<?php
namespace App\Http\Controllers;
use App\Cidade;
use App\Estado;
use Illuminate\Http\Request;
class CidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $cidades = Cidade::all();
      $estados = Estado::all();
      return view ('cidades.index', [ 'cidades' => $cidades,
                                      'estados' => $estados]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estado = Estado::all();
        return view('cidades.create',
            ['estado' => $estado ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Cidade::create($request->all());
      return redirect()->route('cidades.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function show(Cidade $cidade)
    {
        return view('cidades.show')
               ->with('cidade',$cidade);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function edit(Cidade $cidade)
    {
      $estado = Estado::all();
      return view('cidades.edit',
          [ 'cidade' => $cidade ,
            'estado' => $estado] );
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cidade $cidade)
    {
      $cidade->fill($request->all());
      $cidade->save();
      session()->flash('mensagem', 'Cidade atualizada com sucesso!');
      return redirect()->route('cidades.index');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cidade $cidade)
    {
        $cidade->delete();
        session()->flash('mensagem','Cidade Excluída com sucesso!');
        return redirect()->route('cidades.index');
    }
}
