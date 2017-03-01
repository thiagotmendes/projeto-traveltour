<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;

class site_controller extends Controller
{
  //index do site
  public function index()
  {
    $queryEstadosLateral = DB::table('agencia')->distinct()->select('estado')->get();

    return View::make('welcome', ['listaEstados' => $queryEstadosLateral]);
  }

  // filtro por estado
  public function filtraEstado($id)
  {
    $queryEstadosLateral = DB::table('agencia')->distinct()->select('estado')->get();

    $queryFiltroEstado = DB::table('agencia')
                                ->select('nome_fantasia','logo')
                                ->where('estado',$id)
                                ->get();

    return view('site.estado',
      [
        'listaEstados' => $queryEstadosLateral,
        'filtroEstado' => $queryFiltroEstado
      ]
    );
  }
}
