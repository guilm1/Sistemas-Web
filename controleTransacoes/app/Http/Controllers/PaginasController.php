<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trans;
use App\Clientes;
use App\Tipos;

class PaginasController extends Controller
{

    public function index()
    {
      $tipos = Tipos::all();

      return view ('principal.index')
             ->with('tipos',$tipos);
    }
}
