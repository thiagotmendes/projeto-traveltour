@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title pull-left"> Cadastrar Agência </h3>
        <span class="pull-right">
          <a href="{{url('agencia/lista')}}">
            <i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i>
            Voltar
          </a>
        </span>
        <div class="clearfix"></div>
      </div>
      <div class="panel-body">
        <form class="" action="{{ url('agencia/adicionar') }}" method="post" role="form" data-toggle="validator">
          <!-- row -->
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome"  data-match-error="Whoops, these don't match" placeholder="Nome" required>
                <div class="help-block with-errors"></div>
                {{ csrf_field() }}
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="email"> Email </label>
                <input type="email" class="form-control" name="email" id="email" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="telefone"> Telefone </label>
                <input type="text" class="form-control" name="telefone" id="telefone" placeholder="">
                <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>
          <!-- /row -->
          <!-- row -->
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="arquivo"> Logo </label>
                <input type="file" class="form-control" name="logo" id="logo" placeholder="">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="certificado"> Certificado </label>
                <input type="file" class="form-control" name="certificado" id="certificado" placeholder="">
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="data-ini">Data inicio</label>
                <input type="text" class="form-control" name="data-ini" id="dataIni" placeholder="">
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="data-fim">Data Expira</label>
                <input type="text" class="form-control" name="data-fim" id="dataFim" placeholder="">
              </div>
            </div>
          </div>
          <!-- /row -->
          <!-- row -->
            <div class="row">
              <div class="col-md-2">
                <div class="form-group">
                  <label for="cep">CEP</label>
                  <input type="text" class="form-control" name="cep" id="cep" placeholder="">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="endereco"> Endereço </label>
                  <input type="text" class="form-control" name="endereco" id="rua" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-md-1">
                <div class="form-group">
                  <label for="num"> N° </label>
                  <input type="text" class="form-control" name="num" id="num" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label for="bairro"> Bairro </label>
                  <input type="text" class="form-control" name="bairro" id="bairro" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-md-1">
                <div class="form-group">
                  <label for="uf"> UF </label>
                  <input type="text" name="estado" id="uf" value="" class="form-control">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="cidade"> Cidade </label>
                  <input type="text" class="form-control" name="cidade" id="cidade" placeholder="">
                </div>
              </div>
            </div>
          <!-- /row -->
          <div class="row">
            <div class="col-md-4 col-md-offset-4">
              <div class="form-group">
                <button type="submit" name="button" class="btn btn-success btn-block"> Cadastrar </button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
