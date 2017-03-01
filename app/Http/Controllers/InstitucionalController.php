<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Quotation;
use Illuminate\Support\Facades\Input;
use DB;

class InstitucionalController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function listaPaginas()
  {
    $queryPaginas = DB::table('paginas')->get();
    return view('grid.gridPaginas', ['paginasSite' => $queryPaginas]);
  }

  public function cadastrarPaginas()
  {
    return view('form.formCadastroPagina');
  }

  public function EfetuaCadastroPagina(Request $addPaginaSite)
  {
    $tituloPagina =   $addPaginaSite->titulo;
    $descricaoPagina = $addPaginaSite->descricao;

    if ($addPaginaSite->_token) {
      DB::table('paginas')->insert(
        [
          'titulo' => $tituloPagina,
          'descricao' => $descricaoPagina,
          'status'   => 1,
          'img_destaque' => ""
        ]
      );
    }

    return redirect('institucional/cadastrar?msg=ok');
  }
}
