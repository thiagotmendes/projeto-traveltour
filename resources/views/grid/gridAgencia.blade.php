@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title pull-left"> Agências cadastradas </h3>
        <a href="{{url('agencia/cadastrar')}}" class="btn btn-info pull-right btn-direito">
          Cadastrar Agência
        </a>
        <a href="#" class="btn btn-warning pull-right" data-toggle="modal" data-target="#modalSerivocs">
          Cadastrar Serviços
        </a>
        <div class="clearfix"> </div>
      </div>
      <div class="panel-body">
        @if (isset($_GET['msg']) and $_GET['msg'] == 'servico_ok')
          <div class="alert alert-success">
            Um novo serviço foi adicionado
          </div>
        @endif
        <table id="grid" class="table table-bordered table-striped table-hover grid">
          <thead>
            <tr>
              <td> Nome </td>
              <td></td>
              <td></td>
              <td></td>
              <td> Editar </td>
              <td> Excluir </td>
            </tr>
          </thead>
          <tbody>
            @foreach ($listaAgencia as $lista)
              <tr>
                <td> {{$lista->nome_fantasia  }} </td>
                <td> {{$lista->email}} </td>
                <td> {{$lista->tel}} </td>
                <td width='5%' class="text-center">
                  <a href="#" class="btn btn-warning">
                    <i class="fa fa-cogs" aria-hidden="true"></i>
                  </a>
                </td>
                <td width='5%' class="text-center">
                  <a href="#" class="btn btn-info">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                  </a>
                </td>
                <td width='5%' class="text-center">
                  <a href="#" class="btn btn-danger">
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
@endsection
