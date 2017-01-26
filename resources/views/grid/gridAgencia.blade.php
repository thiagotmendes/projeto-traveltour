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
        <table class="table table-bordered">
          <thead>
            <tr>
              <td> Nome </td>
              <td></td>
              <td></td>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
@endsection
