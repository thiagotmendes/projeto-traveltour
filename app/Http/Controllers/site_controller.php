<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class site_controller extends Controller
{
  public function index()
  {
    $queryEstadosLateral = DB::table('agencia')->distinct()->select('estado')->get();

    return view('welcome', ['listaEstados' => $queryEstadosLateral]);
  }
}
