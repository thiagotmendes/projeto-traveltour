@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"> Cadastrar Página </h3>
      </div>
      <div class="panel-body">
        @if (isset($_GET['msg']) and $_GET['msg'] == "ok")
          <div class="alert alert-success">
            Página cadastrada com sucesso!
          </div>
        @endif
        <form class="" action="{{url('institucional/inserir')}}" method="post">
          <div class="form-group">
            <label for="titulo"> Titulo </label>
            <input type="text" class="form-control" id="" placeholder="" name="titulo">
            {{csrf_field()}}
          </div>
          <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea name="descricao" rows="8" cols="80" class="editor"></textarea>
          </div>
          <div class="row">
            <div class="col-md-4 col-md-offset-4">
              <button type="submit" name="button" class="btn btn-success btn-block btn-lg"> Salvar </button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>

@endsection
