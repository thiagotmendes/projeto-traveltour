<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Quotation;
use Illuminate\Support\Facades\Input;
use DB;

class agenciaController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  // GERA FORMULÁRIO
  public function cadastrarAgencia()
  {
    return view('form.formAgencia');
  }

  // GERA GRID
  public function listaAgencia()
  {
    return view('grid.gridAgencia');
  }

  // INSERE NO BANCO DE DADOS
  public function insertBanco(Request $addAgencia)
  {
    /**************************************/
    $nome = $addAgencia->nome;
    $email = $addAgencia->email;
    $telefone = $addAgencia->telefone;
    $dataInicio = $addAgencia->dataIni;
    $dataFim = $addAgencia->dataFim;
    $cep = $addAgencia->cep;
    $endereco = $addAgencia->endereco;
    $num = $addAgencia->num;
    $bairro = $addAgencia->bairro;
    $estado = $addAgencia->estado;
    $cidade = $addAgencia->cidade;
    /***************************************/

    if ($addJogos->_token):

    else:
      echo "realizar ajuste de erro";
    endif;
  }

}
