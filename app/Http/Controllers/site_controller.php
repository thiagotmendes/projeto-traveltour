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
                                ->distinct()
                                ->select('cidade','slug-cidade as slugCidade')
                                ->where('estado',$id)
                                ->orderBy('cidade')
                                ->get();

    return view('site.estado',
      [
        'listaEstados' => $queryEstadosLateral,
        'filtroEstado' => $queryFiltroEstado
      ]
    );
  }

  public function filtraCidade($id)
  {
    $queryEstadosLateral = DB::table('agencia')->distinct()->select('estado')->get();

    $queryFiltroEstado = DB::table('agencia')
                                ->select('nome_fantasia','logo', 'tel', 'cel','endereco', 'bairro', 'cidade','num','slug')
                                ->where('slug-cidade',$id)
                                ->paginate(2);

    return view('site.filtroCidade',
      [
        'listaEstados' => $queryEstadosLateral,
        'filtroEstado' => $queryFiltroEstado
      ]
    );
  }

  public function singleAgencia($slug)
  {
    // mantem o menu lateral
    $queryEstadosLateral = DB::table('agencia')->distinct()->select('estado')->get();
    //busca pelos dados da agencia
    $querySingleAgencia = DB::table('agencia')->where('slug',$slug)->get();
    // recupera o ID da agencia
    $idAngecia = $querySingleAgencia[0]->idagencia;
    // captura os serviços prestados pela agencia
    $queryServicosAgenia = DB::table('servicos')
                          ->join('servicos_agencia','servicos_agencia.idservicos','=','servicos.idservicos')
                          ->where('servicos_agencia.idagencia',$idAngecia)
                          ->get();
    // pega os links adicionais
    $queryLinksAdicionais = DB::table('link_externo_agencia')->where('idagencia',$idAngecia)->get();

    return view('site.singleAgencia',
      [
        'listaEstados'    => $queryEstadosLateral,
        'singleAgencia'   => $querySingleAgencia,
        'servicosAgencia' => $queryServicosAgenia,
        'linksAdicionais' => $queryLinksAdicionais
      ]
    );
  }

}
