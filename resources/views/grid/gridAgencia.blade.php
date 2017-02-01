@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title pull-left"> Agências cadastradas </h3>
        <a href="{{url('agencia/cadastrar')}}" class="btn btn-info pull-right">
          Cadastrar
        </a>
        <div class="clearfix"> </div>
      </div>
      <div class="panel-body">
        <table id="grid" class="table table-bordered table-striped table-hover">
          <thead>
            <tr>
              <td> Nome </td>
              <td></td>
              <td></td>
              <td> Editar </td>
              <td> Excluir </td>
            </tr>
          </thead>
          <tbody>
            @foreach ($listaAgencia as $lista)
              <tr>
                <td> {{$lista->nome}} </td>
                <td> {{$lista->email}} </td>
                <td> {{$lista->tel}} </td>
                <td width='5%' class="text-center"> <a href="#" class="btn btn-info"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a> </td>
                <td width='5%' class="text-center"> <a href="#" class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i> </a> </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
