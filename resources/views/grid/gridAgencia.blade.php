@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title pull-left"> Agências cadastradas </h3>
        <a href="{{url('ger-agencia/cadastrar')}}" class="btn btn-info pull-right btn-direito">
          Cadastrar Agência
        </a>
        <a href="#" class="btn btn-warning pull-right btn-direito" data-toggle="modal" data-target="#modalSerivocs">
          Cadastrar Serviços
        </a>
        <a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modalLingua">
          Cadastrar Lingua de atendimento
        </a>
        <div class="clearfix"> </div>
      </div>
      <div class="panel-body">
        @if (isset($_GET['msg']) and $_GET['msg'] == 'servico_ok')
          <div class="alert alert-success">
            Um novo serviço foi adicionado
          </div>
        @endif
        @if (isset($_GET['msg']) and $_GET['msg'] == 'lingua_ok')
          <div class="alert alert-success">
            Uma nova lingua foi adicionada
          </div>
        @endif
        @if (isset($_GET['msg']) and $_GET['msg'] == "link_ok")
          <div class="alert alert-success">
            Link inserido com sucesso!
          </div>
        @endif
        <table id="grid" class="table table-bordered table-striped table-hover grid">
          <thead>
            <tr>
              <th> Nome </th>
              <th> Email </th>
              <th> Telefone </th>
              <td> </td>
              <td> </td>
              <td> </td>
              <td> </td>
              <td></td>
            </tr>
          </thead>
          <tbody>
            @foreach ($listaAgencia as $lista)
              <tr>
                <td> {{$lista->nome_fantasia  }} </td>
                <td> {{$lista->email}} </td>
                <td> {{$lista->tel}} </td>
                <td width='5%' class="text-center">
                  <a href="{{url('ger-agencia/dados/'.$lista->idagencia)}}" class="btn btn-primary">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                  </a>
                </td>
                <td width='5%' class="text-center">
                  <a href="#" class="btn btn-success btnAdcCode" alt="Codigo iframe" data-ag="{{$lista->idagencia}}">
                    <i class="fa fa-code" aria-hidden="true"></i>
                  </a>
                </td>
                <td width='5%' class="text-center">
                  <a href="{{url('ger-agencia/adcServicos/'.$lista->idagencia)}}" class="btn btn-warning">
                    <i class="fa fa-cogs" aria-hidden="true"></i>
                  </a>
                </td>
                <td width='5%' class="text-center">
                  <a href="{{url('ger-agencia/cadastrar/'.$lista->idagencia)}}" class="btn btn-info">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                  </a>
                </td>
                <td width='5%' class="text-center">
                  <a href="{{url('ger-agencia/excluir/'.$lista->idagencia)}}" class="btn btn-danger">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                  </a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Modal -->
<div class="modal fade" id="modalSerivocs" tabindex="-1" role="dialog" aria-labelledby="modalSerivocs">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> Cadastrar Serviços </h4>
      </div>
      <div class="modal-body">
        @include('form.formServicos')
        @include('grid.gridServicos')
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalLingua" tabindex="-1" role="dialog" aria-labelledby="modalLingua">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> Cadastrar Linguas </h4>
      </div>
      <div class="modal-body">
        @include('form.formAdcLingua')
        @include('grid.gridLinguasAtendimento')
      </div>
    </div>
  </div>
</div>

<!-- ADICIONA LINK CONTEUDO PARA AGENCIA -->
<div class="modal fade" id="modalLinksExternos" tabindex="-1" role="dialog" aria-labelledby="modalLingua">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> Adicionar conteudo externo </h4>
      </div>
      <form class="formAdcLink" action="{{url('ger-agencia/linksExternos')}}" method="post">
        <div class="modal-body">
            <input type="hidden" name="idAgenciaLink" class="idAgenciaLink" name="" value="">
            {{csrf_field()}}
            <div class="row">
              <div class="col-md-4">
                <input type="text" name="titulo[]" value="" class="form-control" placeholder="Titulo">
              </div>
              <div class="col-md-8">
                <div class="input-group">
                  <input type="text" name="link[]" class="form-control" placeholder="Adicionar Codigo para incorporação">
                  <span class="input-group-btn">
                    <button class="btn btn-default btnAddItem" type="button"> Add <i class="fa fa-plus-circle fa-1x" aria-hidden="true"></i> </button>
                  </span>
                </div>
              </div>
            </div>


            <div class="">
              <div class="row conteudoInput">

              </div>
            </div>
        </div>
        <div class="modal-footer">
          <div class="row">
            <div class="col-md-4 col-md-offset-4">
              <button type="submit" name="button" class="btn btn-success btn-block"> Salvar </button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection


  <script type="text/javascript">
    function confirmaDel(id) {
      var confirma = confirm("Deseja remover esse País?");
      if (confirma == true) {
        window.location.href = "{{url('addpais/excluir')}}/"+id;
      }
    }
  </script>
