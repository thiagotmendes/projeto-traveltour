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
  public function cadastrarAgencia($id = NULL)
  {
    if (!empty($id)) {
      $queryAgencia = DB::table('agencia')->where('idagencia',$id)->get();
    } else {
      $queryAgencia = "";
    }
    return view('form.formAgencia', ['DadoAgencia' => $queryAgencia]);
  }

  // GERA GRID
  public function listaAgencia()
  {
    $queryAgencia = DB::table('agencia')->get();
    $queryServicos = DB::table('servicos')->get();
    $queryLinguas = DB::table('lingua_atendimento')->get();

    return view(
      'grid.gridAgencia',
      [
        'listaAgencia' => $queryAgencia,
        'listaServicosView' => $queryServicos,
        'listaLingua'       => $queryLinguas
      ]
    );
  }

  // INSERE NO BANCO DE DADOS DADOS DA AGENCIA
  public function insertBanco(Request $addAgencia)
  {

    /**************************************/
    $cnpj                     = $addAgencia->cnpj;
    $data_abertura            = $addAgencia->data_abertura;
    $nome_fantasia            = $addAgencia->nome_fantasia;
    $slugSite                 = str_slug($addAgencia->nome_fantasia, '-');
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
    $slugCidade               = str_slug($addAgencia->cidade, '-');

    /***************************************/
    //  VERIFICA SE EXISTE ARQUIVO PARA LOGO
    if(!empty(Input::file('logo'))):
      // cria o caminho para o upload do arquivo
      $destinationPath = public_path() . '/arquivos/';
      // captura a extensão do arquivo
      $extension = Input::file('logo')->getClientOriginalExtension();
      // cria um nome para o arquivo
      $filename = 'arq-'.str_replace(' ','-',$slugSite)."-". rand(1111,9999) .".". $extension;
      $extencao = array('jpg','png');
      //VERIFICA A EXTENSÃO DO ARQIVO
      if(in_array($extension,$extencao)){
        // realiza o upload do arquivo
        Input::file('logo')->move($destinationPath, $filename);
      }  else {
        return redirect('addjogo/?msg=erro');
      }
    endif;

    //  VERIFICA SE EXISTE ARQUIVO PARA LOGO
    if(!empty(Input::file('certificado'))):
      // cria o caminho para o upload do arquivo
      $destinationPathCertificado = public_path() . '/certificados/';
      // captura a extensão do arquivo
      $extensionCertificado = Input::file('certificado')->getClientOriginalExtension();
      // cria um nome para o arquivo
      $filenameCertificado = 'cert-'.str_replace(' ','-',$nome_fantasia)."-". rand(1111,9999) .".". $extension;
      $extencaoCertificado = array('jpg','png');
      //VERIFICA A EXTENSÃO DO ARQIVO
      if(in_array($extensionCertificado,$extencaoCertificado)){
        // realiza o upload do arquivo
        Input::file('certificado')->move($destinationPathCertificado, $filenameCertificado);
      }  else {
        return redirect('addjogo/?msg=erro');
      }
    endif;

    if ($addAgencia->_token):
      DB::table('agencia')->insert(
        [
          'CNPJ'                    => $cnpj,
          'data_abertura'           => $data_abertura,
          'nome_fantasia'           => $nome_fantasia,
          'razao_social'            => $razao_social,
          'cadastour'               => $cadastour,
          'inscricao_estadual'      => $inscricao_estadual,
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
          'logo'              => "arquivos/".$filename,
          'certificado'       => 'certificados/'.$filenameCertificado,
          'data_inicio_cert'  => $dataInicio[2]."-".$dataInicio[1]."-".$dataInicio[0],
          'data_fim_cert'     => $dataFim[2]."-".$dataFim[1]."-".$dataFim[0],
          'endereco'          => $endereco,
          'num'               => $num,
          'bairro'            => $bairro,
          'cidade'            => $cidade,
          'estado'            => $estado,
          'idstatus'          => 0,
          'idplano'           => 0,
          'created_at'        => DB::raw('now()'),
          'slug'              => $slugSite,
          'cep'               => $cep,
          'descricao'         => 'vazio',
          'slug-cidade'       => $slugCidade
        ]
      );

      return redirect('ger-agencia/cadastrar?msg=ok');
    else:
      echo "realizar ajuste de erro";
    endif;
  }

  // EXCLUI DADOS DA agencia
  public function ExcluiAgencia($id)
  {
    DB::table('agencia')->where('idagencia', '=', $id)->delete();
    DB::table('servicos_agencia')->where('idagencia', '=', $id)->delete();
    DB::table('lingua_agencia')->where('idagencia', '=', $id)->delete();

    return redirect('ger-agencia/lista?msg=delete_ok');
  }

  public function adcServicos($id)
  {
    $queryServicos = DB::table('servicos')->get();
    $queryAgencia = DB::table('agencia')
                        ->where('idagencia','=',$id)
                        ->get();
    $queryAdcLingua = DB::table('lingua_atendimento')->get();

    //$queryVerificaServ = DB::table('servicos_agencia')->get();

    return view(
      'form.formGerenciaServicos',
      [
        'listaServico' => $queryServicos,
        'listaAgencia' => $queryAgencia,
        'listaLinguas' => $queryAdcLingua
      ]
    );
  }

  // ADICIONA SERVIÇO PARA AGENCIA
  public function gerenciaCadastro(Request $addServico)
  {
    $idAgencia = $addServico->idagencia;
    $servicoAgencia = $addServico->servicos;
    // EFETUA A LIGAÇÃO ENTRE AGENCIA E SERVIÇO
    if ($addServico->_token) {
      foreach ($servicoAgencia as $servicos) {
        $queryServicoAgencia = DB::table('servicos_agencia')
                                  ->where('idagencia',$idAgencia)
                                  ->where('idservicos',$servicos)
                                  ->get();
        var_dump($queryServicoAgencia);
        if(count($queryServicoAgencia) == 0){
          DB::table('servicos_agencia')->insert(
            [
              'idservicos'  => $servicos,
              'idagencia'   => $idAgencia,
              'created_at'  => DB::raw('now()')
            ]
          );
        }
        return redirect('ger-agencia/adcServicos/'.$idAgencia."?msg=ok");
      }
    } else {
      return redirect('ger-agencia/adcServicos/'.$idAgencia."?msg=erro");
    }
  }

  // CADASTRA AS LINGUAS EM UMA AGENCIA
  public function gerenciacadastroLingua(Request $adcLingua)
  {
    $idAgencia = $adcLingua->idagencia;
    $idLinguas = $adcLingua->linguas;
    //  EFETUA A LIGAÇÃO ENTRE AGENCIA E LINGUA
    if ($adcLingua->_token) {
      foreach ($idLinguas as $lingua) {
        $queryServicoAgencia = DB::table('lingua_agencia')
                                  ->where('idagencia',$idAgencia)
                                  ->where('idlingua',$lingua)
                                  ->get();

        if(count($queryServicoAgencia) == 0){
          DB::table('lingua_agencia')->insert(
            [
              'idlingua'  => $lingua,
              'idagencia'   => $idAgencia,
              'created_at'  => DB::raw('now()')
            ]
          );
        }
      }
      return redirect('ger-agencia/adcServicos/'.$idAgencia."?msg=ok_lingua");
    } else {
      return redirect('ger-agencia/adcServicos/'.$idAgencia."?msg=erro_lingua");
    }
  }

  // ADICIONA OS LINKS EXTERNOS
  public function CadastroLinkExterno(Request $addLinkExterno)
  {
    if ($addLinkExterno->_token) {
      $tituloLink = $addLinkExterno->titulo;
      $descricaoLink = $addLinkExterno->link;
      $count = 0;
      if (!empty($tituloLink)) {
        foreach ($tituloLink as $titulo) {
          DB::table('link_externo_agencia')->insert(
            [
              'idagencia' => $addLinkExterno->idAgenciaLink,
              'titulo'    => $titulo,
              'descricao' => $descricaoLink[$count],
              'created_at'  => DB::raw('now()')
            ]
          );
          $count++;
        }
      }
    }
    return redirect('ger-agencia/lista?msg=link_ok');
  }

  public function dadosAgencia($id)
  {
    $queryPrincipalAgencia = DB::table('agencia')->where('idagencia',$id)->get();
    // capta os serviços da agencia
    $queryServicoAgencia = DB::table('servicos')
                              ->join('servicos_agencia', 'servicos.idservicos','servicos_agencia.idservicos' )
                              ->where('servicos_agencia.idagencia',$id)
                              ->get();
    // capta as linguas de cada agencia
    $queryLinguasAgencia = DB::table('lingua_atendimento')
                              ->join('lingua_agencia', 'lingua_atendimento.idlingua','lingua_agencia.idlingua')
                              ->where('lingua_agencia.idagencia',$id)
                              ->get();

    return view('grid.gridDadosAgencia',
                  [
                  'agencia' => $queryPrincipalAgencia,
                  'listaServico' => $queryServicoAgencia,
                  'lista_linguas' => $queryLinguasAgencia
                  ]
                );
  }

}
