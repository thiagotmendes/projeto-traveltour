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
    $queryServicos = DB::table('servicos')->get();
    return view('grid.gridAgencia', ['listaAgencia' => $queryAgencia, 'listaServicosView' => $queryServicos]);
  }

  // INSERE NO BANCO DE DADOS
  public function insertBanco(Request $addAgencia)
  {
    /**************************************/
    $cnpj                     = $addAgencia->cnpj;
    $data_abertura            = $addAgencia->data_abertura;
    $nome_fantasia            = $addAgencia->nome_fantasia;
    $razao_social             = $addAgencia->razao_social;
    $cadastour                = $addAgencia->cadastour;
    $inscricao_estadual       = $addAgencia->inscricao_estadual;
    $isento_inscEstadual      = $addAgencia->isento_inscEstadual;
    $inscricao_municipal      = $addAgencia->inscricao_municipal;
    $porte                    = $addAgencia->porte;
    $representante            = $addAgencia->representante;
    $cpf_representante        = $addAgencia->cpf_representante;
    $data_nasc_representante  = $addAgencia->data_nasc_representante;
    // dados de contato
    $email                    = $addAgencia->email;
    $celular                  = $addAgencia->celular;
    $telefone                 = $addAgencia->telefone;
    $telefonia_gratuita       = $addAgencia->telefonia_gratuita;
    $dataInicio               = explode('/',$addAgencia->dataIni);
    $dataFim                  = explode('/',$addAgencia->dataFim);
    $cep                      = $addAgencia->cep;
    $endereco                 = $addAgencia->endereco;
    $num                      = $addAgencia->num;
    $bairro                   = $addAgencia->bairro;
    $estado                   = $addAgencia->estado;
    $cidade                   = $addAgencia->cidade;
    /***************************************/
    var_dump($data_abertura);

    if ($addAgencia->_token):
      DB::table('agencia')->insert(
        [
          'CNPJ'                    => $cnpj,
          'data_abertura'           => $data_abertura,
          'nome_fantasia'           => $nome_fantasia,
          'razao_social'            => $razao_social,
          'cadastour'               => $cadastour,
          'inscrição_estadual'      => $inscricao_estadual,
          'isento'                  => $isento_inscEstadual,
          'inscricao_municipal'     => $inscricao_municipal,
          'porte'                   => $porte,
          'representante'           => $representante,
          'cpf_representante'       => $cpf_representante,
          'data_nasc_representante' => $data_nasc_representante,

          'tel'               => $telefone,
          'cel'               => $celular,
          'email'             => $email,
          'telefonia_gratuita'  => $telefonia_gratuita,
          'logo'              => 'aqui entra valor',
          'certificado'       => 'aqui entra valor',
          'data_inicio_cert'  => $dataInicio[2]."-".$dataInicio[1]."-".$dataInicio[0],
          'data_fim_cert'     => $dataFim[2]."-".$dataFim[1]."-".$dataFim[0],
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
