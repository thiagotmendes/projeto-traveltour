<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quotation;
use Illuminate\Support\Facades\Input;
use DB;

class servicosController extends Controller
{
  public function cadastraServico(Request $addServico)
  {
    if ($addServico->_token) {
      DB::table('servicos')->insert(
        [
          'descricao'   => $addServico->servicos,
          'created_at'  => DB::raw('now()')
        ]
      );
      return redirect('ger-agencia/lista?msg=servico_ok');
    }
  }

  public function listaServicos()
  {
    $queryServicos = DB::table('servicos')->get();
    return view::make('grid.gridServicos', ['listaServicosView' => $queryServicos]);
  }

  public function adcLingua(Request $adcLingua)
  {
    DB::table('lingua_atendimento')->insert(
      [
        'descricao'   => $adcLingua->lingua,
        'created_at'  => DB::raw('now()')
      ]
    );

    return redirect('ger-agencia/lista?msg=lingua_ok');
  }
}
