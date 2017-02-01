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
    $queryAgencia = DB::table('agencia')->get();
    return view('grid.gridAgencia', ['listaAgencia' => $queryAgencia]);
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

    if ($addAgencia->_token):
      DB::table('agencia')->insert(
        [
          'nome'  => $nome,
          'tel'   => $telefone,
          'email' => $email,
          'logo'  => 'aqui entra valor',
          'certificado'       => 'aqui entra valor',
          'data_inicio_cert'  => '2018-01-01',
          'data_fim_cert'     => '2018-01-01',
          'endereco'          => $endereco,
          'num'               => $num,
          'bairro'            => $bairro,
          'cidade'            => $cidade,
          'estado'            => $estado,
          'idstatus'          => 0,
          'idplano'           => 0,
          'created_at'        => DB::raw('now()')
        ]
      );

      return redirect('agencia/cadastrar?msg=ok');
    else:
      echo "realizar ajuste de erro";
    endif;
  }

}
