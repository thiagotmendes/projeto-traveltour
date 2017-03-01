@extends('layouts.app')
@section('content')
<div class="container-fluid">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title pull-left"> Paginas Cadastradas </h3>
      <a href="{{url('institucional/cadastrar')}}" class="btn btn-info pull-right btn-direito" >
        Cadastrar nova página
      </a>
      <div class="clearfix">  </div>
    </div>
    <div class="panel-body">
      <table class="table table-bordered table-striped table-hover grid">
        <thead>
          <tr>
            <th>Pagina</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($paginasSite as $paginas)
            <tr>
              <td> {{$paginas->titulo}} </td>
              <td width='5%' class="text-center">
                <a href="" class="btn btn-info">
                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </a>
              </td>
              <td width='5%' class="text-center">
                <a href="" class="btn btn-danger">
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
@endsection
